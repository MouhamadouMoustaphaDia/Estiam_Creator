<?php  
session_start();
require_once('../Modele/DB.php');
require_once('../Modele/userDB.php');
$base_url = "http://localhost/ESTIAM/estiam_creator/Gestion_Bank/";
if (isset($_POST['modifier'])) {

        extract($_POST);
        if($cmdp!=$nmdp || $amdp!=$_SESSION['Motdepasse']){
        	header("location:http://localhost/ESTIAM/estiam_creator/Gestion_Bank/view/user/modifiermdp.php?ok=0");
        }else{
        $idut=getClientByLogin($_SESSION['Login']);
        echo $idut['0'];
			modifierMdp($nmdp,$idut['0']);
			$_SESSION['Motdepasse']="$nmdp";
      
            header("location:http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index3.php");
            }
    }
 ?>