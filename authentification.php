<!DOCTYPE html>

<html>
	<div class="degrade">
		<head>
			<link href="style.css" media="all" rel="stylesheet" type="text/css" />
			<meta charset="utf8"/>
			<title>S'authentifier sur Koala-Tea Time</title>	
		
			<?php include('header.php'); ?>
		
		</head>

 	<body>
		<div class="imgtitre"> <img src="Images/bandeau_titre.jpg" width="100%" height="auto"/> 
			<h1>S'authentifier</h1>
		</div>
	
		<form name="Idenfication" action="welcome_login.php" method="post">
		<br/>
		
			<label> Login : </label>
			<input type="text" name="login" maxlength="15" />
			<br/>
			
			<label> Mot de passe : </label>
			<input type="text" name="mdp" maxlength="15" />
			<input type="submit" value="S'authentifier" />
			
		</form>
		<br/>
		
	<?php include('footer.php'); ?>
	
	</body>
	
</html>
