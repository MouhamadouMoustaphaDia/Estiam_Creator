
<?php 
session_start();
require_once('../Modele/DB.php');
require_once('../Modele/Cassiere.php');
require_once('../Modele/userDB.php');
$base_url = "http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index2.php";
$idpe=getIdPersonnel($_SESSION['id']);
if (isset($_POST['validercais'] )) {

	extract($_POST);
	
	if($operation=='Depot'){

  		
  		
		$ok=DepotArgent($numero,$montant);
		if($ok!=null){


		$idcpt=getCompteByNumero($numero);
		
		$idop=getLastIdOp();
		
		$cpt=1+$idop['0'];
		
		$op=insertOp($cpt,$montant,$idcpt['0'],1,$idpe['0']);
		
		//insertion Facture 
		$ele=getAllelement($numero);
		$fac=insertFacture($idcpt['0'],$ele['0']['0'],$cpt,$idpe['0'],$ele['0']['1']);
		
	}
		
		
		

	}
	
	if($operation=='Retrait'){
		$ok=RetraitArgent($numero,$montant);
		$idcpt=getCompteByNumero($numero);
		$idop=getLastIdOp();
		$cpt=1+$idop['0'];
		$op=insertOp($cpt,$montant,$idcpt['0'],2,$idpe['0']);
		$ele=getAllelement($numero);
		$fac=insertFacture($idcpt['0'],$ele['0']['0'],$cpt,$idpe['0'],$ele['0']['1']);
		
	}
	
	header("location:$base_url?page=Depot&ok=$ok");


} 
		
		
	



if (isset($_POST['virement'] )) {
	extract($_POST);
	if($operation=='Virement'){

     $ok=RetraitArgent($numero,$montant);
     if($ok==1){
		$idcpt=getCompteByNumero($numero);
		$idop=getLastIdOp();
		$cpt=1+$idop['0'];
		$op=insertOp($cpt,$montant,$idcpt['0'],3,$idpe['0']);
		$ele=getAllelement($numero);
		$fac=insertFacture($idcpt['0'],$ele['0']['0'],$cpt,$idpe['0'],$ele['0']['1']);
		
     }
	
		$ok=DepotArgent($num,$montant);
		if($ok!=null){


		$idcpt=getCompteByNumero($num);
		
		$idop=getLastIdOp();
		
		$cpt=1+$idop['0'];
		
		$op=insertOp($cpt,$montant,$idcpt['0'],1,$idpe['0']);
		
		//insertion Facture 
		$ele=getAllelement($num);
		$fac=insertFacture($idcpt['0'],$ele['0']['0'],$cpt,$idpe['0'],$ele['0']['1']);
		header("location:$base_url?page=Virement&ok=$ok");
}

} 
}
if (isset($_POST['RechercheCompte'] )) {
	extract($_POST);
	
		header("location:$base_url?page=facture&ok='$compte'");
	

} 
 ?>