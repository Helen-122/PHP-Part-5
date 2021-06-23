<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-5 Exercice1</title>
</head>
<body>
    <p>Créez un lien avec les paramètres "nom" et "prénom" dirigeant sur la page courante et affichez ces paramètres.</p>

    <a href="index.php?nom=Mazourine&amp;prenom=Hélène">TEST</a>
<?php
    echo ' Nom: '. $_GET['nom'] .' '. 'Prénom : '. $_GET['prenom'];
?>
</body>
</html>