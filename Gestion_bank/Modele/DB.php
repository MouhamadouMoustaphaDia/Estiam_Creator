<?php 

function getConnexion()
{
	$host = "localhost";
	$dbname = "Gestion_bank";
	$user = "root";
	$pass = "";
    
        try {
		$db = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
		return $db;
	} catch (Exception $e) {
		die("Erreur lors de la connexion à la BD");
	}
}

function executeSQL($sql)
{
	$db = getConnexion();

	return $db->exec($sql);
}

function execute_SQL_Fetch($sql)
{
	$db = getConnexion();
	
	return $db->query($sql)->fetch();
}

function execute_SQL_FetchAll($sql)
{
	$db = getConnexion();
	
	return $db->query($sql)->fetchAll();
}



  

 ?>