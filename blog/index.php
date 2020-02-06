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
    $reponse = $pdo->query('SELECT * FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

    while ($donnees = $reponse->fetch()) 
    {
    ?>
        <div class="news">
            <h3><?php echo $donnees['titre'], $donnees['date_create']; ?></h3> 
            <p>
                <?php echo$donnees['contenu']?><br />
                <a href="commentaires.php/">Commentaires</a>
            </p>
        </div>
    <?php
    }

    ?>

    <div class="news">
        <h2>Hello</h2>
        <p>Les gens sont cool!</p>
    </div>
  </body>
</html>