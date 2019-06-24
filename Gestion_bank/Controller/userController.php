<?php
session_start();
require_once('../Modele/DB.php');
require_once('../Modele/userDB.php');
$base_url = "http://localhost/ESTIAM/estiam_creator/Gestion_Bank/";



if (isset($_POST['conexion'])) {
    extract($_POST);
    $user=getUser($login,$Motdepasse);
    if ($user) {
        $_SESSION['Login']= $user['login'];
        $_SESSION['Motdepasse']= $user['motpasse'];
        $_SESSION['id']= $user['iduser'];
        $profil=getPro($user['iduser']);
        //var_dump($profil['NomPe']);
        if($profil['NomPe']=='admin')
        {
            header("location:http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index0.php");
        }
        elseif ($profil['NomPe']=='gestionaire') 
        {
            header("location:http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index1.php");
        }
        elseif ($profil['NomPe']=='caissiere') 
        {
            header("location:http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index2.php");
        }
        else
        {
            
            if($_SESSION['Motdepasse']=="passer")
            {
                header("location:http://localhost/ESTIAM/estiam_creator/Gestion_Bank/view/user/modifiermdp.php");
            }else{


            header("location:http://localhost/ESTIAM/estiam_creator/Gestion_Bank/index3.php");
            }
        }
    }
    else
    {

        header("location:http://localhost/ESTIAM/estiam_creator/Gestion_Bank/?ok=$user");
    }
}











?>