<?php
session_start();
 if (!isset($_SESSION['username'])) {
    ?><script>alert('Please login to contribute.');
    window.location='index.php';</script>
    <?php
  }
$server = "localhost";
$username = "root";
$password = "";
$dbname = "survey";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("failed" . mysqli_error());
}
            if (isset($_GET['form-submit']))
            {
                $crstech=$_GET['ctech'];
                $query1="SELECT * from Languages where technology='$crstech';";
                $result=mysqli_query($conn,$query1);
                if (!$result) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }
                $rows=mysqli_num_rows($result);
                if($rows==0)
                {
                    $query2="INSERT into Languages values('$crstech',0);";
                    $result1=mysqli_query($conn,$query2);
                    if (!$result1) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                }
                $crsname=$_GET['cname'];
                $crslink=$_GET['clink'];
                $crscost=$_GET['ccost'];
                $crstype=$_GET['ctype'];
                $crslevel=$_GET['clevel'];
                $sql="SELECT * from Courses where link='$crslink';";
                $res=mysqli_query($conn,$sql);
                if (!$res) {
                    printf("Error: %s\n", mysqli_error($conn));
                    exit();
                }
                $num_rows=mysqli_num_rows($res);
                if($num_rows==0)
                {
                    $sql1="INSERT into Courses (technology,course_name,link,dif_level,course_type,cost) values('$crstech','$crsname','$crslink','$crslevel','$crstype','$crscost');";
                    $res1=mysqli_query($conn,$sql1);
                    if (!$res1) {
                        printf("Error: %s\n", mysqli_error($conn));
                        exit();
                    }
                    else
                    {
                        echo "<script>
                        alert('Thanks for contributing to Tutoverflow.');
                        window.location.href='index.php';
                        </script>";
                    }
                }
                else
                {
                    echo "<script>
                    alert('Sorry,this Tutorial already exists.');
                    window.location.href='index.php';
                    </script>";
                }
            }
            ?>