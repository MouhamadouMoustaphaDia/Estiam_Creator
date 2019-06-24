
 

       <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">id Compte</th>
                            <th class="column-title">Num Compte</th>
                            <th class="column-title">Date Creation</th>

                            <th class="column-title">Solde Compte</th>
                            
                            <th class="column-title">idClien</th>
        

                      </th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            
                            <?php  
                            foreach ($list as $user)
                            {
   
                                echo "<tr class='even pointer'>
                                <td class=''>".$user['idCpt']."</td>
                                <td class=''>".$user['NumCpt']."</td>
                                <td class=''>".$user['DateCreationCpt']."</td> 
                                <td class=''>".$user['SoldeCpt']."</td> 
                               
                                <td class=''>".$user['idCl']."</td> 



                               

                               

                              </tr>";
                           }
                           ?>
                         
                        </tbody>
                      </table>
                    </div>      
                  </div>
                </div>
              </div>


