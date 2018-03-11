<!DOCTYPE html>
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

	<h1>S'authentifier</h1>
	
		<form name="Idenfication" action="authentification.php" method="post">
		
			<label> Login : </label>
			<input type="text" name="login" maxlength="15" />
			<br/>
			<label> Mot de passe : </label>
			<input type="text" name="mdp" maxlength="15" />
			
			<input type="submit" value="S'authentifier" />
		</form>
	
	</body>
	
</html>