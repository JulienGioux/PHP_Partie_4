<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Partie 4 Exercice 4</title>
</head>
<body>
    <?php
        function p4Ex4($nb1, $nb2) {
            switch (TRUE) {
                case $nb1 == $nb2:
                    return 'Les deux nombres sont identiques';
                    break;

                case $nb1 > $nb2:
                    return 'Le premier nombre est plus grand';
                    break;

                case $nb1 < $nb2:
                    return 'Le premier nombre est plus petit';
                    break;
                
                default:
                    return 'Il doit y avoir une erreur quelque part...';
                    break;
            }
        }
    ?>
    <p><?php echo p4Ex4(6, 5); ?></p>
</body>
</html>