<!DOCTYPE html>

<?php session_start(); ?>
<html>

<!-- Une structure de base pour le site, à modifier ultérieurement -->
<div class="degrade">
	<head>
       <link href="style.css" media="all" rel="stylesheet" type="text/css" />
	   <meta charset="utf8"/>
		<title>Les thés de Koala-Tea Time</title>	
		
		<?php include('header.php'); ?>
		
 			<br/><br/>
	</head>
 

 
 	<body>

	<h1>Authentification</h1>
	
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