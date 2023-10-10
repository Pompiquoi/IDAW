<!doctype html>
<html>
    <head>
        <title>Le menu</title>
        <link rel="stylesheet" 
        href="style.css"
        href="materialize/css/materialize.css"
        type="text/css"
        media="screen" title="default" charset="utf-8" />
    </head>
    
    <body>
    <nav>   
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="brand-logo right">
                <a href="index.php">
                    <img src="Image/personne.jfif" width=60px height=60px alt="image de moi">
                </a>
            </ul>
        <?php
            function renderMenuToHTML($currentPageId) {
                $mymenu = array(
                'index' => 'Accueil',
                'cv' => 'Cv',
                'hobbies' => 'Hobbies',
                'projets' => 'Mes Projets'
                );
                echo "<ul id=\"nav-mobile\" class=\"left hide-on-med-and-down\">";
                foreach($mymenu as $pageId => $pageParameters) {
                    if($currentPageId == $pageId){
                    echo "<li><a class=\"active\" href=\"${pageId}.php\">${pageParameters}</a>";
                    }
                    else{
                    echo "<li><a href=\"${pageId}.php\">${pageParameters}</a>";
                    }
                }
            }
            ?>
        </div>
    </nav>
</body>

</html>



    
  