<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
    <p>Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. <br>
    Vérifiez si le paramètre serveur existe, si oui affichez le sinon affichez un message d'erreur..</p>

<?php


if(isset($_GET['serveur'])){
    echo ' Langage: '. $_GET['langage'] .' '. 'Serveur: '. $_GET['serveur'];
}
else{
echo 'Un des parametres n\'existe pas';
}




?>
    
</body>
</html>