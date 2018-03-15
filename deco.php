<!DOCTYPE html>

<?php session_start(); ?>

<html>
	<div class="degrade">
		<head>
			<link href="style.css" media="all" rel="stylesheet" type="text/css" />
			<meta charset="utf8"/>
			<title>A bientôt chez Koala-Tea Time</title>	
		
			<?php include('header.php'); ?>

		</head>
 
		<body>
			<div class="imgtitre"> <img src="Images/bandeau_titre.jpg" width="100%" height="auto"/> 
				<h1>Au revoir!</h1>
			</div>
		
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
		
	</div>
	
</html>