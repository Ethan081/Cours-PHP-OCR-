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

    <p>Bonjour, <?php echo $_SESSION['lastname']?></p>
    <a href="envurl/bonjour.php?nom=Dupont&amp;prenom=Jean&amp;repete=4">Dis-moi bonjour !</a><br/>  
    <a href="formulaire/formulaire.php">Formulaire!</a><br />
    <a href="uploadfile/upload.php">Upload!</a><br />
    <a href="codeNasa/formulaire.php">TpNasa!</a><br />
</body>
</html>