<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 Exercice 8</title>
</head>
<body>
    <?php
        function p4Ex8 ($nb1 = 0, $nb2 = 0, $nb3 = 0) {
            $result = $nb1 + $nb2 + $nb3;
            return $nb1 . ' + ' . $nb2 . ' + ' . $nb3 . ' = ' . $result;
        }
    ?>
    <p><?php echo p4Ex8(2, 5, 8); ?></p>
</body>
</html>