<?php 

require_once('DB.php');

function addClient($CodeCl,$NomCl,$PrenomCl,$AdresseCl,$TelCl,$EmailCl,$iduser)
{

	$sql="INSERT INTO Client VALUES(NULL,'$CodeCl','$NomCl','$PrenomCl','$AdresseCl','$TelCl','$EmailCl',$iduser)";
	return executeSQL($sql);

}
function listerClient()
{
	$sql="SELECT * FROM Client";
	return execute_SQL_FetchAll($sql);
}
function listerCompte($idCl)
{
	$sql="SELECT NumCpt,DateCreationCpt,SoldeCpt,idCpt FROM compte WHERE idCl=$idCl";
	return execute_SQL_FetchAll($sql);
	
}
function listeAgence()
{
	$sql="SELECT * FROM  agence";
	return execute_SQL_FetchAll($sql);
	
}
function getlastclient()
{
	$sql="SELECT MAX(idCl) FROM Client  ";
	return execute_SQL_Fetch($sql);
}
function insertCompte($Num,$idCl,$idag)
{
	$sql="INSERT INTO compte VALUES(NULL,'$Num',CURRENT_DATE(),'10000','$idCl','0',$idag)";
	return executeSQL($sql);

}
function getClientByCode($Code)
{
	$sql="SELECT * FROM Client WHERE CodeCl='$Code'";
	return execute_SQL_Fetch($sql);

}
function ModifierClient($id,$CodeCl,$NomCl,$PrenomCl,$AdresseCl,$TelCl,$EmailCl,$iduser)
{
	$sql="UPDATE Client SET `CodeCl` = '$CodeCl', `NomCl` = '$NomCl', `PrenomCl` = '$PrenomCl', `AdresseCl` = '$AdresseCl', `TelCl` = '$TelCl', `EmailCl` = '$EmailCl', `iduser` = '$iduser' WHERE `idCl` = $id";
return executeSQL($sql);
}
function listerCompteActiver(){
	$sql="SELECT * FROM notification WHERE etat='1' ";
	return execute_SQL_FetchAll($sql);
}
function  listerCompteDesactiver(){
	$sql="SELECT * FROM notification  WHERE etat='0'  ";
	return execute_SQL_FetchAll($sql);

}
function listerClientById($id){
	$sql="SELECT * FROM Client Where idCl=$id";
	return execute_SQL_FetchAll($sql);
}


function miseajourEtatActive($num){
		$sql="UPDATE compte SET etat='0' WHERE Numcpt='$num'";	
	return executeSQL($sql);
}
function miseajourEtat($num){
		$sql="UPDATE compte SET etat='1' WHERE Numcpt='$num'";	
	return executeSQL($sql);
}
function messageDes(){
		$sql="SELECT Count(idnot) From notification WHERE etat='0'";	
	return execute_SQL_Fetch($sql);
}
function messageAct(){
		$sql="SELECT Count(idnot) From notification WHERE etat='1'";	
	return execute_SQL_Fetch($sql);
}

function getLastIdCompte(){
	$sql="SELECT MAX(idCpt) FROM compte";
	return execute_SQL_Fetch($sql);
}
function deletenotification($num){
	$sql="DELETE  FROM notification WHERE NumCpt='$num'";
	return executeSQL($sql);
}
function supprimerEspace(){
	$sql="UPDATE  compte SET NumCpt=replace(NumCpt,' ','') ";
	return executeSQL($sql);
	
	}
 ?>
