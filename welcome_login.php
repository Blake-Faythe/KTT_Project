<!DOCTYPE html>

<?php session_start(); ?>
<html>

	<div class="degrade">
		<head>
			<link href="style.css" media="all" rel="stylesheet" type="text/css" />
			<meta charset="utf8"/>
			<title>Bienvenue chez Koala-Tea Time</title>	
		
		<?php include('header.php'); ?>
		
 			<br/>
			<br/>
			
		</head>
 
		<body>
			<div class="imgtitre"> <img src="Images/bandeau_titre.jpg" width="100%" height="auto"/> 
				<h1>Bienvenue</h1>
			</div>
	
				<?php
					$login = $_POST ["login"];
					$mdp = $_POST ["mdp"];
			
					if($login == "admin" AND $mdp== "admin") {
						$_SESSION["login"]=$login;
					
						echo "<p> Bienvenue, $login </p>";
					}
			
					else {
						echo "<p> Authentification refusée </p>";
					}
			
				?>
		
			<a href="account.php"> Mon compte </a>
			<a href="deco.php"> Déconnexion </a>
	
		</body>
	
</html>