<?php 

//variabel

$nama = "nata";

echo $nama;

//loop

$teman =  array('nata', 'gon', ' vira', 'budi' );

$count = count($teman);
for ($i = 0; $i < $count; $i++){
	echo $teman[$i];
}
echo "<br/>";
//looping assoc array

$teman = [
			[
				"nata", 23 ],
			[
				"gon", 33 ],
			[
				"vira", 23],
			[
				"ninja", "N/A" ]
		];

$count = count($teman);


for($i=0; $i<$count; $i++){
	echo " nama ".$teman[$i][0]." ";
	echo " umur ".$teman[$i][1]." ";
	echo "<br/>";
}


$user = [

	[
		"nama" => "nata",
		"umur" => 23
	],

	[
		"nama" => "vira",
		"umur" => 22
	],


	[
		"nama" => "gon",
		"umur" => 33
	],

];

$count = count($user);
for ($i=0; $i<$count; $i++){
	echo "nama". $user[$i]["nama"];
	echo "umur". $user[$i]["umur"];
	echo"<br/>";
}









