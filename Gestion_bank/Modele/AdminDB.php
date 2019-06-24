<?php
require_once('DB.php');

function addPers($CodePers,$NomPers,$PrenomPers,$idPe,$iduser)
{
	$sql="INSERT INTO Peersonnel VALUES(NULL,'$CodePers','$NomPers','$PrenomPers','$idPe','$iduser')";
	//die($sql);
	return executeSQL($sql);
}
function addPro($NomPro)
{
	$sql="INSERT INTO profil VALUES(NULL,'$NomPro')";
	return executeSQL($sql);

}
function listerPro()
{
	$sql="SELECT * FROM Profil";
	return execute_SQL_FetchAll($sql);
}
function listerPers()
{
	$sql="SELECT * FROM Peersonnel";
	return execute_SQL_FetchAll($sql);
}


function listerPersByid($id)
{
	$sql="SELECT * FROM Peersonnel WHERE idPers=$id";
	return execute_SQL_Fetch($sql);
}
function modification($id,$CodePers,$NomPers,$PrenomPers,$idPe,$user){
$sql= "UPDATE Peersonnel SET `CodePers` = '$CodePers', `NomPers` = '$NomPers', `PrenomPers` = '$PrenomPers', `idPe` = $idPe, `iduser` = $user WHERE `idPers` = $id";
return executeSQL($sql);
}
function modificationProfil($nom,$id){
	$sql= "UPDATE profil SET `NomPe` = '$nom' WHERE `idPe`=$id";
	return executeSQL($sql);
}
function supprimerPersonnel($id){
	$sql="DELETE FROM Peersonnel WHERE idPers=$id";
	return executeSQL($sql);
}
function listerProfilByid($id)
{
	$sql="SELECT * FROM profil WHERE idPe=$id";
	return execute_SQL_Fetch($sql);
}

function supprimerProfil($id){
	$sql="DELETE FROM profil WHERE idPe=$id";
	return executeSQL($sql);
}

?>