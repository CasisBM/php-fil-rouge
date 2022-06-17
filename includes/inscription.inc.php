<?php 
if(isset($_POST["frmInscription"]))
{
    //echo "Je viens du formulaire";
    $nom = htmlentities(trim($_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom']));
    $mail = htmlentities(trim($_POST['mail']));
    $password = htmlentities(trim($_POST['password']));
    $confirmPassword = htmlentities(trim($_POST['confirmPassword']));

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

    if(mb_strlen($password) === 0)
    {
        array_push($erreurs, "Il manque votre mot de passe");
    }
    elseif (mb_strlen($password) === 0 || $confirmPassword !== $password) 
    {
        # code...
        array_push($erreurs, "Vos mots de passes ne sont pas identique");
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

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $requete = "INSERT INTO utilisateurs (id_utilisateur,nom,prenom,mail,password) VALUES (NULL,'$nom','$prenom','$mail','$passwordHash' );";

            $queryInsert = new Sql();
            $queryInsert->inserer($requete);

    }

}
else{
    //echo "Je ne viens pas du formulaire";
    $nom = $prenom = $mail = "";
    include './includes/frmInscription.php';
}
?>
