<?php

$angka = 9;



function cekGanjilGenap($angka){

	$modulus = $angka % 2;

	if($modulus == 1){
		return "ganjil";
	}
	else{
		return "genap";
	}
}

echo cekGanjilGenap(3044);