<!DOCTYPE html>
<html>
<head>
      <title>Mon premier site pro</title>
      <meta charset = "utf-8">
      <link rel="stylesheet" href= <?php
        if(isset($_COOKIE['Style'])){
            echo $_COOKIE['Style'] . ".css";
        } else{
            echo "style1.css";
        }
        ?> 
        >
  </head>
  <body>
    
  
    <?php
    session_start();
        if(isset($_SESSION['login'])){
            echo "<p> Ici la balade de" . $_SESSION['login'] . "</p>";
        }
        else{
            echo "<p> Vous etes déconnecté </p>";
            echo "<a href=\"index.php\">
                    Se connecter
                    </a>";
        }
    ?>
    </body>
</html>