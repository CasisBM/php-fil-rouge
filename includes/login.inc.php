<?php 
if(isset($_POST["frmLogin"]))
{
    //echo "Je viens du formulaire";
    $mail = htmlentities($_POST['mail']);
    $password = htmlentities($_POST['password']);

    $erreurs = array();

    if(mb_strlen($mail) === 0 )
    {
        array_push($erreurs, "Il manque votre e-mail");
    }
    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        # code...
        array_push($erreurs, "e-mail invalide");
    }

    if(mb_strlen($password) === 0)
    array_push($erreurs, "Il manque votre mot de passe");

    if(count($erreurs))
    {
        $messageErreur = "<ul>";
        for ($i=0; $i < count($erreurs); $i++) { 
            # code...
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmLogin.php';
    }
    else
    {
        $toEmail = 'to@to.to';
        $fromEmail = 'from@from.from';
        $sujetEmail = 'Login Success';
        $messageEmail = 'Vous êtes bien connecté';

        sendMail($toEmail,$fromEmail,$sujetEmail,$messageEmail);

        //$mail = new Mail($toEmail,$fromEmail,$sujetEmail,$messageEmail);
        $_SESSION['loginUser'] = $mail;
        header('Location: index.php?page=accueil');
    }

}
else{
    //echo "Je ne viens pas du formulaire";
    $mail = "";
    include './includes/frmLogin.php';
}
?>