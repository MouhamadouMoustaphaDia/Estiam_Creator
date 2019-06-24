<?php 
session_start();

require_once('header.php');


//echo $_SESSION['Login'];
require_once('Modele/DB.php');
require_once('Modele/GestionnaireDB.php');
require_once("menu1.php");

if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
        	case 'addClient':

                     $list=listeAgence();
                     
        
                require_once('view/gestionnaire/addClient.php');
        	    break;

            case 'addClientExis':
                
                require_once('view/gestionnaire/ClientExist.php');
                break;
            case 'edit':
                $list=listeAgence();
                $Client=getClientByCode($_GET['Cl']);
                require_once('view/gestionnaire/addClientExis.php');

                break;

        	case 'listecli':
                $list=listerClient();
                require_once('view/gestionnaire/listerClient.php');
        	    break;

            case 'listcomtByCl':
                $list=listerClient();
                require_once('view/gestionnaire/ListeCompteByClient.php');
                
                break;

        	case'Validation':
                    $list=listerCompteDesactiver();
                    if($list!=NULL){
                    require_once('view/gestionnaire/listeDesactivation.php');
                    }
            	break;

                
                case'Activation':
                    $list=listerCompteActiver();
                    if($list!=NULL){
                    require_once('view/gestionnaire/listeactivation.php');
                    }
                    
                break;

           
            case 'voirCompte':

                echo $_GET['id'];
                $list=listerCompte($_GET['id']);
                require_once('view/gestionnaire/voirCompte.php');
                break;

            case 'modifierClient':
               // echo $_GET['id'];
                $list=listerClientById($_GET['idCl']);
                require_once('view/gestionnaire/modifierClient.php');
                break;
                
            default:
               // header('location:index1.php');
                break;



        }
    }
require_once('footer.php');
    
 ?>