<?PHP
$voteMessage = "";
$url = 'http://localhost/survey/fetch_json.php'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

$question = $characters[0]->Question;
$OptionA = $characters[0]->OptionA;
$OptionB = $characters[0]->OptionB;
$OptionC = $characters[0]->OptionC;
$OptionD = $characters[0]->OptionD;
$OptionE = $characters[0]->OptionE;
$OptionF = $characters[0]->OptionF;

$VoteA = $characters[0]->VoteA;
$VoteB = $characters[0]->VoteB;
$VoteC = $characters[0]->VoteC;
$VoteD = $characters[0]->VoteD;
$VoteE = $characters[0]->VoteE;
$VoteF = $characters[0]->VoteF;

	if (isset($_POST['Submit1']) && isset($_POST['q'])) {
		$selected_radio = $_POST['q'];
		$idNumber = 1;
		$username = "root";
		$password = "";
		$server = "localhost";
		$database = "survey";
		$conn = mysqli_connect($server, $username, $password, $database);
		if ($conn) {
			if($selected_radio == "A") {
				$votedSQL = "UPDATE tblsurvey SET VoteA = VoteA + 1 WHERE ID = ?";
				$voteMessage = insert_vote($conn, $votedSQL, $idNumber);
			}
			else if($selected_radio == "B"){
				$votedSQL = "UPDATE tblsurvey SET VoteB = VoteB + 1 WHERE ID = ?";
				$voteMessage = insert_vote($conn, $votedSQL, $idNumber);
			}
			else if($selected_radio == "C"){
				$votedSQL = "UPDATE tblsurvey SET VoteC = VoteC + 1 WHERE ID = ?";
				$voteMessage = insert_vote($conn, $votedSQL, $idNumber);
			}
			else if($selected_radio == "D"){
				$votedSQL = "UPDATE tblsurvey SET VoteD = VoteD + 1 WHERE ID = ?";
				$voteMessage = insert_vote($conn, $votedSQL, $idNumber);
			}
			else if($selected_radio == "E"){
				$votedSQL = "UPDATE tblsurvey SET VoteE = VoteE + 1 WHERE ID = ?";
				$voteMessage = insert_vote($conn, $votedSQL, $idNumber);
			}
			else if($selected_radio == "F"){
				$votedSQL = "UPDATE tblsurvey SET VoteF = VoteF + 1 WHERE ID = ?";
				$voteMessage = insert_vote($conn, $votedSQL, $idNumber);
			}
			else {
				print "Error - could not record vote";
			}	
		}
	}
	else {
		print "You didn't select a voting option!";
	}



function insert_vote($conn, $sql, $id) {

	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	return "Thanks for voting!";
}


?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Process Survey</title>


    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'>
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style ='font-family: "Lato"'>
    <canvas id="plotChart" width="200" height="50"></canvas>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
    <script>
	  var l = "<?php echo $question ?>";
	  var a1 = "<?php echo $OptionA ?>";
	  var a2 = "<?php echo $OptionB ?>";
	  var a3 = "<?php echo $OptionC ?>";
	  var a4 = "<?php echo $OptionD ?>";
	  var a5 = "<?php echo $OptionE ?>";
	  var a6 = "<?php echo $OptionF ?>";
	  
	  var v1 = "<?php echo $VoteA ?>";
	  var v2 = "<?php echo $VoteB ?>";
	  var v3 = "<?php echo $VoteC ?>";
	  var v4 = "<?php echo $VoteD ?>";
	  var v5 = "<?php echo $VoteE ?>";
	  var v6 = "<?php echo $VoteF ?>";

      var plotCanvas = document.getElementById("plotChart");

      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;

      var densityData = {
        label: l,
        data: [v1, v2, v3, v4, v5, v6],
        backgroundColor: [
          'rgba(0, 99, 132, 0.6)',
          'rgba(30, 99, 132, 0.6)',
          'rgba(60, 99, 132, 0.6)',
          'rgba(90, 99, 132, 0.6)',
          'rgba(120, 99, 132, 0.6)',
          'rgba(150, 99, 132, 0.6)',
          'rgba(180, 99, 132, 0.6)',
          'rgba(210, 99, 132, 0.6)',
          'rgba(240, 99, 132, 0.6)'
        ],
        borderColor: [
          'rgba(0, 99, 132, 1)',
          'rgba(30, 99, 132, 1)',
          'rgba(60, 99, 132, 1)',
          'rgba(90, 99, 132, 1)',
          'rgba(120, 99, 132, 1)',
          'rgba(150, 99, 132, 1)',
          'rgba(180, 99, 132, 1)',
          'rgba(210, 99, 132, 1)',
          'rgba(240, 99, 132, 1)'
        ],
        borderWidth: 2,
        hoverBorderWidth: 0
      };

      var chartOptions = {
        scales: {
          yAxes: [{
            barPercentage: 0.5
          }]
        },
        elements: {
          rectangle: {
            borderSkipped: 'right',
          }
        }
      };

      var barChart = new Chart(plotCanvas, {
        type: 'horizontalBar',
        data: {
          labels: [a1,a2,a3,a4,a5,a6],
          datasets: [densityData],
        },
        options: chartOptions
      });

</script>

	<?PHP print $voteMessage . "<BR>"; ?>
<a href="survey2.php">See Next Question</a> 
  </body>

</html>
