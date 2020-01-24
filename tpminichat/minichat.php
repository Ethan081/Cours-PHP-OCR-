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
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
      }catch(Exception $e )
      {
        die('Error:' . $e->getMessage());

      }    
    ?>
      <form action="minichat_post.php" method="post">

        <label for="name">Pseudo: </label>
        <input type="text" name="name" placeholder="votre pseudo"><br>

        <label for="message">Message: </label>
        <input type="text" name=message placeholder="votre message ici"><br>

        <input type="submit" value="Submit">
      </form>



      <p>
      //boucle qui recupaire les infos de la db et les affiches.
    
     
  </body>
</html>