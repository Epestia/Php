<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labo 3 : Formulaire</title>
</head>
<body>
    <h1>Labo gestion personne :</h1>
    <form action="" methode="post">
    <ul>
        <li><label for="idPersonne">Identifiant:</label></li>
        <li><label for="nomPersonne">Nom:</label></li>
        <li><label for="prenomPersonne">Prenom:</label></li>
        <li><label for="mailPersonne">Mail:</label></li>
        <li><label for="numTelPersonne">Telephone: </label></li>
        <li><label for="agesPersonne">Ages:</label></li>
        <li><Label for="numNationnalPersonne">Numero Nationnal:</label></li>
        <li><label for="dateNaissancePersonne">Date de naissance:</label></li>
        <li><label for="passWordPersonne">Password:</label></li>
        <li><label for="rolePersonne">Admin:</label></li>
    </ul>
    </form>
	<?php 
        include_once 'personne.php';
        include_once 'admin.php';
    ?>   
</body>
</html>