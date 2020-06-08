<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 Exercice 7</title>
</head>
<body>
    <?php
        function p4Ex7($age, $gender) {
            $result = [];

            if ($age >= 18) {
                $result[0] = 'vous êtes majeur';
            } else {
                $result[0] = 'vous êtes mineur';
            }

            if ($gender == 'Homme' || $gender == 'Femme') {
                $result[1] = 'Vous êtes ' . $gender;
            } else {
                $result[1] = 'Vous êtes une créature indéfinie';
            }
            
            return $result[1] . ' et ' . $result[0] . '.';
        }
    ?>
    <p><?= p4Ex7(39, 'Homme'); ?></p>
</body>
</html>