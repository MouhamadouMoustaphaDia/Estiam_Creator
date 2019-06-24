


       <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Date Opéation</th>
                            <th class="column-title">Montant Transaction </th>
                            <th class="column-title">Type</th>
                      </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            
                            <?php  
                            foreach ($list as $user)
                            {
   
                                echo "<tr class='even pointer'>
                                <td class=''>".$user['DateOp']."</td>
                                <td class=''>".$user['MontantOp']."</td>
                                <td class=''>".$user['NomType']."</td> 
                              </tr>";
                           }
                           ?>
                         
                        </tbody>
                      </table>
                    </div>      
                  </div>
                </div>
              </div>


