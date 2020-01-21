<?php
  session_start();// On démarre la session(qui est un array)
  $_SESSION['lastname'] = 'Regis';// On assigne des variables a la superGlobal session
  $_SESSION['firstname'] = 'Dumont';
  $_SESSION['age'] = 45;

  ?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <?php 
    // ON ouvre le fichier
    $monfichier = fopen('compteur.text', 'r+');

    $pages_view = fgets($monfichier); //On lie la premiere ligne.
    $pages_view += 1; //On augmente de 1 le nombre de page vues.
    fseek($monfichier, 0); //On remet le curseur en debut de fichier.
    fputs($monfichier, $pages_view); //On ecrit le nouveau nombre de pages vues.
    
    //Quant on fini de l'utiliser. ON ferme le fichier.
    fclose($monfichier);
    echo 'Cette pages a ete vues' . $pages_view . 'de fois';
    ?>
</body>
</html>