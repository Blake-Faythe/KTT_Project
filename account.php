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

		<h1>Mon Compte</h1>
		
		<? php 
			if (isset($_SESSION["login"]) AND ! empty($_SESSION["login"])){
				$login=$_SESSION["login"];
				
				echo "<p> Cher $login, voici le récapitulatif de vos informations </p>";
				
			}
			
			else {
				echo "<p>Vous devez vous connecter pour voir vos informations</p>";
			
			}
			
			?>
	
	
	
	</body>
	
</html>