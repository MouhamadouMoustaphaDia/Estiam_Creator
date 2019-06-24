
<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class="column-title"></th>
                            <th class="column-title"> </th>
                            <th class="column-title"> Liste Facture</th>
                            <th class="column-title"> </th>
                            <th class="column-title"> </th>
                            <th class="column-title"> </th>
                            <th class="column-title no-link last"><span class="nobr"></span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         <script>
                              function printContent(el)
                              {
                                var restorepage = document.body.innerHTML;
                                var printcontent = document.getElementById(el).innerHTML;
                                 document.body.innerHTML = printcontent;
                                 window.print();
                                 document.body.innerHTML = restorepage;
                                  
                                 
                              }                        
                        </script>

                          <?php  
                            foreach ($list as $user)
                            {
   
                                echo "";
  echo "<div id='div1'>";

                            echo  "<center>--------------------------------------------------------------------"."</br></center>";
                            echo  "<center>LisMetik-Bank "."</center>";
                            echo  "<center> EMAIL     :limsmetik8@GMAIL.COM "."</center>";
                            echo  "<center> TELEPHONE : 771922061,776829723,771768180  "."</center>";                                                                                 
                            echo  "<center>--------------------------------------------------------------------"."</br></center>";
                            echo  "NUMERO COMPTE  : ".$user['NumCpt']."</br>"."</br>";
                            echo  "PRENOM         : ".$user['PrenomCl']."</br>"."</br>";
                            echo  "NOM            : ".$user['NomCl']."</br>"."</br>";
                            echo  "MONTANT        : ".$user['MontantOp']."</br>"."</br>";
                            echo  "ADRESSE        : ".$user['AdresseCl']."</br>"."</br>";
                            echo  "TEL            : ".$user['TelCl']."</br>"."</br>";
                            if ($user['idType']==1) {
                            echo  "TYPE           : 'Depot'</br>"."</br>"; 
                            }
                            elseif ($user['idType']==2) {
                            echo  "TYPE           : 'Retrait'</br>"."</br>"; 
                            }else{
                            echo  "TYPE           : 'Virement'</br>"."</br>"; 
                            }
                            echo  "DATE           : ".$user['dateFac']."</br>"."</br>"; 
                            echo  "GERANT         : ".$user['NomPers']."</br>"."</br>";                                                    
                            echo  "IDENTIFIANT    : ".$user['idFac']."</br>";                                                   
                            echo  "SGNATURE CLIENT  "." "." "."|||"." "."SIGNATURE CAISIERE  ";
                            
                            echo "</div>";
                            echo " </br>" ;
                            echo " </br>" ;
                            echo " </br>" ;
                              
                            echo "<button onclick= printContent('div1')>";
                            echo "IMPRIMER ";
                            
                            
                            
                            echo "</button>";

                           }
                           ?>
                      
               
                 
                        </tbody>
                      </table>
                    </div>