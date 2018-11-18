<!DOCTYPE html> 
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Dosis|Kreon|Raleway" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="src/css/add.css">
    <title>TutOverflow-Add Tutorials</title>
    <!--<link href="src/css/bootstrap.min.css" rel="stylesheet">
        <link href="src/css/scrolling-nav.css" rel="stylesheet">-->
    </head>
    <body >

        <div id="course-form">
            <form name="add-form" method="GET" action="insert.php">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Technology</label>
                    <div class="col-sm-10">
                        <select name="ctech">
                            <option value="c">C</option>
                            <option value="c++">C++</option>
                            <option value="python">Python</option>
                            <option value="java">JAVA</option>
                            <option value="ruby">Ruby</option>
                            <option value="go">Golang</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">Course Name</label>
                <div class="col-sm-10">
                <input type="text" name="cname" placeholder="Course Name">
            </div>
        </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Link</label>
                <div class="col-sm-10">
                <input type="text" name="clink" placeholder="Course Link">
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
    </body>
    </html>
