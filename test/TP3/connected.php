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
    // on simule une base de données
    $users = array(
        // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi',
        'gery' => 'lebg',
        'evan' => 'syndrome');

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    session_start();
    


    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    } 
    $errorText = "Merci d'utiliser le formulaire de login";
    if(!$successfullyLogged) {
        echo $errorText;
    } elseif(isset($_SESSION['login'])){
        $login = $_SESSION['login'];
        echo "<h1>Bienvenue ". $login ."</h1>";
        echo "<a href = \"balade.php\">se balader </a>";
    
    }

    else{
        echo "<h1>Bienvenue ". $login ."</h1>";
        echo "<a href = \"balade.php\">se balader </a>";
        $_SESSION['login'] = $login;
    }
        
        
    
    print($successfullyLogged);

    $_POST['sucessLog'] = $successfullyLogged;
    print($_POST['sucessLog']);
?>
    <a href="index.php">
        Se déconnecter
    </a>
</body>
</html>