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
        if (!isset($_POST['mot_secret']) OR $_POST['mot_secret'] != 'kangourou') 
        {
            echo '<form action="code_sur_une_page.php" method="post">
                    <label for="mot_secret">Entrer le mot de passe:</label>
                    <input type="password" name="mot_secret" id="">
                    <input type="submit" value="Valider" />
                </form>';
        }else
        {
            echo '<h1>Le code Secret est:</h1>
                <p>HSGD-HSG64-OST7-GDHJ-PLQ9-624H</p>';
        }
    
    ?>
   
    
</body>
</html>