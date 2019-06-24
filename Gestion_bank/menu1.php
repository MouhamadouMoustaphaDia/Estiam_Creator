   <?php 



$nbr=messageDes();
$ac=messageAct();

?>
    <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">

              <div class="profile_pic">
                <img src="images/Capture.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['Login']; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Déconnexion</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                   <li role="presentation" class="">
                    <a href="?page=addClient">Nouveau Clients</a>
                </li>
                <li role="presentation" class="">
                    <a href="?page=addClientExis">Clients Existant</a>
                  </li>
                 <li role="presentation" class="">
                    <a href="?page=listecli">lister Clients</a>
                  </li>
                  <li role="presentation" class="">
                      <a href="?page=listcomtByCl">Lister Compte par Client</a>
                 </li>
                 <li role="presentation" class="">
                      <a href="?page=Validation">Activation / Désactivation</a> 
                 </li>
                </ul>
              </div>
              <div class="menu_section">
                
                
                
                  
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" class="nav navbar-nav ">
            <nav >
              <div class="nav toggle">
                
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
  <!-- Mon menu  -->

              <ul class="nav navbar-nav ">
                 <li role="presentation" class="active">
                    <a href="?page=addClient">Nouveau Clients</a>
                </li>
                <li role="presentation" class="">
                    <a href="?page=addClientExis">Clients Existant</a>
                  </li>
                 <li role="presentation" class="">
                    <a href="?page=listecli">lister Clients</a>
                  </li>
                  <li role="presentation" class="">
                      <a href="?page=listcomtByCl">Lister Compte par Client</a>
                 </li>
                 <li role="presentation" class=""> 
                      <a href="?page=Validation"> Desactivation <i class="fa fa-envelope-o"></i><span class="badge bg-green"><?php if($nbr['0']!=0){ echo($nbr['0']);}  ?></span></a> 
                 </li>
                  <li role="presentation" class="">
                      <a href="?page=Activation">Activation <i class="fa fa-envelope-o"></i><span class="badge bg-green"><?php if($ac['0']!=0){ echo($ac['0']);}  ?></span></a> 
                 </li>
                 
  <!-- Mon menu  -->

                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/Capture.jpg" alt=""><?php echo $_SESSION['Login']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   
                    <li>
                      <a href="http://localhost/LimsMetik_Bank/Gestion_Bank/view/user/modifiermdp.php">
                        
                        <span>Changer Mot de passe</span>
                      </a>
                    </li>
                    
                     <li><a href="index.php">Déconnexion</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown  ">
                  
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <marquee><h3>SENECOM-BANK</h3></marquee>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <marquee direction="right"><h3>SENECOM-BANK</h3></marquee>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>