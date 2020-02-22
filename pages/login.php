<?php
	
	if (version_compare(phpversion(), '5.4.0', '<')) {
		 if(session_id() == '') {
			session_start();
		 }
	 }
	 else
	 {
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	 }
	if(isset($_SESSION['erreurLogin'])){
		$erreurLogin=$_SESSION['erreurLogin'];
		//$_SESSION['erreurLogin']="";
	}else{
		$erreurLogin="";
	}
	session_destroy();
	
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title> CNI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
      
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="../fonts/icomoon/styleindex.css">
    <link rel="stylesheet" href="../css/bootstrap.minindex.css">
    <link rel="stylesheet" href="../css/magnific-popupindex.css">
    <link rel="stylesheet" href="../css/jquery-uiindex.css">
    <link rel="stylesheet" href="../css/owl.carousel.minindex.css">
    <link rel="stylesheet" href="../css/owl.theme.default.minindex.css">
    <link rel="stylesheet" href="../css/bootstrap-datepickerindex.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/fl-bigmug-lineindex.css">
  

    <link rel="stylesheet" href="../css/styleindex.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="../index.html" class="text-black h2 mb-0">Centre National<strong>  Informatique</strong></a></h1>
            
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="../index.php">Acceuil</a></li>
                <li><a href="about.php">A Propos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Espace Privée</a></li>

                <li><a href="#"><span><span class="h5 mr-2"><img src="../images/tooplate_logo.png"></span></span></a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
              </div>

          </div>

        </div>
      </div>
      
    </header>
      
      
      
    <div class="unit-5 overlay" style="background-image: url('../images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Connexion</h2>
        <p class="mb-0 unit-6"><a href="../index.html">Acceuil</a> <span class="sep">></span> <span>Connexion</span></p>
      </div>
    </div>

    
    <body>
        <center> 
	  <div>
		<img src="../images/tooplate_logo.png" alt="IMG" style="    width: 10%;">
		</div></center>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../images/bg-01.jpg);"  >
                  
					<span class="login100-form-title-1">
Login Administrateur
                    </span>
				</div>

				<form method="post" action="seConnecter.php" class="login100-form validate-form">
                    		<?php
								if($erreurLogin!=""){?>			
									<div class="alert alert-danger alert-dismissible">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<?php echo $erreurLogin ?>
									</div>			
						<?php 	}	?>
                    
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">S'Identifier</span>
						<input class="input100" type="text"name="LOGIN" id="LOGIN"placeholder="Identifier">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="PWD" id="PWD" placeholder="Mot de passe">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						  <div>
				<a href="InitialiserPwd.php"class="txt1">Mot de passe Oublié</a>
				        </div>
					</div>
	           <div >
						<a class="txt2" href="nouvelUtilisateur.php">
							Créer un compte
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					<div class="container-login100-form-btn">
						 <button class="login100-form-btn">
							Connexion 
						</button>
					</div>
                  
				</form>
			</div>
		</div>
	</div>
	

    
  <script src="../js1/jquery-3.3.1.min.js"></script>
  <script src="../js1/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js1/jquery-ui.js"></script>
  <script src="../js1/popper.min.js"></script>
  <script src="../js1/bootstrap.min.js"></script>
  <script src="../js1/owl.carousel.min.js"></script>
  <script src="../js1/jquery.stellar.min.js"></script>
  <script src="../js1/jquery.countdown.min.js"></script>
  <script src="../js1/jquery.magnific-popup.min.js"></script>
  <script src="../js1/bootstrap-datepicker.min.js"></script>
  <script src="../js1/aos.js"></script>
  <script src="../js1/main.js"></script>
    <!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>
  </body>
</html>