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
$sql = "SELECT course_name,link,dif_level,course_type,cost,vote from Courses where technology='$search_query' order by vote desc ";
        $tasks = mysqli_query($conn, $sql);
        if (!$tasks) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
if(mysqli_num_rows($tasks)==0)
{
    echo "<script>alert('\t\t\t\t\t\t\tSorry, no results found!\t\t\t\t\t\t\t\\n\\nWe are a community-driven website. Please feel free to submit the courses/tutorials that you would want to recommend to the programming community.\t\t\t\t\t');
                    window.location.href='index.php';
                    </script>";
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
                <a class="navbar-brand page-scroll" href="index.php">TutOverflow</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden" style="color: aqua;">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#trend">Trend Analysis</a>
                    </li>
                    <button class="btn btn-info navbar-btn" data-toggle="modal" data-target="#exampleModal">+ Add Tutorial</button>
                    <button class="btn btn-info navbar-btn">Login/Signup</button>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <!-- MODAL BEGINS HERE -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Add Tutorial</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form name="add-form" method="GET" action="insert.php">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Technology</label>
                    <?php
                    $q1="SELECT * from Languages;";
                    $check=mysqli_query($conn,$q1);
                    if (!$check) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    ?>
                    <div class="col-sm-10">
                        <select name="ctech">
                            <?php
                            while ($row = mysqli_fetch_array($check))
                            {?>
                                <?php echo $row['technology']; ?>
                                <option value="<?php echo $row['technology']; ?>"><?php echo ucfirst($row['technology']); ?></option>
                                
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Course Name</label>
                <div class="col-sm-10">
                    <input id="main-search" type="text" name="cname" placeholder="Course Name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Link</label>
                <div class="col-sm-10">
                    <input id="main-search" type="text" name="clink" placeholder="Course Link">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Cost</label>
                <div class="col-sm-10">
                    <input type="radio" name="ccost" value="free">Free&nbsp;&nbsp;
                    <input type="radio" name="ccost" value="paid">Paid
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <input type="radio" name="ctype" value="video">Video Tutorial&nbsp;&nbsp;
                    <input type="radio" name="ctype" value="book">E-Book/Book&nbsp;&nbsp;
                    <input type="radio" name="ctype" value="online-course">Online Course
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Difficulty Level</label>
                <div class="col-sm-10">
                    <input type="radio" name="clevel" value="beginner">Beginner&nbsp;&nbsp;
                    <input type="radio" name="clevel" value="medium">Medium&nbsp;&nbsp;
                    <input type="radio" name="clevel" value="expert">Expert
                    
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Submit Tutorial" name="form-submit">
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div>
<!-- MODAL ENDS HERE -->
    <!-- FIRST DIV - COURSE INFO -->
    <div class="container-fluid">
        <div id="tech-image">
            <?php
            $img_src="img/logo-".$search_query.".svg";
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
    <!-- SECOND DIV -->
    <div class="courses-list">
        <table class="table table-hover">
            <thead>
              <tr>
               <th scope="col">Votes</th>&nbsp;&nbsp;
               <th scope="col">Course</th>&nbsp;&nbsp;
               <th scope="col">Cost</th>&nbsp;&nbsp;
               <th scope="col">Type</th>&nbsp;&nbsp;
               <th scope="col">Level</th>&nbsp;&nbsp;
               <th scope="col">Add your vote</th>&nbsp;&nbsp;
           </tr>
       </thead>
       <tbody>
        <!-- PHP Code starts here -->
        <?php


        
        $i = 1;
        while ($row = mysqli_fetch_array($tasks)) 
            {?>
               <tr>
                
                <td> <?php echo $row['vote']; ?> </td>
                <td class="task"> <?php echo "<a href=" . $row['link'] . ">" . ucfirst($row['course_name']) . "</a>"; ?> </td>
                <td><?php echo ucfirst($row['cost']); ?></td>
                <td> <?php echo ucfirst($row['course_type']); ?> </td>
                <td> <?php echo ucfirst($row['dif_level']); ?> </td>
                <td><form method="get" action="check.php">
                    <input type="text" name="gm" value="<?php echo $row['course_name']; ?>"hidden>
                    <input id="plus-one-button" type="submit" name="vote-button" value="+1"></form></td>
                </tr>
                <?php $i++;
            }
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