<!DOCTYPE html>

<html>
	<head>
	
		<link href="style.css" media="all" rel="stylesheet" type="text/css" />
		<meta charset="utf8"/>
		<title> Récapitulatif de vos informations </title>	
	</head>
	
	<body>
		<?php
			$nom = $_POST ["nom"];
			$prenom = $_POST ["prenom"];
			echo "<p> Bienvenue, $prenom $nom </p>";
		?>
	</body>
	
		
</html>
