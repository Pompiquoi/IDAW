<head>
    <title>Mon premier site pro</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
  require_once('template_header.php');
?>

<?php
  require_once('template_menu.php');
?>

    <p>La la ya tout le texte</p>
    <div class="grande-boite">
        <div class="boite">
            <img src="Image/pates.jpg" frameborder="0" height="500px"></img>
        </div>
    </div>
    
    <p> et là y en a plus</p>

  <?php
    require_once('template_footer.php');
  ?>
        
</body>