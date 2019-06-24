<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from azmind.com/premium/bootstrap-login-forms-premium/form-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Jul 2018 12:37:07 GMT -->
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion</title>

        <!-- CSS -->
         <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
         <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
         <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
         <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
         <link href="../build/css/custom.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">        
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
        <div>
		  
        </div>

		<!-- Login Form 1 -->
		<div class="l-form-1-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
                    <?php
                if (isset($_GET['ok'])) {
                    if($_GET['ok']!=1){
                            
                    echo '<div class="alert alert-danger">
                                       Erreur Serveur, Contactez l\'administrateur
                              </div>';}
                }
            ?>
	                <div class="col-sm-8 col-sm-offset-2 l-form-1 section-description wow fadeIn">
	                    <marquee ><h1>SENECOM-Bank</h1></marquee>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>La banque de votre reve.</p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-6 col-sm-offset-3 l-form-1-box wow fadeInUp">
	            		
	                    <div class="l-form-1-top">
                    		<div class="l-form-1-top-left">
                    			<h3>Login to our site</h3>
								<p>Enter your username and password to log on:</p>
                    		</div>
                    		<div class="l-form-1-top-right">
                    			<i class="fa fa-lock"></i>
                    		</div>
                        </div>
                        <div class="l-form-1-bottom">
		                    <form role="form" action="Controller/userController.php" method="post">		                        
		                        <div class="form-group">
		                    		<label class="sr-only" for="l-form-1-username">Username</label>
		                        	<input type="text" name="login" placeholder="Username..." class="l-form-1-username form-control" id="l-form-1-username">
		                        </div>
		                        <div class="form-group">
		                        	<label class="sr-only" for="l-form-1-password">Password</label>
		                        	<input type="password" name="Motdepasse" placeholder="Password..." class="l-form-1-password form-control" id="l-form-1-password">
		                        </div>
		                        <button type="submit" class="btn" name="conexion">Sign in!</button>
		                        <div class="checkbox">
		                        	<input type="checkbox" id="remember-me" class="styled">
		                        	<label for="remember-me">Remember me</label>
		                        </div>
		                    </form>
	                    </div>
	                    
	                </div>
	            </div>
	            <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 l-form-1-social-login">
                    	<h3>...or login with:</h3>
                    	<div class="l-form-1-social-login-buttons">
                        	<a class="btn btn-link-2" href="#">
                        		<i class="fa fa-facebook"></i> Facebook
                        	</a>
                        	<a class="btn btn-link-2" href="#">
                        		<i class="fa fa-twitter"></i> Twitter
                        	</a>
                        	<a class="btn btn-link-2" href="#">
                        		<i class="fa fa-google-plus"></i> Google Plus
                        	</a>
                    	</div>
                    </div>
                </div>
	        </div>
        </div>

        
        

        <!-- Javascript -->
        <script src="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/js/jquery-3.2.1.min.js"></script>
        <script src="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/js/jquery.backstretch.min.js"></script>
        <script src="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/js/wow.min.js"></script>
        <script src="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/js/retina-1.1.0.min.js"></script>
        <script src="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/js/waypoints.min.js"></script>
        <script src="https://azmind.com/premium/bootstrap-login-forms-premium/form-1/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>


<!-- Mirrored from azmind.com/premium/bootstrap-login-forms-premium/form-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Jul 2018 12:37:07 GMT -->
</html>