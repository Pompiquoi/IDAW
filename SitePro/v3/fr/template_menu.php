<?php
    function renderMenuToHTML($currentPageId) {
        $mymenu = array(
        'accueil' => 'Accueil',
        'cv' => 'Cv',
        'hobbies' => 'Hobbies',
        'infotech' => 'Les infos techniques'
        );
        
        echo "
        <nav>   
            <div class=\"nav-wrapper\">
                <ul id=\"nav-mobile\" class=\"brand-logo right\">
                    <div class = \"boite\">
                        <a href=\"../en/index.php?page=" . $currentPageId ."\">
                            <img src=\"Image/anglais.png\" width=50px height=50px alt=\"image de moi\">
                        </a>
                    </div>
                </ul>
        ";
        echo "<ul id=\"nav-mobile\" class=\"left\">";
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId == $pageId){
                echo "<li class=\"active\"><a href=\"index.php?page=" . $pageId."\">" . $pageParameters."</a>";
            }
            else{
                echo "<li><a href=\"index.php?page=" . $pageId . "\">" . $pageParameters . "</a>";
            }
        }
        echo "</ul>
        </div>
    </nav>";
    }
?>
        





    
  