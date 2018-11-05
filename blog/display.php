<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="120">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="display.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<?php
$c=mysqli_connect('localhost','root','','blogs');
if($c){
	$q="select * from `blog`";
	$r=mysqli_query($c,$q);
	while($data=mysqli_fetch_assoc($r)){
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

				echo "<div class='container section_content'>";
					echo $data['content'];
				echo "</div>";
         		

	}
}

?>
</table>
</div>
</body>
</html>