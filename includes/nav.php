<?php 
!isset($_SESSION['loginUser']) ?: var_dump($_SESSION);
?>
<header>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li
                <?php echo isset($_SESSION['loginUser']) ? "hidden" : "";?>
            ><a href="index.php?page=inscription">Inscription</a></li>
            <li 
            <?php echo isset($_SESSION['loginUser']) ? "hidden" : ""; ?> 
            ><a href="index.php?page=login">Login</a></li>
            <li 
            <?php echo !isset($_SESSION['loginUser']) ? "hidden" : "" ?>
            ><a href="index.php?page=logout"  >Logout</a></li>
        </ul>
    </nav>
</header>