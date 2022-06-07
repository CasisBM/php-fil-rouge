<?php
include './functions/loadFunction.php'; 
require_once './includes/nav.php';
/* include './functions/dump.php';
include './functions/inclusionIncFile.php'; */
?>
<main>

    <?php
    loadFunction();
/*     if (isset($_GET['page']))
        $page = $_GET['page'];

    else
        $page = "N'existe pas";

    echo $page; */

/*     $page = isset($_GET['page']) ? $_GET['page'] : "accueil";
    $fichier = './includes/'.$page.'.php';
    require $fichier; */
/*     $files = glob('./includes/*.inc.php');
    $page = isset($_GET['page']) ? $_GET['page'] : "accueil";
    $fichier = './includes/'.$page.'.php';

    dump(glob('./includes/*.inc.php'));
    if (in_array($page,$files)) {
        # code...
        require $page;
    }
    else
    require './includes/accueil.inc.php' */

    inclusionIncFile('accueil');


    ?>
</main>