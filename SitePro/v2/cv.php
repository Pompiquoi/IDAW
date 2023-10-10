<head>
    <title>Mon premier site pro</title>
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
    renderMenuToHTML('cv');
  ?>
    

    <p>La la ya tout le texte</p>
    <div class="grande-boite">
        <div class="boite">
            <iframe src="Image/CV moderne blanc épuré.pdf" frameborder="0" height="800px" width="1000px"></iframe>
        </div>
    </div>
    
    <p> et là y en a plus</p>

  <?php
    require_once('template_footer.php');
  ?>
        
</body>
