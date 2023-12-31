<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Données Modifiée avec succès</h1>  
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

            $id = $_POST['id_modif'];
            $name = $_POST['name_modif'];
            $mail = $_POST['mail_modif'];

            $sql = 'UPDATE `users` SET `name`=:name, `email`= :mail WHERE `id`=:id';
            $cmd = $pdo->prepare($sql);
            $cmd -> bindParam(':id', $id);
            $cmd -> bindParam(':name', $name);
            $cmd -> bindParam(':mail', $mail);
            $cmd->execute();

            //INSERT INTO `users`(`name`, `email`) VALUES (:name,:mail)

            $pdo = NULL;

            header("location: users.php");
        ?>

        <a href="users.php">Revenir à l'accueil</a>
    </body>
</html>