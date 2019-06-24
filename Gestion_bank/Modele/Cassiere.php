<?php
require_once('DB.php');

function getIdPersonnel($id){

	$sql="SELECT idPers From peersonnel WHERE iduser=$id";
	return execute_SQL_Fetch($sql);
}
function getClient($id){

	$sql="SELECT * From client c WHERE c.idCl=$id";
	return execute_SQL_FetchAll($sql);
}
function getLastIdOp(){

	$sql="SELECT Max(idOp)From operation";
	return execute_SQL_Fetch($sql);
}

function getCompte($numcpt){

	$sql="SELECT Numcpt,SoldeCpt From compte c,client cl WHERE c.idCl=cl.idCl AND Numcpt='$numcpt'";
	return execute_SQL_FetchAll($sql);
}
function getCompteByNumero($numcpt){
	$sql="SELECT idCpt From compte c Where c.Numcpt='$numcpt'";
		return execute_SQL_Fetch($sql);
}
function RetraitArgent($numcpt,$montant){
	$sql="UPDATE compte SET SoldeCpt=SoldeCpt- $montant WHERE Numcpt='$numcpt' AND SoldeCpt- $montant>=10000 AND etat='0'";	
	return executeSQL($sql);
}

function DepotArgent($numcpt,$montant){
	$sql="UPDATE compte SET SoldeCpt=SoldeCpt+ $montant WHERE Numcpt='$numcpt' AND $montant>=1000";	
	return executeSQL($sql);
}

function insertTypeOp($nomtype){
	$sql="INSERT INTO typeoperationnel VALUES(NULL,'Depot')";
	return executeSQL($sql);

}

function insertOp($numop,$mntop,$idcpt,$idtype,$idpers){
	$sql="INSERT INTO operation VALUES(NULL,$numop,CURRENT_DATE(),$mntop,$idcpt,$idtype,$idpers)";
	return executeSQL($sql);

}

function listerType()
{
	$sql="SELECT * FROM typeoperationnel";
	return execute_SQL_FetchAll($sql);
}
function getIdOp($id){
	$sql="SELECT idType FROM typeoperationnel Where idType=$id" ;
	return execute_SQL_Fetch($sql);
}

function getOpeByCompte($idcpt){
	$sql="SELECT DateOp,MontantOp,idCpt,NomType,NomPers,PrenomPers FROM operation o,typeoperationnel t,peersonnel p Where idCpt=$idcpt AND o.idType=t.idType AND p.idPers=o.idPers "  ;
	return execute_SQL_FetchAll($sql);

}

function listeCompte(){
	$sql="SELECT DateCreationCpt,SoldeCpt,idCpt,NumCpt,NomCl,PrenomCl FROM compte c,client cl WHERE c.idCl=cl.idCl "  ;
	return execute_SQL_FetchAll($sql);
}

function insertFacture($idCpt,$idCl,$idOp,$idPers,$idag)
{
	$sql="INSERT INTO facture VALUES(NULL,$idCpt,$idCl,$idOp,$idPers,$idag,CURRENT_DATE())";
	return executeSQL($sql);

}

function getAllelement($numero){
	$sql="SELECT idCl,idAg FROM compte Where NumCpt='$numero' "  ;
	return execute_SQL_FetchALL($sql);

}

function listeFacture(){
	$sql="SELECT t.idType,t.NomType,c.NumCpt,cl.NomCl,cl.PrenomCl,cl.AdresseCl,cl.TelCl,f.idFac,o.MontantOp,f.dateFac,p.NomPers,p.PrenomPers,f.idFac , c.idCpt,cl.idCl,o.idOp,p.idPers,a.idAg,f.dateFac FROM facture f, compte c,operation o,peersonnel p,client cl, agence a,typeoperationnel t WHERE f.idCpt=c.idCpt AND f.idCl=cl.idCl AND f.idOp=o.idOp AND f.idPers=p.idPers AND f.idAg=a.idAg  AND t.idType=o.idType"  ;
	return execute_SQL_FetchALL($sql);

}

function getfacturebyId($numero){
	$sql="SELECT t.idType,t.NomType,c.NumCpt,cl.NomCl,cl.PrenomCl,cl.AdresseCl,cl.TelCl,f.idFac,o.MontantOp,f.dateFac,p.NomPers,p.PrenomPers,f.idFac ,c.NumCpt, c.idCpt,cl.idCl,o.idOp,p.idPers,a.idAg,f.dateFac FROM facture f, compte c,operation o,peersonnel p,client cl, agence a,typeoperationnel t WHERE f.idCpt=c.idCpt AND f.idCl=cl.idCl AND f.idOp=o.idOp AND f.idPers=p.idPers AND f.idAg=a.idAg  AND t.idType=o.idType AND c.NumCpt=$numero"  ;
	return execute_SQL_FetchALL($sql);

}
?>