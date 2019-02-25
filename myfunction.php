<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Creating my own function</title>
</head>
<body>


	<form>
<input type="text" name="text1" placeholder="Enter Your word here"> 
<br>
<button name="submit" value="submit" type="submit">Count</button>

</form>

<?php



//function newCalc($x) {
//	$newnr = $x * 0.75; 
//	echo "here is 75% of number that you wrote:" . $newnr;
//	}
//		$x=100; 
//		newCalc($x);
//			echo "<br>";
//		$a=150; 
//		newCalc($a);}

$s=$_GET["submit"]; 

function brojslova($s) {
$wrd = strlen($_GET["text1"]); 

echo "Broj slova ove riječi je:" . $wrd; 


}

brojslova($s);
  ?>





</body>
</html>