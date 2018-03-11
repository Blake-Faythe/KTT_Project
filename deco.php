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

		<h1>Déconnexion</h1>
		
		<? php 
			if (isset($_SESSION["login"]) AND !empty($_SESSION["login"])){
				
				unset($_SESSION["login"]);
				session_destroy();
				
				echo "<p> Vous avez été déconnecté avec succès </p>";
				
			}
			
			else {
				echo "<p>Aucune connexion active, échec de la déconnexion</p>";
			
			}
			
			?>
	
	
	
	</body>
	
</html>