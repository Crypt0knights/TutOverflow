<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="1000">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="display.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<a href="index.html" class="linkers"><button class="btn btn-default btn-danger" type="button">TutOverFlow</button></a>
<a href="write.php" class="linkers"><button class="btn btn-default btn-info float-right" type="button">Write Blog</button></a>
<?php
$c=mysqli_connect('localhost','root','','blogs');
if($c){
	$q="select * from `blog` order by blog_id desc";
	$r=mysqli_query($c,$q); 
	while($data=mysqli_fetch_array($r)){
		echo "<div class='container'>";
				echo "<div class='title'>";
					echo  $data['title']."<br>";
						echo "<div class ='container-fluid'>";
							echo  "<div class='author'>"."-".$data['author']."</div>";
							echo "<div class='date'>".$data['date_pub']."</div>";
						echo "</div>";
				echo "</div>";
				echo "<div class='pic'>";
					echo "<img src ='uploads/".$data['image']."'>";	
				echo "</div>";
		echo "</div>";
# for printing the content
				echo "<div class='container1 section_content'>";
					echo htmlspecialchars_decode(stripcslashes($data['content']));
				echo "</div>";
		echo "<br><br>"; 
	}
}

?>
</table>
</div>
</body>
</html>
