<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link href="style.css" rel="stylesheet" media="all" type="text/css">
  </head>
  <body> 
    <h1>Mon super blog !</h1>
    <h2>Derniers billets du blog: </h2>
  <?php
    require_once('../librairies/database.php');
    // Connection a la base de donnee
    $pdo = getPdo();

    // request to load last 5 commenteries
    $reponse = $pdo->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%Y") AS date FROM billets ORDER BY date DESC LIMIT 0, 5');

    while ($donnees = $reponse->fetch()) 
    {
    ?>
        <div class="news">
            <h3><?php echo $donnees['titre']. ". Article publier le : " .$donnees['date']; ?></h3> 
            <p>
                <?php echo$donnees['contenu']?><br />
                <a href="commentaires.php?billet=<?php echo $donnees['id'] ?>">Commentaires</a>
            </p>
        </div>
    <?php
    }
    $reponse->closeCursor();
    ?>
  </body>
</html>