<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <p>Bonjour</p>
  <p>Je sais comment tu t'appelles. Tu t'appelle <?php echo htmlspecialchars($_POST['prenom']); ?></p>
  <p>Votre message est le suivant: <?php echo $_POST['message']; ?></p>
  <p>Vous vivez en : <?php echo $_POST['choix']; ?></p>
  <p>Vous avez selectionner : <?php echo $_POST['case']; ?></p>
  <p>Si tu veux changer de prenom et de message, <a href="formulaire.php">Clique ICI</a> 
  pour revenir a la page formulaire.php.</p>

</body>
</html>