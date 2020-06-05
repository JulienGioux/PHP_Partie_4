<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 Exercice 5</title>
</head>
<body>
    <?php
        function p4Ex5($txt1, $nb1) {
            return $txt1 . ' ' . $nb1 . ' ans.';
        }
    ?>
    <p><?php echo p4Ex5('J\'ai ', 39); ?></p>
</body>
</html>