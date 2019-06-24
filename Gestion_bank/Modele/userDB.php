<?php 
require_once('../Modele/DB.php');
require_once('../Modele/userDB.php');

function getUser($login,$motpasse)
{
	$sql="SELECT * FROM users WHERE login='$login' AND motpasse='$motpasse'";

	return execute_SQL_Fetch($sql);
}
function getlastUser()
{
	$sql="SELECT MAX(iduser) FROM users  ";
	return execute_SQL_Fetch($sql);
}
function getPro($iduser)
{
	$sql="SELECT NomPe FROM profil PRO,peersonnel PER,users US WHERE PRO.idPe=PER.idPe AND PER.iduser=US.iduser AND US.iduser=$iduser";
	return execute_SQL_Fetch($sql);
}

function addUser($login)
{
	$sql="INSERT INTO users VALUES(NULL,'$login','passer')";
	return executeSQL($sql);

}
function deleteUser($code)
{
	$sql="DELETE FROM users WHERE login ='$code' ";
	return executeSQL($sql);
}

function modifierMdp($mdp,$idcl){
	$sql="UPDATE users SET motpasse='$mdp' WHERE iduser=$idcl ";	
	return executeSQL($sql);
}

function getClientByLogin($log){
	$sql="SELECT iduser FROM  users  WHERE login='$log'";
	return execute_SQL_Fetch($sql);
}
 ?>