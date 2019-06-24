<?php 
session_start();
require_once('header.php');

require_once('Modele/DB.php');
require_once('Modele/Cassiere.php');
require_once("menu2.php");

if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
        	case 'Depot':
              // $list=listerType();
                require_once('view/Caissiere/depot.php');
        	    break;

            case 'Virement':

                require_once('view/Caissiere/virement.php');
                
                break;

        	case'listerCompte':
                $list=listeCompte();
               // var_dump($list);
                require_once('view/Caissiere/listecompte.php');

            	break;

            case'voiroperation':

                $list=getOpeByCompte($_GET['id']);
                require_once('view/Caissiere/voiroperation.php');

                break;
                
            case'listefact':

                $list=listeFacture();
                //var_dump($list);
                require_once('view/Caissiere/listFacture.php');

                break;

            case'recherFac':

                require_once('view/Caissiere/rechercheFactureByCompte.php');

                break;
                
             case'facture':

                $list=getfacturebyId($_GET['ok']);
                 require_once('view/Caissiere/listFacture.php');

                break;
        	
                
            default:
                //header('location:index2.php');
                break;



        }
    }
require_once('footer.php');

 ?>