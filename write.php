<?php
session_start();
 if (!isset($_SESSION['username'])) {
  	?><script>alert('Please login to write blogs.');
  	window.location='display.php';</script>
  	<?php
  }
  else
  {
  	header('location: write.html');
  }
?>
