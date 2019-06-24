<?php 

require_once('../Modele/DB.php');
require_once('../Modele/AdminDB.php');
require_once('../Modele/ClientDB.php');
require_once('../Modele/GestionnaireDB.php');

$base_url = "http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index3.php";

if (isset($_POST['RechercheCompte'])) {

        extract($_POST);
			/*$list = rechercheCompte('$compte');  
			var_dump($list);
			echo "$list['2']";*/


      	
        header("location:$base_url?pages=ListeCompteByNum&compte=$compte");
    }


if(isset($_GET['id'])){

	$ok=insertNotification($_GET['id']);
	header("location:$base_url?pages=DesacCompt&ok=$ok");
	
}


if(isset($_GET['act'])){

	
	$ok=insertNotificationa($_GET['act']);
	header("location:$base_url?pages=DesacCompt&oki=$ok");

	
}


 ?>