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
    // connection a la base de donnee
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

        }catch(Exception $e){

            die('Error:' . $e->getMessage());
        }
        // insertion du message a l aide d une requete .
          $req = $bdd->prepare('INSERT INTO minichat(name, message) VALUES(?, ?)');
          $req->execute(array($_POST['name'], $_POST['message']));

        // creation du setcookie
        setcookie('pseudo', $_POST['name'], time()+60);
        //  requete qui redirige vers minichat.php comme ceci:
        header('Location: minichat.php');
        
    ?>
      
     
  </body>
</html>