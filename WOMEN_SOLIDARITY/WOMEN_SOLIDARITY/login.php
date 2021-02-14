<?php
        include("classe/connexion.php");
        include("classe/membre.php");
        $membre = new Membre();
        $membre::init_php_session();

    
        
		if(isset($_REQUEST['email']) && isset($_REQUEST['pass']))
        {

				if($membre->Auth($_REQUEST['email'])){

							foreach($membre->Auth($_REQUEST['email']) as $e){

								$pass = $e['pass'];
								$idMembre= $e['idMembre'];
								$phone= $e['telephone'];
								$email= $e['email'];
								$nom= $e['nom'];
								$prenom= $e['prenom'];
								$Photo = $e['photo'];
								$idRole = $e['idRole'];
								$statut = $e['statutM'];
								$entrepreneuse = $e['entrepreneuse'];
								
							}
							if( $statut == 1 ){

													if(password_verify($_REQUEST['pass'] , $pass))
													{


													
																$_SESSION['idMembre'] = $idMembre;
																$_SESSION['email'] = $email;
																$_SESSION['Photo'] = $Photo;
																$_SESSION['phone'] = $phone;
																$_SESSION['nom'] =    $nom;
																$_SESSION['prenom'] =    $prenom;
																$_SESSION['idRole'] =$idRole;
																$_SESSION['statut'] = $statut;
																$_SESSION['entrepreneuse'] = $entrepreneuse;

																if($_SESSION['idRole'] ==1){
																		header("Location:admin/index.php");   
																}else if(($_SESSION['idRole'] == 2) || ($_SESSION['idRole'] == 3)){
																		header("Location:index.php");  
																}else{
																		header("Location:logout.php");
																}
																
													}else{  
															echo"<script>";
															echo "alert('identifiant ou mot de passe invalide')";
															echo"</script>";  
													}

							}else{
								
								echo"<script>";
								echo "alert('contacter votre administrateur')";
								echo"</script>";  

							}
				
				}else{  
					echo"<script>";
					echo "alert('identifiant ou mot de passe invalide')";
					echo"</script>";  
				}
        }
?>



<?php if(!isset($_SESSION['idMembre'])):?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> WOMEN solidarity</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form action="login.php" method="post" class="login100-form validate-form">


				<span class="login100-form-title p-b-37">
					Sign In
				</span>
                
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

                

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>

<br>
<div class="text-center">
					<a href="index.php" class="txt2 hov1">
                    Back to home page
					</a>
				</div>
                <br>
				<div class="text-center">
					<a href="register.php" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php endif; ?>