<?PHP
    $qID = 2;
	$question = 'Question not set';
	$answerA = 'unchecked';
	$answerB = 'unchecked';
	$answerC = 'unchecked';
	$answerD = 'unchecked';
	$answerE = 'unchecked';
	$answerF = 'unchecked';
	$A = "";
	$B = "";
	$C = "";
	$D = "";
	$E = "";
	$F = "";
	$username = "root";
	$password = "";
	$server = "localhost";
	$database = "survey";
	$conn = mysqli_connect($server, $username, $password, $database);
	if ($conn) {
		$stmt = mysqli_prepare($conn, "SELECT ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF FROM tblsurvey WHERE ID = ?");
		if ($stmt) {
			mysqli_stmt_bind_param($stmt, 'i', $qID);
			mysqli_stmt_execute($stmt);
			$res = mysqli_stmt_get_result($stmt);
			if (mysqli_num_rows($res) > 0) {
				$row = mysqli_fetch_assoc($res);
				$qID = $row['ID'];
				$question = $row['Question'];
				$A = $row['OptionA'];
				$B = $row['OptionB'];
				$C = $row['OptionC'];
				$D = $row['OptionD'];
				$E = $row['OptionE'];
				$F = $row['OptionF'];
			}
			else {
				print "Error - No rows";
			}
		}
		else {
			print "Error - DB ERROR";
		}
	}
	else {
		print "Error getting Survey";
	}
?>
<html>
<head>
<title>Question2/13</title>

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'>
</head>
<body style ='font-family: "Lato"'>

<FORM NAME ="form1" METHOD ="POST" ACTION ="process2.php">
<h2><?PHP print $question; ?></h2>
<hr>
<br>
<INPUT TYPE = 'Radio' Name ='q'  value= 'A' <?PHP print $answerA; ?>><?PHP print $A; ?><br>
<INPUT TYPE = 'Radio' Name ='q'  value= 'B' <?PHP print $answerB; ?>><?PHP print $B; ?><br>
<INPUT TYPE = 'Radio' Name ='q'  value= 'C' <?PHP print $answerC; ?>><?PHP print $C; ?><br>
<INPUT TYPE = 'Radio' Name ='q'  value= 'D' <?PHP print $answerD; ?>><?PHP print $D; ?><br>
<INPUT TYPE = 'Radio' Name ='q'  value= 'E' <?PHP print $answerE; ?>><?PHP print $E; ?><br>
<INPUT TYPE = 'Radio' Name ='q'  value= 'F' <?PHP print $answerF; ?>><?PHP print $F; ?><br>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Click here to vote">
</FORM>
</body>
</html>