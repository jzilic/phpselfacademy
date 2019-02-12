<?php 

//basic IF function 


$i = 101; 


if ($i < 100) {
	echo "first parameter is smaller than 100"; 
} elseif ($i > 100) {
	echo "parameter is higher than 100";
};




$z = 2; 


if ($z == 1) {
	echo "Male";
} else if ($z == 2) {
	echo "Female"; 
};

$b="<br />";




//switch function 

$height = $_GET ['visina'];

switch ($height) {
	case 150:
		echo "short";
		break;

	case 170; 
		echo "normal"; 
		break; 
	case 190; 
		echo "high";
		break; 
}


$b="<br />";
$name="IPA";
echo $name; 

///arrays 

$arrayStart = array('2' => 321, '21' => 123, '12', '11', '211' );

print_r($arrayStart); 



$mjeseci = array(1 =>  Siječanj, Veljača, Ožujak, Travanj, Svibanj, Lipanj ); 

$mjeseci[] = "Srpanj"; 


print_r($mjeseci);

echo $b;


///asocijativni niz 


$voce = [
    "id" => 1,
    "name" => "Kruške"
    

];


$povrce = [
     "id" => 2,
    "name" => "Krastavci"
];



echo $voce["name" ], $b ,$povrce ["name"];




?>

