
<?php
function inclusionIncFile($default){
    $files = glob('./includes/*.inc.php');
    $page = isset($_GET['page']) ? $_GET['page'] : "accueil";
    echo $page;
    var_dump($files);
    if (in_array($page,$files)) 
        require "./includes/$page.inc.php";
    
    else
    require "./includes/$default.inc.php";

}

    ?>