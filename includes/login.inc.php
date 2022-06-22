<?php
if (isset($_POST["frmLogin"])) {
    //echo "Je viens du formulaire";
    $mail = htmlentities($_POST['mail']);
    $password = htmlentities($_POST['password']);

    $erreurs = array();

    if (mb_strlen($mail) === 0) {
        array_push($erreurs, "Il manque votre e-mail");
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        # code...
        array_push($erreurs, "e-mail invalide");
    }

    if (mb_strlen($password) === 0)
        array_push($erreurs, "Il manque votre mot de passe");

    if (count($erreurs)) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            # code...
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmLogin.php';
    } else {
        $user = new Utilisateur($mail,$password);
        if($user->connecterUtilisateur()){


            $url = $_SERVER['HTTP_ORIGIN'] . dirname($_SERVER['REQUEST_URI']) . "/";
            echo redirection($url, 2000);
            echo "<p><a href=\"$url\">Revenir à la page d'accueil</a></p>";
        }
        else
        {
            echo "Mail ou mot de passe invalide";
            include './includes/frmLogin.php';
        }
    }
} else {
    //echo "Je ne viens pas du formulaire";
    $mail = "";
    include './includes/frmLogin.php';
}
