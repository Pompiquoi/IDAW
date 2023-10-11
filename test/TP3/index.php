<!DOCTYPE html>
<html>
  <head>
      <title>Mon premier site pro</title>
      <meta charset = "utf-8">
      <link rel="stylesheet" href= <?php
        if(isset($_GET['css'])){
            echo $_GET['css'] . ".css";
        } elseif(isset($_COOKIE['Style'])){
            echo $_COOKIE['Style'] . ".css";
        }
        else{
            echo "style1.css";
        }
        ?> 
        >
  </head>

  <body>
    <?php
        if(isset($_GET['css'])){
            setcookie(
                "Style",
                $value = $_GET['css'],
                $expires_or_options = 0,
                $path = "/");
        }        
    ?>


    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2" <?php
        if(isset($_GET['css'])){
            if($_GET['css'] == 'style2'){
                echo "selected= \"selected\"" . $_COOKIE['Style'];
            }
        }
        ?>
        >style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>

    <?php
        require_once('login.php');
    ?>
  </body>


