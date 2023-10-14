<!DOCTYPE html>
<html>
  <head>
      <title>Mon premier site pro</title>
      <meta charset = "utf-8">
      <link rel="stylesheet" href="materialize/css/materialize.css">
      <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <?php
      require_once("template_header.php");
      require_once("template_menu.php");
      $currentPageId = 'accueil';
      $currentLang = 'fr';

      if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
      }

    ?>

    <?php
      renderMenuToHTML($currentPageId);
    ?>

    <section class="corps">
      <?php
        $pageToInclude = "../" . $currentLang . "/" . $currentPageId . ".php";
        if(is_readable($pageToInclude))
          require_once($pageToInclude);
        else
          require_once("error.php");
      ?>
    </section>

    <?php
      require_once('template_footer.php');
    ?>
          
  </body>
</html>