<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "survey";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("failed" . mysqli_error());
}
$a=$_GET['gm'];
$sql="UPDATE Courses set vote=vote + 1 where course_name='$a';";
$res=mysqli_query($conn,$sql);
if (!$res) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
else{
    $url = $_SERVER['HTTP_REFERER'];
    header("location:".$url);
}
?>