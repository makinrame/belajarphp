<?php 

$x = array("adi","budi","ria");

//var_dump($i);


//echo $i[0];

for($i=0; $i<3; $i++){
	echo $x[$i];
	echo "<br>" ;

}

$user = [
	[
		"adi", 22
	],
	[
		"budi", 33
	],
	[
		"ria", 28
	],
	[
		"nata", 23
	],
	[
		"vira", 24
	],
	[
		"joni", 12
	],
	[
		"kadek",33
	]
];

//var_dump($user);
$count = count($user);


for($i=0; $i<$count; $i++){
	echo "nama : ". $user[$i][0];
	echo "<br>";
	echo "umur : ".$user[$i][1];
	echo "<br>";

}
echo count($user);

$user = [
	[
		"name" => "adi", 
		"age" => 23
	],
	[
		"name" => "budi",
		"age" => 22
	],
	[
		"name" => "ria",
		"age" =>33
	],
	[
		"name" => "nata",
		"age" => 23
	],
	[
		"name" => "vira", 
		"age" => 24
	],
	[
		"name" => "joni",
		"age" => 12
	],
	[
		"name" => "kadek",
		"age" => 33
	]
];

for($i=0; $i<$count; $i++){
	echo "nama : ". $user[$i]["name"];
	echo "<br>";
	echo "umur : ".$user[$i]["age"];
	echo "<br>";

}