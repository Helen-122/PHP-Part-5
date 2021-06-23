<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
</head>
<body>
    <p>Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. <br>
    Vérifiez si le paramètre serveur existe, si oui affichez le sinon affichez un message d'erreur.<br>
    Vous devez empêchez l'inclusion de balises html dans les paramètres.</p>

<?php


if(isset($_GET['langage']) && isset($_GET['serveur'])){
                       echo 'Langage : ' . strip_tags($_GET['langage']). '<br>Serveur : ' . strip_tags($_GET['serveur']);
                   }else{
                       echo 'erreur !';
                   }
                

?>

    
</body>
</html>