<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LimsMetik! | </title>

    <!-- Bootstrap -->
 <link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
       <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>LimsMetik-Bank</h1>
              <div>
                
                <input type="password" name="amdp" class="form-control" placeholder="Ancien Mot de passe" required="required" />
              </div>
              <div>
                <input type="password" name="nmdp" class="form-control" placeholder="Nouveau Mot de passe" required="required" />
              </div>
              <div>
                <input type="password" name="cmdp" class="form-control" placeholder="Confirmer mot de passe" required="" />
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
                  <p>© 2016 All Rights Reserved. SENECOM-Bank! </p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <?php
if(isset($_GET['ok']))
{
    if($_GET['ok'] == 1)
    {
        echo '<div class="alert alert-success" style="text-align: center;">
                                   
                          </div>';
    }else{
        echo '<div class="alert alert-danger">
                                  Verifiez la Saisie des Mots de Passe !
                          </div>';
    }
}
?>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
             <form method="POST" action="../../Controller/modifierMdpController.php">
              <h1> MOT DE PASSE</h1>
              <div>
                <input type="password" name="amdp" class="form-control" placeholder="Ancien Mot de passe" required="" />
              </div>
               <div>
                <input type="password" name="nmdp" class="form-control" placeholder="Nouveau Mot de passe" required="" />
              </div>
              <div>
                <input type="password" name="cmdp" class="form-control" placeholder="Confirmer mot de passe" required="" />
              </div>
              <div >
                    <input class="btn btn-round btn-success"  type="submit" name="modifier" value="Modifier"/>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> SENECOM-Bank!</h1>
                  <p>©2016 All Rights Reserved. SENECOM-Bank! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>
