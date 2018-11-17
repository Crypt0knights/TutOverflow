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
                    <a href="add.php"><button class="btn btn-info navbar-btn">+ Add Tutorial</button></a>
                    <button class="btn btn-info navbar-btn">Login/Signup</button>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 id="header">TutOverflow</h1>
                    <h3 id="header">Find & Share the Best Online Programming Courses & Tutorials</h3><br>
                    <form action="courses.php" method="GET" name="tech_form">
                        <input type="search" name="search_tech" placeholder="Search for the language you want to learn">
                        <input type="submit" class="btn btn-primary" value="Find Tutorials">
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
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=c'"><img class="topic-icon" src="img/cplspls.svg">C/C++</li>
                                                                                                            
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=android'""><img class="topic-icon" src="img/andro.svg">Android</li>

                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=javascript'"><img class="topic-icon" src="img/js.png">Javascript</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=python'"><img class="topic-icon" src="img/python.png">Python</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=sql'"><img class="topic-icon" src="img/sql.png">SQL</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=php'"><img class="topic-icon" src="img/php.png">PHP</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=ruby'"><img class="topic-icon" src="img/ruby.png">Ruby</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=java'"><img class="topic-icon" src="img/java.svg">JAVA</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=matlab'"><img class="topic-icon" src="img/matlab.png">MATLAB</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=data structures and algorithms'"><img class="topic-icon" src="img/ds.svg">Data Strucures/Algorithms</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=reactjs'"><img class="topic-icon" src="img/react.png">React</li>
                        
                        <li class="flex-item" onclick="window.location.href='courses.php?search_tech=angularjs'"><img class="topic-icon" src="img/angular.svg">Angular</li>

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