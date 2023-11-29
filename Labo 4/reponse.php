<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="./css/style.css"> 
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> 
    <script src="./js/script.js"></script> 
    <title>Document</title> 
</head>
<body>
<?php
    session_start();

    // Accéder aux données du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

    session_unset();
    session_destroy();
    ?>
    <h2>Bienvenue <?php echo $prenom .' ' . $nom; ?> !</h2> 
    <br>
    <?php

    if ($nombre <= 3) {
        // Afficher le nombre d'images spécifié
        for ($i = 1; $i <= $nombre; $i++) {
            echo '<img src="img/image_' . $i . '.jpg" alt="Image ' . $i . '" class="clickable" data-index="' . $i . '">';
        }
    } else {
        // Afficher les x premières lettres de l'alphabet
        $maxLetters = min($nombre, 26);
        for ($i = 1; $i <= $maxLetters; $i++) {
            // Convertir le numéro en lettre (A, B, C, ...)
            $letter = chr(64 + $i); 
            echo '<span class="clickable" data-index="' . $i . '">' . $letter . '</span>';
        }
    }
?>

</body>
</html>
