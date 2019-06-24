<?php
if(isset($_GET['ok']))
{
    if($_GET['ok'] == 1)
    {
        echo '<div class="alert alert-success" style="text-align: center;">
                                   Compte Desactiver Avec Succès!!!
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
                            <th class="column-title">Etat Compte</th>
                           
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
                                <td class=''>".$user['etat']."</td> 
                               

                              
                                <td class='last'> <a href='Controller/GestionnaireController.php?id=".$user['NumCpt']."' onClick='return confirmation();'><button class='btn btn-danger' type='button' >Désactiver</button></a></td>
                                

                               

                               

                              </tr>";
                           }
                           ?>
                         
                        </tbody>
                      </table>
                    </div>      
                  </div>
                </div>
              </div>


