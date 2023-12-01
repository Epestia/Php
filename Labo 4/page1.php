<!DOCTYPE html>

<html lang="fr">

<head>
	 

    <title> Devoir </title>

	

    <link rel="stylesheet" type="text/css" href="CSS/stylepage1.css" />

</head>

<body>

    <h1> Exercices Devoir </h1>
	
	<form enctype="multipart/form-data" action="page2.php" method="post">
	<ul>
		<li>
			<label for="Nom">Nom&nbsp;:</label>
			<input type="text" id="nom" name="nom" />
		</li>
		<li>
			<label for="Prenom">Prenom&nbsp;:</label>
			<input type="text" id="prenom" name="prenom" />
		</li>
		<li>
			<label for="Nombre">Nombre&nbsp;:</label>
			<input type="number" id="nombre" name="nombre" min = 0 ; max =26 />
		</li>
	
	</ul>
	
	<button type="submit">Valider</button>
	
</form>
	
</body>

</html >