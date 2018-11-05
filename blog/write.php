<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="blog.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<form method="POST" action="admin.php" enctype="multipart/form-data">
		



		<div class="container-fluid form-group">
			<div>
				<br>
		<input type="text" name="title" placeholder="Title" class="box" /><br><br>	
			</div>



		<div>
			<textarea rows="50" cols="60" placeholder="Share your Experience here" name="content" id="content"></textarea>
			<br><br>
		</div>











			<div>
		<input type="text" name="author" placeholder="Author" class="box" /><br><br>
			</div>
			<div>
				<input type="hidden" name="size" value="1000000">
		<input type="file" name="image" placeholder="Add a suitable image" class="box" /><br><br>
			</div>
			<div>
		<button type="submit" class="publish" name="publish">Publish</button>
			</div>
		</div>
		</form>

</body>
</html>