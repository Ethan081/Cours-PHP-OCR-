<?php
  session_start();// On démarre la session(qui est un array)
  $_SESSION['lastname'] = 'Regis';// On assigne des variables a la superGlobal session
  $_SESSION['firstname'] = 'Dumont';
  $_SESSION['age'] = 45;
?>

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
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

        }catch(Exception $e){

            die('Error:' . $e->getMessage());
        }
        var_dump($_POST);
        $name = $_POST['name'];
        $message = $_POST['message'];
        if (isset($name) and isset($message)) {
             $bdd->exec("INSERT INTO minichat VALUES ('$name', '$message')");
            }else{
                echo 'il faut renseigner le nom et le prenom';
            }
            
            // $bdd->closeCursor();
        header('Location: minichat.php');
        $bdd = null;
    ?>
      
     
  </body>
</html>