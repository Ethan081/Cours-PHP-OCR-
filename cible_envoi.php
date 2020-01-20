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
    if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) 
    {

      if ($_FILES['monfichier']['size'] <= 1000000) 
      {

          $infos_fichier = pathinfo($_FILES['monfichier']['name']);
          $extention_upload = $infos_fichier['extension'];
          $extention_autoriser = array('jpg', 'jpeg', 'png', 'gif');

          if (in_array($extention_upload, $extention_autoriser)) 
          {
            $tmp_name = $_FILES['monfichier']['tmp_name'];
            
            $name = basename($_FILES['monfichier']['name']);
            move_uploaded_file($tmp_name, 'upload/'. $name);
            echo "L'envoie a bien ete effectué!";
          }
      }
    }
  ?>
   
</body>
</html>