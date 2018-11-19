/*this code is for the admin to add new questions to the database*/
<?PHP
if (isset($_POST['SUBMISSION'])) {

	$question = $_POST['question'];
	$answerA = $_POST['AnswerA'];
	$answerB = $_POST['AnswerB'];
	$answerC = $_POST['AnswerC'];
	$answerD = $_POST['AnswerD'];
	$answerE = $_POST['AnswerE'];
	$answerF = $_POST['AnswerF'];

	$username = "root";
	$password = "";
	$server = "localhost";
	$database = "survey";

	$conn = mysqli_connect($server, $username, $password, $database);


	if ($conn) {

		echo "Database Connected<br>";
		$SQL = "INSERT INTO tblsurvey (Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF) VALUES (?,?,?,?,?,?,?)";

		$stmt = mysqli_prepare($conn, $SQL);
		if ($stmt) {
			mysqli_stmt_bind_param($stmt, 'sssssss', $question, $answerA, $answerB, $answerC, $answerD, $answerE, $answerF);
			mysqli_stmt_execute($stmt);
			print "The question has been added to the database";
			mysqli_stmt_close($stmt);
		} else {
			print "Database - error";
		}
	}
	else {
		print "Database NOT Found ";
	}
}

?>

<html>
<head>
<title>Survey Admin Page</title>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="setQuestion.php">

Enter a question: <INPUT TYPE = 'TEXT' Name ='question'  value="Set this Question" maxlength="250">
<p>
Answer A: <INPUT TYPE = 'TEXT' Name ='AnswerA'  value="Option A" maxlength="250" placeholder="Enter Option 1"><br>
Answer B: <INPUT TYPE = 'TEXT' Name ='AnswerB'  value="Option B" maxlength="250" placeholder="Enter Option 2"><br>
Answer C: <INPUT TYPE = 'TEXT' Name ='AnswerC'  value="Option C" maxlength="250" placeholder="Enter Option 3"><br>
Answer D: <INPUT TYPE = 'TEXT' Name ='AnswerD'  value="Option D" maxlength="250" placeholder="Enter Option 4"><br>
Answer E: <INPUT TYPE = 'TEXT' Name ='AnswerE'  value="Option E" maxlength="250" placeholder="Enter Option 5"><br>
Answer F: <INPUT TYPE = 'TEXT' Name ='AnswerF'  value="Option F" maxlength="250" placeholder="Enter Option 6"><br>
<P align = center>
<INPUT TYPE = "Submit" Name = "SUBMISSION"  VALUE = "Set this Question">
</P>

</FORM>

</body>
</html>









