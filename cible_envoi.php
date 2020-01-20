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
  // $_FILES-> est un array
    if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) 
    {

      if ($_FILES['monfichier']['size'] <= 1000000) 
      {
          // pathinfo-> La fonctionpathinforenvoie un array contenant entre autres l'extension du fichier dans$infosfichier['extension']
          $infos_fichier = pathinfo($_FILES['monfichier']['name']);
          $extention_upload = $infos_fichier['extension'];
          $extention_autoriser = array('jpg', 'jpeg', 'png', 'gif');
          // in_array()->vérifier si l'extension récupérée fait bien partie des extensions autorisées 
          if (in_array($extention_upload, $extention_autoriser)) 
          {
            $tmp_name = $_FILES['monfichier']['tmp_name'];
            
            $name = basename($_FILES['monfichier']['name']);
            // move_uploaded_file()->Si tout est bon, on accepte le fichier
            move_uploaded_file($tmp_name, 'upload/'. $name);
            echo "L'envoie a bien ete effectué!<br />";
            echo '<img src="upload/'.$name.'" alt="" />';
            
          }
        }
      }
      ?>
</body>
</html>