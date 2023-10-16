<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Données rajoutée avec succès</h1>  
        <?php
            require_once('config.php');

            $connectionString = "mysql:host=". _MYSQL_HOST;

            if(defined('_MYSQL_PORT')){
                $connectionString .= ";port=". _MYSQL_PORT;
            }
            
            $connectionString .= ";dbname=" . _MYSQL_DBNAME;
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );

            $pdo = NULL;
            try {
                $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $erreur) {
                echo 'Erreur : '.$erreur->getMessage();
            }

            $name = $_POST['name'];
            $mail = $_POST['mail'];

            $sql = 'INSERT INTO `users`(`name`, `email`) VALUES (:name,:mail)';
            $cmd = $pdo->prepare($sql);
            $cmd -> bindParam(':name', $name);
            $cmd -> bindParam(':mail', $mail);
            $cmd->execute();

            

            $pdo = NULL;
        ?>

        <a href="users.php">Revenir à l'accueil</a>
    </body>
</html>