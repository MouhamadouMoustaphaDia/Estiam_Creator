
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">id</th>
                            <th class="column-title">code </th>
                            <th class="column-title">Nom </th>
                            <th class="column-title">Prenom </th>
                            <th class="column-title">Adresse</th>
                            <th class="column-title">Tel</th>
                            <th class="column-title">Email</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            
                            <?php  
                            foreach ($list as $user)
                            {
   
                                echo "<tr class='even pointer'>
                                <td class=''>".$user['idCl']."</td>
                                <td class=''>".$user['CodeCl']."</td>
                                <td class=''>".$user['NomCl']."</td>
                                <td class=''>".$user['PrenomCl']." </td>
                                <td class=''>".$user['AdresseCl']."</td>
                                <td class=''>".$user['TelCl']."</td>
                                <td class=''>".$user['EmailCl']."</td>
                               <td class='a-right a-right' ><a href='?page=modifierClient&idCl=".$user['idCl']."'>Editer</a></td>
                                
                              </tr>";
                           }
                           ?>
                         
                        </tbody>
                      </table>
                    </div>
                            
                        
                  </div>
                </div>
              </div>


