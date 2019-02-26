<?php 
include_once 'includes/dbh.inc.php'; 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>

<form>
	<input type="text" name="username" placeholder="Username"> <br>

	<input type="password" name="password" placeholder="Password"><br>
	<input type="text" name="email" placeholder="email"><br> 

	<button type="submit" name="submit">Sign up</button>

</form>
<?php 

//insert podataka kroz html u bazu 
$sql = "INSERT INTO users (sifra, username, pasword, email) VALUES (1, 'Jure12321', 'asdjč23iheds', 'jure3@dwa.com');";
 mysqli_query($conn, $sql);



//testiranje jel podaci postoje
//$resultCheck = mysqli_num_rows($result);

//izbacivanje podataka u html 
//if ($resultCheck > 0) {
//	while ($row = mysqli_fetch_assoc($result)) {
	//	echo $row['username'] . "<br>";
//	}}



 ?>


</body>
</html>