<?php setcookie('lastname', 'Anne', time()+3600, null, null, false, true);?>// On écrit un cookie
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
            Formulaire d envoie de fichier:<br />
            <input type="file" name="monfichier"><br />
            <input type="submit" value="Envoyer mon fichier">
        </p>
    </form>
 

</body>
</html>