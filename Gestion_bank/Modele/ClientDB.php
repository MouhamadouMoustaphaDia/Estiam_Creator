<?php
require_once('DB.php');

function rechercheCompte($num)
{
	$sql="SELECT * FROM compte WHERE NumCpt='$num'";
	//die($sql);
	return execute_SQL_FetchAll($sql);

}
function listerCompteC()
{
	$sql="SELECT * FROM compte";
	return execute_SQL_FetchAll($sql);

}
function listerOpeCompte()
{
	$sql="SELECT DateOp,MontantOp,NomType FROM operation o,compte c,typeoperationnel t WHERE o.idCpt=c.idCpt AND t.idType=o.IdType";
	return execute_SQL_FetchAll($sql);

}
function listerCompteClient($idcl){
	$sql="SELECT * FROM client c,compte cpt Where c.idCl=cpt.idCl AND c.idCl=$idcl";
	return execute_SQL_FetchAll($sql);

}

function listerCompteClients($id)
{
	$sql="SELECT * FROM compte c, client cl WHERE c.idCl=cl.idCl AND cl.idCl=$id";
	return execute_SQL_FetchAll($sql);

}
function getClientByLogin($log){
	$sql="SELECT idCl FROM client c, users u WHERE c.iduser=u.iduser AND u.login='$log'";
	return execute_SQL_Fetch($sql);
}

function insertNotification($num)
{
	$sql="INSERT INTO notification VALUES(NULL,'0','$num')";
	return executeSQL($sql);

}
function insertNotificationa($num)
{
	$sql="INSERT INTO notification VALUES(NULL,'1','$num')";
	return executeSQL($sql);

}

function getCompteByLogin($numcpt,$idcl){
	$sql="SELECT c.NumCpt,c.DateCreationCpt,c.SoldeCpt FROM compte c,client cl WHERE c.idCl=cl.idCl AND cl.idCl=$idcl AND c.NumCpt='$numcpt'";
			return execute_SQL_FetchAll($sql);
}
?>