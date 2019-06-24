<?php
if(isset($_GET['oki']))
{
    if($_GET['oki'] == 1)
    {
        echo '<div class="alert alert-success" style="text-align: center;">
                                   Activation En Cours... 
                          </div>';
    }else{
        echo '<div class="alert alert-danger">
                                   Erreur Serveur, Contactez l\'administrateur
                          </div>';
    }
}
if(isset($_GET['ok']))
{
    if($_GET['ok'] == 1)
    {
        echo '<div class="alert alert-success" style="text-align: center;">
                                   Desactivation En Cours...
                          </div>';
    }else{
        echo '<div class="alert alert-danger">
                                   Erreur Serveur, Contactez l\'administrateur
                          </div>';
    }
}
?>
       <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                        
                            <th class="column-title">Num Compte</th>
                            <th class="column-title">Date Creation</th>
                            <th class="column-title">Solde Compte</th>
                           
                            <th class="column-title">idClient</th>
                            <th class="column-title">Action</th>
                            <th class="column-title">Action</th>

        

                      </th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            
                            <?php  
                            foreach ($list as $user)
                            {
   
                                echo "<tr class='even pointer'>
                               
                                <td class=''>".$user['NumCpt']."</td>
                                <td class=''>".$user['DateCreationCpt']."</td> 
                                <td class=''>".$user['SoldeCpt']."</td> 
                                
                                <td class=''>".$user['idCl']."</td> ";


                                if($user['etat']==0){
                                   
                                   echo "<td  > <a href='Controller/ClientController.php?act=".$user['NumCpt']."'><button class='btn btn-success' type='button' disabled> Activer</button></a> </td>";
                                   echo "<td> <a href='Controller/ClientController.php?id=".$user['NumCpt']."' onClick='return confirmation();'><button class='btn btn-danger' type='button' > Desactiver</button> </a></td>";
                                  } else{
                                     echo "<td> <a href='Controller/ClientController.php?act=".$user['NumCpt']."'><button  class='btn btn-success' type='button' > Activer</button></a> </td>";
                                   echo "<td> <a href='Controller/ClientController.php?id=".$user['NumCpt']."' onClick='return confirmation();'><button class='btn btn-danger' type='button' disabled> Desactiver</button></a> </td>";
                                  }
                                /* echo " <td  class='a-right a-right' ><a href='Controller/ClientController.php?act=".$user['NumCpt']."'>Activer</a></td>";
                                


                                 echo " <td disabled='disabled' class='last'><a href='Controller/ClientController.php?id=".$user['NumCpt']."' onClick='return confirmation();'>Désactiver</a></td>";
                                }

                               */

                               

                             echo " </tr>";
                           }
                           ?>
                         
                        </tbody>
                      </table>
                    </div>      
                  </div>
                </div>
              </div>


