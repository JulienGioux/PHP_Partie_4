<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 Exercice 6</title>
</head>
<body>
    <?php
        function p4Ex6($fName, $lName, $age) {
            return 'Bonjour '. $fName . ' ' . $lName . ' , tu as ' . $age . ' ans.';
        }
    ?>
    <p><?= p4Ex6('Julien', 'Gioux', 39); ?></p>
</body>
</html>