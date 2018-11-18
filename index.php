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
                    <button class="btn btn-info navbar-btn" data-toggle="modal" data-target="#exampleModal">+ Add Tutorial</button>
                    <button class="btn btn-info navbar-btn">Login/Signup</button>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
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
<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 id="header">TutOverflow</h1>
                <h3 id="header">Find & Share the Best Online Programming Courses & Tutorials</h3><br>
                <form action="courses.php" method="GET" name="tech_form">
                    <input id="main-search" type="search" name="search_tech" placeholder="Search for the language you want to learn">
                    <input id="main-search" type="submit" class="btn btn-primary" value="Find Tutorials">
                </form>
                <br>
                
            </div>
        </div>
    </div>
</section>

<!-- Tutorials Section -->
<section id="tutorials" class="tutorials-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 id="header2">Our Popular Tutorials</h1> <br><br>
                <ul class="flex-container">
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=cpp'"><img class="topic-icon" src="img/logo-cpp.svg">C++</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=android'""><img class="topic-icon" src="img/logo-android.svg">Android</li>

                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=javascript'"><img class="topic-icon" src="img/logo-javascript.svg">Javascript</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=python'"><img class="topic-icon" src="img/logo-python.svg">Python</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=sql'"><img class="topic-icon" src="img/logo-sql.svg">SQL</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=php'"><img class="topic-icon" src="img/logo-php.svg">PHP</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=ruby'"><img class="topic-icon" src="img/logo-ruby.svg">Ruby</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=java'"><img class="topic-icon" src="img/logo-java.svg">JAVA</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=matlab'"><img class="topic-icon" src="img/logo-matlab.svg">MATLAB</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=data-structures-algorithms'"><img class="topic-icon" src="img/logo-data-structures-algorithms.svg">Data Strucures/Algorithms</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=reactjs'"><img class="topic-icon" src="img/logo-reactjs.svg">React</li>
                    
                    <li class="flex-item" onclick="window.location.href='courses.php?search_tech=angular'"><img class="topic-icon" src="img/logo-angular.svg">Angular</li>

                </ul>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="src/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="src/js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="src/js/jquery.easing.min.js"></script>
<script src="src/js/scrolling-nav.js"></script>

</body>

</html>