<?php 

require_once('../Modele/DB.php');
require_once('../Modele/AdminDB.php');
require_once('../Modele/userDB.php');
$base_url = "http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index0.php";

if (isset($_POST['validerPer'])) {
	extract($_POST);
	$ok=addUser($Code);
	
	if($ok!=NULL){
		$iduser=getlastUser();
		
		$ok=addPers("$Code","$Nom","$Prenom",$idProfil,$iduser['0']);
	}
	
	header("location:$base_url?page=Personnel&ok=$ok");


}
if (isset($_POST['validerPro'])) {
	extract($_POST);
	$ok=addPro("$Nom");
	header("location:$base_url?page=Profil&ok=$ok");
}

if (isset($_POST['Modifier'])) {
	extract($_POST);

	$ok=modification($Id,$Code,$Nom,$Prenom,$idProfil,$User);
	
	header("location:$base_url?page=listePer&ok=$ok");


}
if (isset($_GET['idPerso'])) {
	
	
	$ok=supprimerPersonnel($_GET['idPerso']);
	//var_dump($ok);
	header("location:$base_url?page=listePer&ok=$ok");


}
if (isset($_POST['ModifierProfil'])) {
	extract($_POST);
	$ok=modificationProfil($Nom,$Id);
	header("location:$base_url?page=listerPro&ok=$ok");


}
if (isset($_GET['idP'])) {
	
	
	$ok=supprimerProfil($_GET['idP']);
	header("location:$base_url?page=listerPro&ok=$ok");


}





 ?>