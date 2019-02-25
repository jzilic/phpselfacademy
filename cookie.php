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

//setcookie("name", "Jure", time() + 86400); 
  
  $_SESSION['username'] = "jure2342"; 
  
echo $_SESSION['username'];

if (isset($_SESSION['username'])) {
	echo "You are logged in!";
}else{ 
	echo "you are not logged in";

}
  ?>


</body>
</html>