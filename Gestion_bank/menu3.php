    <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">

              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2><?php echo $_SESSION['Login']; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Déconnexion</a></li>
                      
                    </ul>
                  </li>
                  <li>
                   <a href="?pages=Recherche"><span class="glyphicon glyphicon-search"></span> Recherche Compte</a>
                  </li>
                  <li>
                    <a href="?pages=listeCompt">Liste Des compte</a>
                    
                  </li>
                  <li>
                     <a href="?pages=OpeCompt">Operation par Compte</a>
                  </li>
                  <li><a href="?pages=DesacCompt">Activation/Désactivation</a>
                   
                  </li>
                  
                </ul>
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
                   <a href="?pages=Recherche"><span class="glyphicon glyphicon-search"></span> Recherche Compte</a>
                </li>
                 <li role="presentation" class="">
                    <a href="?pages=listeCompt">Liste Des comptes</a>
                  </li>
                  <li role="presentation" class="">
                     <a href="?pages=OpeCompt">Liste Operation par Compte</a>
                 </li>
                 <li role="presentation" class="">
                      <a href="?pages=DesacCompt">Activation / Désactivation</a>
                 </li>
                 
  <!-- Mon menu  -->

                <li class="">

                  <a  href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                   <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Parametre Compte
                    <span class=" fa fa-angle-down" ></span>
                  </a>

                  
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="http://localhost/ESTIAM/estiam_creator/Gestion_Bank/view/user/modifiermdp.php">
                        <span class="badge bg-red pull-right"></span>
                        <span>Changer Mot de passe</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
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
                <marquee><h3>Bienvenue Dans Votre Banque</h3></marquee>
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