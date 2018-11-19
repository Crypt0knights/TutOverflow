<?php
/*this code fetches votes in json format, will be used to plot bar charts using d3 js*/
    $username = "root"; 
    $password = "";   
    $hostname = "localhost";
    $database="survey";
	$conn = mysqli_connect($hostname, $username, $password, $database);
    $myquery = "SELECT  ID, Question, OptionA, OptionB, OptionC, OptionD, OptionE, OptionF, VoteA, VoteB, VoteC, VoteD, VoteE, VoteF FROM tblsurvey";
    $query = mysqli_query($conn, $myquery);
    if ( ! $query ) {
        echo mysql_error();
        die;
    }
    $data = array();
    for ($x = 0; $x < mysqli_num_rows($query); $x++) {
        $data[] = mysqli_fetch_assoc($query);
    }
    echo json_encode($data);
    mysqli_close($conn);
?>