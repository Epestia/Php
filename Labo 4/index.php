<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1> Interro </h1>
    <form id="myForm" action="page2.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required>
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="number" name="nombre" required>
        <br>
        <input type="submit" value="Envoyer" required>
    </form>

</body>
</html>
