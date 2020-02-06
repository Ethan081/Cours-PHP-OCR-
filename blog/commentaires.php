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
    <h1>Mon Super Blog !</h1>
    <p><a href="index.php">Retour a la liste de Billets</a></p>
    <?php
        require_once('../librairies/database.php');
        // Connection a la base de donnee
        $pdo = getPdo();
        $reponse = $pdo->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%Y") AS date FROM billets WHERE id = ?');
        $reponse->execute(array($_GET['billet']));
        $donnees = $reponse->fetch();
    ?>
    <div class="news">
        <h3><?php echo htmlspecialchars($donnees['titre']). ". Article publier le : " .$donnees['date']; ?></h3> 
        <p>
            <?php echo htmlspecialchars($donnees['contenu'])?><br />
        </p>
    </div>
    <h2>Commentaires</h2>
    <?php 
        $reponse->closeCursor();
        //On recupaire les commentaires
        $req = $pdo->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, "%d/%m/%Y") AS date_comment FROM commentaires WHERE id_billet = ? ORDER BY date_comment');
        $req->execute(array($_GET['billet']));
        while ($donnees = $req->fetch()) 
        {
        ?>
            <p>
                <strong><?php echo htmlspecialchars($donnees['auteur']);?></strong> le <?php echo $donnees['date_comment'];?>
            </p>
            <p>
                <?php echo htmlspecialchars($donnees['commentaire']);?>
            </p>

        <?php
        }
        $req->closeCursor();
        ?>
    
    
      
  </body>
</html>