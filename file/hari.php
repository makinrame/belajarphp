<?php

$hari = "senin";

function namaHari(){
	global $hari;
	return "sekaang hari $hari";

}

echo namaHari();