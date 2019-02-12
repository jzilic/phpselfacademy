
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP soloAcademy</title>
  <link rel="stylesheet" href="css/styles.css">

</head>
<!-- postavljanje boje kroz GET--> 


<body bgcolor="<?php echo $_GET ["boja"]?>"> 

<!-- 1. definiranje HTML elementa kroz GET --> 

	<h1>Hello 
		<?php 
			//echo $_GET ["name"]; 
		?>
	</h1> 

<!-- 2. definiranje HTML elementa kroz GET -->  


<p>
	Big blue bird jumping over the <?php //echo $_GET ["thing"]?>.

</p> 



<?php
//tri broja  
$i= 2; 
$j= 3; 
$s= 4; 
$d= 1;
 $f=$i + $j; 
echo $f . "= $i + $j"; 



 ?>
<!-- listanje parametara u grafičku listu-->
 <ul>
 <li> <?php echo $i; ?></li>
<li> <?php echo $j;  ?></li>
<li> <?php echo $s;  ?></li>
<li> <?php echo $d;  ?></li>

 </ul>


</body>
</html>