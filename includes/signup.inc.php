<?php 
include_once 'includes/dbh.inc.php'; 


$username = $_POST['username'];
$password = $_POST['pasword'];
$email = $_POST['email'];


//insert podataka kroz html u bazu 
$sql = "INSERT INTO users (username, pasword, email) VALUES ( '$username', '$password', '$email');";
 mysqli_query($conn, $sql);
header("Location: ../login.php?signup=success");


//testiranje jel podaci postoje
//$resultCheck = mysqli_num_rows($result);

//izbacivanje podataka u html 
//if ($resultCheck > 0) {
//	while ($row = mysqli_fetch_assoc($result)) {
	//	echo $row['username'] . "<br>";
//	}}



 ?>