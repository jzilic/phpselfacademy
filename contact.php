<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cookie and session</title>
</head>


<body>
	<ul>
		<li> <a href="cookie.php">Home</a></li>
		<li> <a href="contact.php">Contact</a></li>
	</ul>
<?php

 
  
echo $_SESSION['username'];
  ?>

</body>
</html>