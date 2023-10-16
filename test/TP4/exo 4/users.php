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
                    echo "<tr><td>" . $user -> name . "</td><td>" . $user -> email . "</td>
                    <td><a href=\" \">
                            <img src=\"images/modifer.png\" height = '30px'>
                        </a>
                    </td>
                    <td>
                        <a href=\"\">
                            <img src=\"images/supprimer.png\" height = '30px'>
                        </a>
                    </td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Aucun résultat trouvé</p>";
            }

            $pdo = NULL;
        ?>
        
        

        <form action="ajout_db.php" method="POST">
            <table>
                <tr>
                    <th>Nom :</th>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>Mail</th>
                    <td><input type="text" name="mail"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Valider"/></td>
                </tr>
            </table>
        </form>

    </body>
</html>