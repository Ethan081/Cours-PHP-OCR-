<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <h2>Veuilliez tapez votre prenom:</h2>
   <form action="cible.php" method="post">
        Prenom:<br>
        <input type="text" name='prenom' placeholder='prenom'><br />
        Message:<br>
        <textarea name="message" id="" cols="45" rows="8" placeholder="Votre message ici"></textarea><br />
        Ou habitez-vous:<br>
        <select name="choix">
            <option value="France" selected="selected">France</option>
            <option value="UK">UK</option>
            <option value="Espagne">Espagne</option>
            <option value="Italie">Italie</option>
        </select><br />
        <input type="checkbox" name="case"/><label for="case">Frites</label><br />
        <input type="checkbox" name="case"/><label for="case">Patates</label><br />
        <input type="submit" value="Valider">
    
   </form>
</body>
</html>