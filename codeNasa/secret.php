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
    $the_code = 'kangourou';
    if (isset($_POST['code_secret']) AND $_POST['code_secret'] == $the_code) {
      echo '<h1>Le code Secret est:</h1>
            <p>Nase</p>';
    } else {
      echo'<h1>Ce n est pas le bon Code</h1>';
      echo ' <a href="formulaire.php">Second chance</a>';
      
  
    }
    

  ?>
  
   
</body>
</html>