<?PHP
$voteMessage = "";
$url = 'http://localhost/survey/fetch_json.php'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

$question = $characters[1]->Question;
$OptionA = $characters[1]->OptionA;
$OptionB = $characters[1]->OptionB;
$OptionC = $characters[1]->OptionC;
$OptionD = $characters[1]->OptionD;
$OptionE = $characters[1]->OptionE;
$OptionF = $characters[1]->OptionF;

$VoteA = $characters[1]->VoteA;
$VoteB = $characters[1]->VoteB;
$VoteC = $characters[1]->VoteC;
$VoteD = $characters[1]->VoteD;
$VoteE = $characters[1]->VoteE;
$VoteF = $characters[1]->VoteF;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link href="https://fonts.googleapis.com/css?family=Dosis|Kreon|Raleway" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>TutOverflow</title>
        <link href="src/css/bootstrap.min.css" rel="stylesheet">
        <link href="src/css/scrolling-nav.css" rel="stylesheet">
        <link href="src/css/landing.css" rel="stylesheet">

    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
            <h1>Complete Analysis</h1>
            <p><a href="survey1.php">Click here to Contribute to our Survey.</a></p>
            <br>
            <label id="plotChart1Title"></label><canvas id="plotChart1" width="200" height="50"></canvas><hr>
            <label id="plotChart2Title"></label><canvas id="plotChart2" width="200" height="50"></canvas><hr>
            <label id="plotChart3Title"></label><canvas id="plotChart3" width="200" height="50"></canvas><hr>
            <label id="plotChart4Title"></label><canvas id="plotChart4" width="200" height="50"></canvas><hr>
            <label id="plotChart5Title"></label><canvas id="plotChart5" width="200" height="50"></canvas><hr>
            <label id="plotChart6Title"></label><canvas id="plotChart6" width="200" height="50"></canvas><hr>
            <label id="plotChart7Title"></label><canvas id="plotChart7" width="200" height="50"></canvas><hr>
            <label id="plotChart8Title"></label><canvas id="plotChart8" width="200" height="50"></canvas><hr>
            <label id="plotChart9Title"></label><canvas id="plotChart9" width="200" height="50"></canvas><hr>
            <label id="plotChart10Title"></label><canvas id="plotChart10" width="200" height="50"></canvas><hr>
            <label id="plotChart11Title"></label><canvas id="plotChart11" width="200" height="50"></canvas><hr>
            <label id="plotChart12Title"></label><canvas id="plotChart12" width="200" height="50"></canvas><hr>
            <label id="plotChart13Title"></label><canvas id="plotChart13" width="200" height="50"></canvas>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'></script>
    <script>

	  var l  = "<?php echo $characters[0]->Question; ?>";
	  var a1 = "<?php echo $characters[0]->OptionA; ?>";
	  var a2 = "<?php echo $characters[0]->OptionB ?>";
	  var a3 = "<?php echo $characters[0]->OptionC ?>";
	  var a4 = "<?php echo $characters[0]->OptionD ?>";
	  var a5 = "<?php echo $characters[0]->OptionE ?>";
	  var a6 = "<?php echo $characters[0]->OptionF ?>";
	  var v1 = "<?php echo $characters[0]->VoteA ?>";
	  var v2 = "<?php echo $characters[0]->VoteB ?>";
	  var v3 = "<?php echo $characters[0]->VoteC ?>";
	  var v4 = "<?php echo $characters[0]->VoteD ?>";
	  var v5 = "<?php echo $characters[0]->VoteE ?>";
	  var v6 = "<?php echo $characters[0]->VoteF ?>";
      document.getElementById("plotChart1Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart1");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      
      

	  var l  = "<?php echo $characters[1]->Question; ?>";
	  var a1 = "<?php echo $characters[1]->OptionA; ?>";
	  var a2 = "<?php echo $characters[1]->OptionB ?>";
	  var a3 = "<?php echo $characters[1]->OptionC ?>";
	  var a4 = "<?php echo $characters[1]->OptionD ?>";
	  var a5 = "<?php echo $characters[1]->OptionE ?>";
	  var a6 = "<?php echo $characters[1]->OptionF ?>";
	  var v1 = "<?php echo $characters[1]->VoteA ?>";
	  var v2 = "<?php echo $characters[1]->VoteB ?>";
	  var v3 = "<?php echo $characters[1]->VoteC ?>";
	  var v4 = "<?php echo $characters[1]->VoteD ?>";
	  var v5 = "<?php echo $characters[1]->VoteE ?>";
	  var v6 = "<?php echo $characters[1]->VoteF ?>";
      document.getElementById("plotChart2Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart2");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      
    

	  var l  = "<?php echo $characters[2]->Question; ?>";
	  var a1 = "<?php echo $characters[2]->OptionA; ?>";
	  var a2 = "<?php echo $characters[2]->OptionB ?>";
	  var a3 = "<?php echo $characters[2]->OptionC ?>";
	  var a4 = "<?php echo $characters[2]->OptionD ?>";
	  var a5 = "<?php echo $characters[2]->OptionE ?>";
	  var a6 = "<?php echo $characters[2]->OptionF ?>";
	  var v1 = "<?php echo $characters[2]->VoteA ?>";
	  var v2 = "<?php echo $characters[2]->VoteB ?>";
	  var v3 = "<?php echo $characters[2]->VoteC ?>";
	  var v4 = "<?php echo $characters[2]->VoteD ?>";
	  var v5 = "<?php echo $characters[2]->VoteE ?>";
	  var v6 = "<?php echo $characters[2]->VoteF ?>";
      document.getElementById("plotChart3Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart3");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[3]->Question; ?>";
	  var a1 = "<?php echo $characters[3]->OptionA; ?>";
	  var a2 = "<?php echo $characters[3]->OptionB ?>";
	  var a3 = "<?php echo $characters[3]->OptionC ?>";
	  var a4 = "<?php echo $characters[3]->OptionD ?>";
	  var a5 = "<?php echo $characters[3]->OptionE ?>";
	  var a6 = "<?php echo $characters[3]->OptionF ?>";
	  var v1 = "<?php echo $characters[3]->VoteA ?>";
	  var v2 = "<?php echo $characters[3]->VoteB ?>";
	  var v3 = "<?php echo $characters[3]->VoteC ?>";
	  var v4 = "<?php echo $characters[3]->VoteD ?>";
	  var v5 = "<?php echo $characters[3]->VoteE ?>";
	  var v6 = "<?php echo $characters[3]->VoteF ?>";
      document.getElementById("plotChart4Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart4");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[4]->Question; ?>";
	  var a1 = "<?php echo $characters[4]->OptionA; ?>";
	  var a2 = "<?php echo $characters[4]->OptionB ?>";
	  var a3 = "<?php echo $characters[4]->OptionC ?>";
	  var a4 = "<?php echo $characters[4]->OptionD ?>";
	  var a5 = "<?php echo $characters[4]->OptionE ?>";
	  var a6 = "<?php echo $characters[4]->OptionF ?>";
	  var v1 = "<?php echo $characters[4]->VoteA ?>";
	  var v2 = "<?php echo $characters[4]->VoteB ?>";
	  var v3 = "<?php echo $characters[4]->VoteC ?>";
	  var v4 = "<?php echo $characters[4]->VoteD ?>";
	  var v5 = "<?php echo $characters[4]->VoteE ?>";
	  var v6 = "<?php echo $characters[4]->VoteF ?>";
      document.getElementById("plotChart5Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart5");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[5]->Question; ?>";
	  var a1 = "<?php echo $characters[5]->OptionA; ?>";
	  var a2 = "<?php echo $characters[5]->OptionB ?>";
	  var a3 = "<?php echo $characters[5]->OptionC ?>";
	  var a4 = "<?php echo $characters[5]->OptionD ?>";
	  var a5 = "<?php echo $characters[5]->OptionE ?>";
	  var a6 = "<?php echo $characters[5]->OptionF ?>";
	  var v1 = "<?php echo $characters[5]->VoteA ?>";
	  var v2 = "<?php echo $characters[5]->VoteB ?>";
	  var v3 = "<?php echo $characters[5]->VoteC ?>";
	  var v4 = "<?php echo $characters[5]->VoteD ?>";
	  var v5 = "<?php echo $characters[5]->VoteE ?>";
	  var v6 = "<?php echo $characters[5]->VoteF ?>";
      document.getElementById("plotChart6Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart6");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[6]->Question; ?>";
	  var a1 = "<?php echo $characters[6]->OptionA; ?>";
	  var a2 = "<?php echo $characters[6]->OptionB ?>";
	  var a3 = "<?php echo $characters[6]->OptionC ?>";
	  var a4 = "<?php echo $characters[6]->OptionD ?>";
	  var a5 = "<?php echo $characters[6]->OptionE ?>";
	  var a6 = "<?php echo $characters[6]->OptionF ?>";
	  var v1 = "<?php echo $characters[6]->VoteA ?>";
	  var v2 = "<?php echo $characters[6]->VoteB ?>";
	  var v3 = "<?php echo $characters[6]->VoteC ?>";
	  var v4 = "<?php echo $characters[6]->VoteD ?>";
	  var v5 = "<?php echo $characters[6]->VoteE ?>";
	  var v6 = "<?php echo $characters[6]->VoteF ?>";
      document.getElementById("plotChart7Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart7");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[7]->Question; ?>";
	  var a1 = "<?php echo $characters[7]->OptionA; ?>";
	  var a2 = "<?php echo $characters[7]->OptionB ?>";
	  var a3 = "<?php echo $characters[7]->OptionC ?>";
	  var a4 = "<?php echo $characters[7]->OptionD ?>";
	  var a5 = "<?php echo $characters[7]->OptionE ?>";
	  var a6 = "<?php echo $characters[7]->OptionF ?>";
	  var v1 = "<?php echo $characters[7]->VoteA ?>";
	  var v2 = "<?php echo $characters[7]->VoteB ?>";
	  var v3 = "<?php echo $characters[7]->VoteC ?>";
	  var v4 = "<?php echo $characters[7]->VoteD ?>";
	  var v5 = "<?php echo $characters[7]->VoteE ?>";
	  var v6 = "<?php echo $characters[7]->VoteF ?>";
      document.getElementById("plotChart8Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart8");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[8]->Question; ?>";
	  var a1 = "<?php echo $characters[8]->OptionA; ?>";
	  var a2 = "<?php echo $characters[8]->OptionB ?>";
	  var a3 = "<?php echo $characters[8]->OptionC ?>";
	  var a4 = "<?php echo $characters[8]->OptionD ?>";
	  var a5 = "<?php echo $characters[8]->OptionE ?>";
	  var a6 = "<?php echo $characters[8]->OptionF ?>";
	  var v1 = "<?php echo $characters[8]->VoteA ?>";
	  var v2 = "<?php echo $characters[8]->VoteB ?>";
	  var v3 = "<?php echo $characters[8]->VoteC ?>";
	  var v4 = "<?php echo $characters[8]->VoteD ?>";
	  var v5 = "<?php echo $characters[8]->VoteE ?>";
	  var v6 = "<?php echo $characters[8]->VoteF ?>";
      document.getElementById("plotChart9Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart9");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[9]->Question; ?>";
	  var a1 = "<?php echo $characters[9]->OptionA; ?>";
	  var a2 = "<?php echo $characters[9]->OptionB ?>";
	  var a3 = "<?php echo $characters[9]->OptionC ?>";
	  var a4 = "<?php echo $characters[9]->OptionD ?>";
	  var a5 = "<?php echo $characters[9]->OptionE ?>";
	  var a6 = "<?php echo $characters[9]->OptionF ?>";
	  var v1 = "<?php echo $characters[9]->VoteA ?>";
	  var v2 = "<?php echo $characters[9]->VoteB ?>";
	  var v3 = "<?php echo $characters[9]->VoteC ?>";
	  var v4 = "<?php echo $characters[9]->VoteD ?>";
	  var v5 = "<?php echo $characters[9]->VoteE ?>";
	  var v6 = "<?php echo $characters[9]->VoteF ?>";
      document.getElementById("plotChart10Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart10");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[10]->Question; ?>";
	  var a1 = "<?php echo $characters[10]->OptionA; ?>";
	  var a2 = "<?php echo $characters[10]->OptionB ?>";
	  var a3 = "<?php echo $characters[10]->OptionC ?>";
	  var a4 = "<?php echo $characters[10]->OptionD ?>";
	  var a5 = "<?php echo $characters[10]->OptionE ?>";
	  var a6 = "<?php echo $characters[10]->OptionF ?>";
	  var v1 = "<?php echo $characters[10]->VoteA ?>";
	  var v2 = "<?php echo $characters[10]->VoteB ?>";
	  var v3 = "<?php echo $characters[10]->VoteC ?>";
	  var v4 = "<?php echo $characters[10]->VoteD ?>";
	  var v5 = "<?php echo $characters[10]->VoteE ?>";
	  var v6 = "<?php echo $characters[10]->VoteF ?>";
      document.getElementById("plotChart11Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart11");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[11]->Question; ?>";
	  var a1 = "<?php echo $characters[11]->OptionA; ?>";
	  var a2 = "<?php echo $characters[11]->OptionB ?>";
	  var a3 = "<?php echo $characters[11]->OptionC ?>";
	  var a4 = "<?php echo $characters[11]->OptionD ?>";
	  var a5 = "<?php echo $characters[11]->OptionE ?>";
	  var a6 = "<?php echo $characters[11]->OptionF ?>";
	  var v1 = "<?php echo $characters[11]->VoteA ?>";
	  var v2 = "<?php echo $characters[11]->VoteB ?>";
	  var v3 = "<?php echo $characters[11]->VoteC ?>";
	  var v4 = "<?php echo $characters[11]->VoteD ?>";
	  var v5 = "<?php echo $characters[11]->VoteE ?>";
	  var v6 = "<?php echo $characters[11]->VoteF ?>";
      document.getElementById("plotChart12Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart12");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      

	  var l  = "<?php echo $characters[12]->Question; ?>";
	  var a1 = "<?php echo $characters[12]->OptionA; ?>";
	  var a2 = "<?php echo $characters[12]->OptionB ?>";
	  var a3 = "<?php echo $characters[12]->OptionC ?>";
	  var a4 = "<?php echo $characters[12]->OptionD ?>";
	  var a5 = "<?php echo $characters[12]->OptionE ?>";
	  var a6 = "<?php echo $characters[12]->OptionF ?>";
	  var v1 = "<?php echo $characters[12]->VoteA ?>";
	  var v2 = "<?php echo $characters[12]->VoteB ?>";
	  var v3 = "<?php echo $characters[12]->VoteC ?>";
	  var v4 = "<?php echo $characters[12]->VoteD ?>";
	  var v5 = "<?php echo $characters[12]->VoteE ?>";
	  var v6 = "<?php echo $characters[12]->VoteF ?>";
      document.getElementById("plotChart13Title").innerHTML = l;
      var plotCanvas = document.getElementById("plotChart13");
      Chart.defaults.global.defaultFontFamily = "Lato";
      Chart.defaults.global.defaultFontSize = 18;
      var plotData = 
      {
              
              labels: [a1,a2,a3,a4,a5,a6],
              datasets: 
              [
              {
                  data: [v1, v2, v3, v4, v5, v6],
                  backgroundColor: 
                  [
                      "#F44336",
                      "#3F51B5",
                      "#4CAF50",
                      "#FF9800",
                      "#FFEB3B"
                  ]
              }
              ]
      };
      
      var pieChart = new Chart(plotCanvas, 
      {
          type: 'pie',
          data: plotData
      });
      


</script>
            <!-- jQuery -->
            <script src="src/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="src/js/bootstrap.min.js"></script>

            <!-- Scrolling Nav JavaScript -->
            <script src="src/js/jquery.easing.min.js"></script>
            <script src="src/js/scrolling-nav.js"></script>

        </div>

    </body>

</html>