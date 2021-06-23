<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helene-2</title>
</head>
<body>
    <p>Créez un lien avec les paramètres "nom", "prénom" et "âge" dirigeant sur une autre page.,<br>
     Si l'âge est supérieur à 18 et inférieur à 130 affichez ces paramètres. L'âge ne peut être qu'un entier.</p>

   
<?php

if ($_GET['age'] == (int) $_GET['age']){


if ($_GET['age'] >= 18 && $_GET['age'] <= 130){
   echo ' Nom: '. $_GET['nom'] .' '. 'Prénom : '. $_GET['prenom'] .' '. 'Age : '. $_GET['age'];
}
else {
    echo 'Les valeurs ne sont pas celles demandées!';

}
}
?>
    

</body>
</html>