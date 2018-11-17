<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "projectdb";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("failed" . mysqli_error());
}
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

    <title>TutOverflow-Add Tutorials</title>
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/scrolling-nav.css" rel="stylesheet">
    <script type="text/javascript"></script>
</head>
<body>
<div id="">
<form name="add-form" method="GET" action="#">
<label>Technology</label><br><br>
<select>
<option value="c">C</option>
<option value="c++">C++</option>
<option value="python">Python</option>
<option value="java">JAVA</option>
<option value="ruby">Ruby</option>
<option value="go">Golang</option>
</select><br><br>
<label>Course Name</label><br><br>
<input type="text" name="cname" placeholder="Course Name"><br><br>
<label>Link</label><br><br>
<input type="text" name="clink" placeholder="Course Link"><br><br>
<label>Type</label><br><br>
<input type="radio" name="ctype" value="video">Video Tutorial<br>
<input type="radio" name="ctype" value="book">E-Book/Book<br>
<input type="radio" name="ctype" value="online-course">Online Course<br>
<label>Difficulty Level</label><br><br>
<input type="radio" name="clevel" value="beginner">Beginner<br>
<input type="radio" name="clevel" value="medium">Medium<br>
<input type="radio" name="clevel" value="expert">Expert<br>
<input type="submit" value="Submit Tutorial">
</form>



</div>

</body>
</html>