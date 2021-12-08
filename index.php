<?php

$maintenance == 0;
//GESTION PAGES
$p=$_GET['p'];
if(empty($_GET['p'])){
	$p = "home";
}

if($maintenance == 0){
	if($p == "home"){
		include("pages/accueil.php");
	} else if($p == "exo1"){
		include("pages/exercice1.php");
	} else if($p == "exo2"){
		include("pages/exercice2.php");
	} else {
		include("pages/404.php");
	}
} else {
	include("pages/maintenance.php");
}


?>