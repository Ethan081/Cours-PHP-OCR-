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
      <form action="minichat_post.php" method="post">
        <label for="name">Pseudo: </label>
        <input type="text" name="name" placeholder="votre pseudo"><br />
        <label for="password">Mot de Passe: </label>
        <input type="password" placeholder="votre mot de pass">
      </form>
     
  </body>
</html>