<!DOCTYPE html>
<html>
<head>
    <title>Labo1</title>
</head>
<body>
    <?php
    echo "<h1>Exercice 1 : </h1>";

    //tant que $i est inferieur  à 5, elle exécute le code à l'intérieur de la boucle
    for ($i = 1; $i <= 5; $i++) {
        echo "*";
    }

    echo "<h1>Exercice 2 : </h1>";

    //la boucle parcourt les lignes de 1 à 4
    for ($i = 1; $i <= 4; $i++) {
         // À chaque itération de la boucle, affiche une étoile (*).
        for ($j = 1; $j <= 4; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<h1>Exercice 3 : </h1>";

    // Cette boucle parcourt les nombres de 1 à 10.
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            // Si $i est un nombre pair, affiche une étoile en rouge.
            echo '<font color="red">*</font>';
        } else {
             // Sinon, affiche une étoile en noir.
            echo '*';
        }
    }

    echo "<h1>Exercice 4 : </h1>";

    // exécute la boucle cinq fois. À chaque itération, la variable i est décrémentée de 1.
    for ($i = 5; $i >= 1; $i--) {
        //exécute la boucle cinq fois . À chaque itération, la variable j est incrémentée de 1.
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';}

    echo "<h1>Exercice 5 : </h1>";

    // exécute la boucle cinq fois. À chaque itération, la variable i est incrémentée de 1.
    for ($i = 1; $i <= 5; $i++) {
        //exécute la boucle cinq fois . À chaque itération, la variable j est décrémentée de 1.
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
        }

    echo "<h1>Exercice 6 : </h1>";


    // Cette boucle parcourt les nombres de 1 à 10.
        for ($i = 1; $i <= 10; $i++) {
        //Si le modulo du nombre = 0, Affiche l'etoile en en bleu
        if ($i % 3 == 0) { 
            echo '<font color="blue">*</font>';
        } elseif ($i % 3 == 1) { ////Si le modulo du nombre = 0, Affiche l'etoile en vert
            echo '<font color="green">*</font>';
        } else { 
            echo '<font color="red">*</font>';
        }
    }
    ?>
</body>
</html>