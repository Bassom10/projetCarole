<?php 
   include("classe/connexion.php");
   include("classe/membre.php");
   include("classe/role.php");
   $membre = new Membre();
   $role = new Role();

   if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['pass'] )){
	   $nom = $_POST['nom'];
	   $prenom = $_POST['prenom'];
	   $email = $_POST['email'];
	   $phone = $_POST['phone'];
	   $pass = $_POST['pass'];

	   $pwd =  password_hash($pass , PASSWORD_BCRYPT);

      if(  $membre->inscription(2,$nom,$phone,$pwd,$email,$prenom)  ){
		  header("Location:index.php");
	  }
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>WOMEN solidarity</title>
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
			<form action="register.php" method="post" class="login100-form validate-form" >
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter name">
					<input class="input100" type="text" name="nom" placeholder="Nom ">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter name">
					<input class="input100" type="text" name="prenom" placeholder="Prénom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
					<input class="input100" type="email" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter phone">
					<input class="input100" type="text" name="phone" placeholder="Téléphone">
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Sign Up
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
					<a href="login.php" class="txt2 hov1">
						Sign In
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