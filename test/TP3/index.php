<!DOCTYPE html>
<html>
  <head>
      <title>Mon premier site pro</title>
      <meta charset = "utf-8">
      <link rel="stylesheet" href= <?php echo $_COOKIE["Style"] . ".css"?> >
  </head>

  <body>
    <?php
        if(!isset($_COOKIE['Style'])){
            setcookie(
                "Style",
                "style1",
                $path = "/");
        }
        else{
            setcookie(
                "Style",
                $value = $_GET['css'],
                $path = "/");
        }
        
    ?>


    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>

    <?php
        require_once('login.php');
    ?>
  </body>


