<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
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

            $request = $pdo->prepare('select * from users');
            $request -> execute();
            // TODO: add your code here
            // retrieve data from database using fetch(PDO::FETCH_OBJ) and
            // display them in HTML array
            /*** close the database connection ***/
            $users = $request -> fetchAll(PDO::FETCH_OBJ);

            if(count($users) > 0){
                echo "<table class = \"donnees\">
                    <tr class = \"titre\"><th>Nom</th><th>Email</th></tr>";

                foreach($users as $user){
                    echo "<tr><td>" . $user -> name . "</td><td>" . $user -> email . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Aucun résultat trouvé</p>";
            }

            $pdo = NULL;
        ?>
    </body>
</html>