<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "projectdb";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) 
{
    die("failed" . mysqli_error());
}
$search_query = $_GET['search_tech'];
$search_query = strtolower($search_query);
$count_query = "UPDATE Languages set search_count=search_count+1 where technology='$search_query';";
$check = mysqli_query($conn, $count_query);
if (!$check) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
?>
<!-- HTML Code Starts -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Dosis|Kreon|Raleway" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TutOverflow-Find Courses</title>
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="src/css/scrolling-nav.css" rel="stylesheet">
    <link href="src/css/courses.css" rel="stylesheet">

</head>

<!-- Body starts here -->
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
                <a class="navbar-brand page-scroll" href="#page-top">TutOverflow</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden" style="color: aq        ua;">
                        <a class="page-scroll" href="#page-top"></a>
                    <li>
                        <a class="page-scroll" href="#tutorials">Popular Tutorials</a>
                    </li>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#trend">Trend Analysis</a>
                    </li>
                    <a href="add.php"><button class="btn btn-info navbar-btn">+ Add Tutorial</button></a>
                    <button class="btn btn-info navbar-btn">Login/Signup</button>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container-fluid">
        <div id="tech-image">
            <?php
        $img_src="img/".$search_query.".png";
        echo '<img src="'.$img_src.'" width="125" height="125" />';?>
        </div>
        <div id="tech-info">
            <div id="main-head">
            <?php
            echo '<h2>'.ucfirst($search_query)." Tutorials and Courses </h2>";?>
            </div>
            <div id="more-info">
            <?php
           $info="Get started with ".ucfirst($search_query)." by following the best online ".ucfirst($search_query)." tutorials submitted & voted by the programming community. Learn them and build your dreams!";
        echo '<h3>'.$info.'</h3>';
        ?>
            </div> 
        </div>
    </div>
    <div id="courses_list">
        <h1>List of Courses for <?php echo ucfirst($search_query);?></h1>
        <table>
          <thead>
              <tr>
               <th style="width: 70px;">Votes</th>&nbsp;&nbsp;
               <th style="width: 700px;">Course</th>&nbsp;&nbsp;
               <th style="width: 200px;">Cost</th>&nbsp;&nbsp;
               <th style="width: 50px;">Type</th>&nbsp;&nbsp;
               <th style="width: 100px;">Level</th>&nbsp;&nbsp;
               <th style="width: 200px;">Add your vote</th>&nbsp;&nbsp;
           </tr>
       </thead>
       <tbody>
        <!-- PHP Code starts here -->
        <?php


        $sql = "SELECT course_name,link,dif_level,course_type,cost,vote from Courses where technology='$search_query' order by vote desc ";
        $tasks = mysqli_query($conn, $sql);
        if (!$tasks) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        $i = 1;
        while ($row = mysqli_fetch_array($tasks)) {?>
           <tr>
            <td> <?php echo $row['vote']; ?> </td>
            <td class="task"> <?php echo "<a href=" . $row['link'] . ">" . ucfirst($row['course_name']) . "</a>"; ?> </td>
            <td><?php echo ucfirst($row['cost']); ?></td>
            <td> <?php echo ucfirst($row['course_type']); ?> </td>
            <td> <?php echo ucfirst($row['dif_level']); ?> </td>
            <td><form method="get" action="check.php">
                <input type="text" name="gm" value="<?php echo $row['course_name']; ?>"hidden>
                <input type="submit" name="vote-button" value="+1"></form></td>
            </tr>
            <?php $i++;}
//PHP Code ends here
            ?>
        </tbody>
    </table>
</div>

<!-- Scripts -->
<script src="src/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="src/js/bootstrap.min.js"></script>
<!-- Scrolling Nav JavaScript -->
<script src="src/js/jquery.easing.min.js"></script>
<script src="src/js/scrolling-nav.js"></script>
</body>
</html>