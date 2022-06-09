<?php 
if(isset($_POST["frmInscription"]))
{
    //echo "Je viens du formulaire";
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $mail = htmlentities($_POST['mail']);

    $erreurs = array();


    if(mb_strlen($nom) === 0)
    array_push($erreurs, "Il manque votre nom");

    if(mb_strlen($prenom) === 0)
    array_push($erreurs, "Il manque votre prenom");



    if(mb_strlen($mail) === 0 )
    {
        array_push($erreurs, "Il manque votre e-mail");
    }
    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        # code...
        array_push($erreurs, "e-mail invalide");
    }
 

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
        include './includes/frmInscription.php';
    }
    else{
        $serverName = "localhost";
        $userName = "root";
        $userPassword = "your_password";
        $database = "filrouge";

        try {
            //code...
            $connexion = new PDO("mysql:host$serverName;dbname:$database,$userName,$userPassword");
            dump($connexion);

        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage() );
        }
    }

}
else{
    //echo "Je ne viens pas du formulaire";
    $nom = $prenom = $mail = "";
    include './includes/frmInscription.php';
}
?>
