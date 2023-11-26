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
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $nombre = intval($_POST["nombre"]);

        // Afficher le message de bienvenue
        echo "<p>Bienvenue $nom !</p>";

        // Afficher les images en fonction du nombre
        if ($nombre <= 3) {
            // Afficher le nombre d'images spécifié
            $randomImageNumber = rand(1, 6); 
            echo "<img src='./img/image_$randomImageNumber.jpg'alt='Image $randomImageNumber'>";
            }
        } else {
            // Afficher les premières lettres de l'alphabet
            for ($i = 1; $i <= 3; $i++) {
                $letter = chr(ord('A') + $i - 1);
                echo "<img src='image_$letter.jpg' alt='Image $letter'>";
            }
        }
    ?>
</div>



</body>
</html>