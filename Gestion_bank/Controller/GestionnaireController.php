
<?php 

require_once('../Modele/DB.php');
require_once('../Modele/GestionnaireDB.php');
require_once('../Modele/userDB.php');
$base_url = "http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index1.php";

if (isset($_POST['validerCl'] )) {
	extract($_POST);
	$iduser=getlastUser();
	$user=$iduser['0']+1;
	$Code="$Prenom"."$Nom"."$user";
	$ok=addUser($Code);
	$iduser=getlastUser();


//si la fonction n'a pas marche on se dirige vers le formulaire
	if ($ok!=1) 
	{

	header("location:$base_url?page=addClient&ok=$ok");

	}

	$ok=addClient($Code,$Nom,$Prenom,$Adresse,$Tel,$Email,$iduser['0']);
	//retour id du dernier client
	$id=getlastclient();
//si la fonction n'a pas marche on se dirige vers le formulaire en supprimant le code venant detre ajouter ci-dessus dans la table user

	if ($ok!=1) 
	{
	deleteUser($Code);

	header("location:$base_url?page=addClient&ok=$ok");
		
	}
	//enregistrement du numero de compte
	$cpt=getLastIdCompte();
	
	$j=1+$cpt['0'];
	$NumCpt="N000"."$Nom"."$j";

	$li=insertCompte($NumCpt,$id['0'],$idag);
	//$sup=supprimerEspace();
	header("location:$base_url?page=addClient&ok=$ok");

}
 if (isset($_POST['RechercherCli'] )) {
	extract($_POST);
 	$Client=getClientByCode($Code);
 	if ($Client==NULL) {
 		header("location:$base_url?page=addClientExis&ok=0");
 	}
 	else
 	{
 		$id=$Client['1'];
 		header("location:$base_url?page=edit&Cl=$id");
 	}
 }
 if (isset($_POST['validerClExis'])) {
	extract($_POST);


    $cpt=getLastIdCompte();
	
	$j=1+$cpt['0'];

	
 	
	$NumCpt="N000"."$Nom"."$j";
	$li=insertCompte($NumCpt,$id,$idag);
 	header("location:$base_url?page=addClientExis&ok=$li");


 }



if(isset($_GET['id'])){

	$ok=miseajourEtat($_GET['id']);
	$sup=deletenotification($_GET['id']);
	header("location:$base_url?pages=Validation&ok=$ok");

}


if(isset($_GET['ida'])){

	$ok=miseajourEtatActive($_GET['ida']);
	$sup=deletenotification($_GET['ida']);
	header("location:$base_url?pages=Activation&ok=$ok");
	
}
if (isset($_POST['ModifierClient'])) {

     extract($_POST);
	$ok=ModifierClient($idCl,$CodeCl,$NomCl,$PrenomCl,$AdresseCl,$TelCl,$EmailCl,$iduser);
	header("location:$base_url?page=listecli&ok=$ok");
        //var_dump($ok);
        
    }

 ?>