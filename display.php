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

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">TutOverflow</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden" style="color: aqua;">
                        <a class="page-scroll" href="#page-top"></a>
                    <li>
                        <a class="page-scroll" href="index.html">Popular Tutorials</a>
                    </li>
                    </li>
                    <li>
                        <a class="page-scroll" href="write.php">Write Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#trend">Trend Analysis</a>
                    </li>
                    <button class="btn btn-info navbar-btn">+ Add Tutorial</button>
                    <button class="btn btn-info navbar-btn">Login/Signup</button>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="blog-div">
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
</div>
</body>
</html>
