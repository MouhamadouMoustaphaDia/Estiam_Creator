<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
<!-- my Style -->
      <link rel="stylesheet" type="text/css" media="screen" href="style.css">

  </head>

  <body class="login">

  	<?php
				if (isset($_GET['mes'])) {
					if($_GET['mes']==1){
							
					echo '<div class="alert alert-danger">
                                       Erreur Serveur, Contactez l\'administrateur
                              </div>';}
				}
			?>
    <div id="libasse">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div  class="login_wrapper">
        <div class="animate form login_form">
          <div>
              <marquee> <h1>Bank Of SENECOM-BANK</h1> </marquee>
            </div>
            
          <div id="tiko" class="error-top" >
            
          <section  id="ameth" class="login_content">
            <form id="test" method="post" action="Controller/userController.php">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="login" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="Motdepasse" placeholder="Password" required="" />
              </div>
              <div>
                 <input type="submit" value="conexion" name="conexion" />
                <a class="btn btn-default submit" value="conexion" name="conexion">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
          </div>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="Controller/userController.php">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

    <div>
      
             

    </div>
  </body>
</html>





