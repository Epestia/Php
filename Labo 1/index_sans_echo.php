<!DOCTYPE html>
<html>
<head>
    <title>Labo1</title>
</head>
<body>
    
    <h1>Exercice 1 : </h1>

    <?php
        //tant que $i est inferieur  à 5, elle exécute le code à l'intérieur de la boucle
            for ($i = 1; $i <= 5; $i++) {
                ?><span>*</span><?php
            }
    ?>

    <h1>Exercice 2 : </h1>

    <?php
        //la boucle parcourt les lignes de 1 à 4
        for ($i = 1; $i <= 4; $i++) {
             // À chaque itération de la boucle, affiche une étoile (*).
            for ($j = 1; $j <= 4; $j++) {
                ?><span>*</span><?php 
            }
            ?><br><?php
        }
        
    ?>

    <h1>Exercice 3 : </h1>

    <?php
        // Cette boucle parcourt les nombres de 1 à 10.
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                // Si $i est un nombre pair, affiche une étoile en rouge.
                ?><font color="red">*</font><?php
                    } else {
                         // Sinon, affiche une étoile en noir.
                            ?><span>*</span><?php
                        }
            }
            
    ?>

    <h1>Exercice 4 : </h1>

    <?php
        // exécute la boucle cinq fois. À chaque itération, la variable i est décrémentée de 1.
        for ($i = 5; $i >= 1; $i--) {
            //exécute la boucle cinq fois . À chaque itération, la variable j est incrémentée de 1.
            for ($j = 1; $j <= $i; $j++) {
                ?><span>*</span><?php
                    }?> <br> <?php
            }
    ?>

    <h1>Exercice 5 : </h1>

    <?php
        // exécute la boucle cinq fois. À chaque itération, la variable i est incrémentée de 1.
        for ($i = 1; $i <= 5; $i++) {
            //exécute la boucle cinq fois . À chaque itération, la variable j est décrémentée de 1.
            for ($j = 1; $j <= $i; $j++) {
                ?><span>*</span><?php
                    }?> <br> <?php
            }

    ?>

    <h1>Exercice 6 : </h1>

    <?php
        // Cette boucle parcourt les nombres de 1 à 10.
        for ($i = 1; $i <= 10; $i++) {
            //Si le modulo du nombre = 0, Affiche l'etoile en en bleu
            if ($i % 3 == 0) { 
                ?><font color="blue">*</font><?php
            } elseif ($i % 3 == 1) { ////Si le modulo du nombre = 0, Affiche l'etoile en vert
                ?><font color="green">*</font><?php
            } else { 
                ?><font color="red">*</font><?php
            }
        }
    ?>

    
</body>
</html>