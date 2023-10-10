<!DOCTYPE html>
<html>
<head>
    <title>Mon premier site pro | index</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
  require_once('template_header.php');
?>

<?php
  require_once('template_menu.php');
  renderMenuToHTML('index');
?>

    <p>La la ya tout le texte &#128004</p>

    <div class="grande-boite-lig">
        <!-- <div class="boite">-->
          <img class= "contenu-image" src="Image/contenue.png" alt="c'est du contenue">
        <!-- /div-->
        <div class="grande-boite-col">
            <div class="boite">
                <p>Titre de l'image</p>
            </div>
            <div class="boite">
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
        </div>
        
    </div>
    
    <p> et là y en a plus </p>

  <?php
  require_once('template_footer.php');
  ?>
        
</body>
</html>