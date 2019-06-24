<?php 
session_start();
require_once('header.php');

require_once('Modele/DB.php');
require_once('Modele/AdminDB.php');
require_once('Modele/ClientDB.php');
require_once('Modele/GestionnaireDB.php');
require_once("menu3.php");

if(isset($_GET['pages']))
    {
        switch($_GET['pages'])
        {   case 'Recherche':
         
                require_once('view/Client/rechercheCompte.php');
                break;

            case 'ListeCompteByNum':
           
                $oks= getClientByLogin($_SESSION['Login']);
                $num=$_GET['compte'];
                $id=$oks['0'];
                $list=getCompteByLogin($num,$id);
                

                    require_once ('view/Client/ListeCompteByNum.php');
                break;
            case 'listeCompt':
                $ok=$_SESSION['Login'];
                $oks= getClientByLogin($ok);
     
                $list=listerCompteClients($oks['0']);
                
              require_once('view/Client/ListeDesComptes.php');
                break;

            case 'OpeCompt':
                $list=listerOpeCompte();
                
                require_once('view/Client/ListeOpeCompt.php');
                
                break;

        	case'DesacCompt':

                 $ok=$_SESSION['Login'];
                $oks= getClientByLogin($ok);
                
                $list=listerCompteClients($oks['0']);
               
              require_once('view/Client/activation.php');
            	break;

           
                
            default:
                header('location:index.php');
                break;


           
        }
    }else{
        require_once 'menu3.php';
    }



require_once('footer.php');

 ?>