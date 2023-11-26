<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./Jquery/jquery-3.7.1.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="container">
        <form action="reponse.php" method="post" class="form">
            <h2>Formulaire :</h2>

            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>

            <label for="nombre">Nombre :</label>
            <input type="number" name="nombre" id="nombre" required>

            <input type="submit" value="Envoyer">
        </form>
    </div>

</body>
</html>