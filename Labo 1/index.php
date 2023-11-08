<!DOCTYPE html>
<html>
<head>
    <title>Labo1</title>
</head>
<body>
    <?php
    echo "<h1>Exercice 1 : </h1>";
    for ($i = 1; $i <= 5; $i++) {
        echo "*";
    }

    echo "<h1>Exercice 2 : </h1>";
    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<h1>Exercice 3 : </h1>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo '<font color="red">*</font>';
        } else {
            echo '*';
        }
    }
    echo "<h1>Exercice 4 : </h1>";
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';}
    echo "<h1>Exercice 5 : </h1>";
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
        }
    ?>
</body>
</html>
