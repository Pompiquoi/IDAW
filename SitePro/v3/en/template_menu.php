<?php
    function renderMenuToHTML($currentPageId) {
        $mymenu = array(
        'accueil' => 'Home',
        'cv' => 'Cv',
        'hobbies' => 'Hobbies',
        'infotech' => 'Technical info'
        );
        echo "
        <nav>   
            <div class=\"nav-wrapper\">
                <ul id=\"nav-mobile\" class=\"brand-logo right\">
                    <a href=\"../fr/index.php\">
                        <img src=\"Image/francais.png\" width=60px height=60px alt=\"image de moi\">
                    </a>
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
        





    
  