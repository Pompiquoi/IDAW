<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <link rel="stylesheet" href="cours.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            //Affiche "Hello World" avec un retour à la ligne
            echo 'Hello World <br>'; //Ceci est un commentaire PHP
            
            /*Affiche
              "Bonjour le Monde
            */
            echo "Bonjour le Monde <br>"; /*Ceci est un commentaire PHP*/

            date_default_timezone_set('Europe/Paris');
            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
            echo strftime('%A %d %B %Y, %H:%M:%S') . '<br>';
            echo "Nous sommes le " . date("F j, Y, g:i a")
        ?>
        <p>Un paragraphe</p>
        
        <?php
            echo 'Je m\'appelle Florian mais tout le monde m\'appelle "Flo"<br>';
            echo "Je m'appelle Florian mais tout le monde m'appelle \"Flo\"<br>";
            print 'Je m\'appelle Florian mais tout le monde m\'appelle "Flo"<br>';
            print "Je m'appelle Florian mais tout le monde m'appelle \"Flo\"<br>";
            print "<br>";
        ?>

       

        <form action="index.php" method="post">
            Chiffre  :  <input type="numer" name="username" pattern="^[0-9]{1}$"/><br />
            <input type="submit" name="submit" value="Envoie!" />
        </form>
        
        <?php
        $val = 0;
        $val = $_POST["username"];
        echo $val;

        ?>
    </body>
</html>