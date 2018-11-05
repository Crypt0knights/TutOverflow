<?php
if(isset($_POST['publish'])){
$title=$_POST['title'];
$content=htmlspecialchars($_POST['content']);
$author=$_POST['author'];
$t=time();
$date_pub=date("Y-m-d",$t);

#Image fetching and verification
$file=$_FILES['image'];
$fileName=$_FILES['image']['name'];
$fileTmp=$_FILES['image']['tmp_name'];
$fileSize=$_FILES['image']['size'];
$fileError=$_FILES['image']['error'];
$fileType=$_FILES['image']['type'];
$fileExt=explode('.',$fileName);
$fileActExt=strtolower(end($fileExt));
$allowed=array('jpeg','jpg','png');
if(in_array($fileActExt,$allowed)){
	if($fileError===0){
		if($fileSize<100000){
			$fileNewName=uniqid('',true).'.'.$fileActExt;
			$fileDest='uploads/'.$fileNewName;
			move_uploaded_file($fileTmp, $fileDest);
			echo "Cheers";
		}
		else{
			echo "File size is too big";
			exit();
		}
	}
	else{
		echo"Error occoured while uploading file";
	    exit();
	}
}
else{
	echo"File extension not allowed";
	exit();
}




#connections
$c=mysqli_connect('localhost','root','','blogs');
if($c){
	$q="INSERT INTO `blog` (`date_pub`, `title`, `content`,`author`,`image`) VALUES ('$date_pub', '$title', '$content','$author','$fileNewName')";
	$r=mysqli_query($c,$q);
	if($r){
       echo "Your blog will be published soon!!";
	}
	else{
		"Internal Server error!!";
	}
}
else{
	die("Connection Error:".mysqli_connect_error());
}
}
else{
echo "Error 404 found!!";
}

?>