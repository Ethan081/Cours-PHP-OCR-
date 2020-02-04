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
      
      <input type="text" name="name" placeholder="votre pseudo" value="<?php echo $_COOKIE['pseudo']; ?>"><br>

      <label for="message">Message: </label>
      <input type="text" name=message placeholder="votre message ici"><br>

      <input type="submit" value="Submit">
    </form>
      <!-- connection a la DB -->
    <?php 
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
      }catch(Exception $e )
      {
        die('Error:' . $e->getMessage());

      }    
    ?> 
    <!-- contenue recuperer de la base de donnee -->
    <?php 
      $reponse = $bdd->query('SELECT name, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
    ?>
    <!-- Boucle d'affichage des messages et des noms -->
    <?php 
      while($donnees = $reponse->fetch())
      {
    ?>
      <p>
        <strong><?php echo htmlspecialchars($donnees['name']);?> : </strong><?php echo htmlspecialchars($donnees['message']); ?><br /><br />
      </p>
        
    <?php
      }
      $reponse->closeCursor();
    ?>
    <form action="minichat.php">
      <input type="submit" value="Rafraîchir la page">
    </form>
  
  </body>
</html>