<?php 
session_start();

require_once('header.php');


echo $_SESSION['Login'];
require_once('Modele/DB.php');
require_once('Modele/AdminDB.php');
require_once('menu0.php');

if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
        	case 'Personnel':

                    
                $list=listerPro();
                
                require_once('view/admin/addPresonnel.php');
        	    break;

        	case 'listePer':
                $list=listerPers();
               // var_dump($list);
                require_once('view/admin/listePers.php');
        	    break;

            case 'Profil':

                require_once('view/admin/addProfil.php');
                
                break;

        	case'listerPro':

                $list=listerPro();
                require_once'view/admin/listePro.php';
            	break;

            case 'modifierPersonnelle':
         
                  $activite=$_GET['idPerso'];
                  $list=listerPersByid($activite);
                  $liste=listerPro();
                  require_once'view/admin/modifierPersonnel.php';
              
                break; 
        	
            case 'modifierProfil':

                 $activite=$_GET['idPe'];
                 $list=listerProfilByid($activite);
     
          
                 require_once'view/admin/modifierProfil.php';
              
                break; 
            default:
                header('location:index0.php');
                break;



        }
    }

require_once('footer.php');


 ?>