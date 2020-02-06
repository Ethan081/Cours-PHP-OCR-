<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <strong>Liste des jeux PC</strong><br />
    <?php 
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $request = $bdd->query('SELECT UPPER(nom) AS upper_name,prix FROM jeux_video WHERE console = \'PC\'');
        
        while($donnees = $request->fetch()){         
            echo 'Nom ' . '<strong>'. $donnees['upper_name']. '</strong>' . ' Prix '. $donnees['prix'] . ' $.' .'<br />';
        }
        $reponse->closeCursor();



        // $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
        // $req->execute(array($_GET['possesseur'], $_GET['prix_max']));

        //     echo '<ul>';
        //         while ($results = $req->fetch())
        //         {
	    //             echo '<li>' . $results['nom'] . ' (' . $results['prix'] . ' EUR)</li>';
        //         }
        //     echo '</ul>';

        // $req->closeCursor();
    
    ?>
    <?php
$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

$donnees = $reponse->fetch();
echo $donnees['prix_moyen'];

$reponse->closeCursor();

?>
</body>
</html>