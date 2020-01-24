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
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//verification si le jeux existe
if ($bdd->query('SELECT EXISTS(SELECT nom FROM jeux_video)')) {
    echo "Le jeu existe deja";
}else{
    // On ajoute une entrée dans la table jeux_video
    $bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');
    
    echo 'Le jeu a bien été ajouté !<br />'; 
}
//Affichage du jeux ajouter
$reponse = $bdd->query('SELECT ID, nom FROM jeux_video ORDER BY ID DESC LIMIT 1');
$reponse->fetch();
echo '<p>' . $reponse['nom'] . '</p>';
?>


</body>
</html>