<?php session_start();?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    <p>Bonjour <?php echo $_SESSION['lastname'] .' '. $_SESSION['firstname']; ?></p>
    <?php 
    // print_r($_GET);
    if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repete'])) {

        $_GET['repete'] = (int)$_GET['repete'];

        if ($_GET['repete']>= 1 AND $_GET['repete']<=100) {

            for ($i=0; $i < $_GET['repete']; $i++) { 

                 echo 'Bonjour ' . $_GET['prenom']. ' ' .$_GET['nom'] . '!<br />'; 
            }
        }else{
            echo 'Le nombre est soit trop petit ou soit trop grand';
        }
    }else{
        echo 'Il faut renseigner un nom et un prenom.';
    }
    ?>
</body>
</html>