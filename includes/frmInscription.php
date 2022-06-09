
<h1>Inscription</h1>
<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?= $nom;?>"/>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?= $prenom;?>"/>
    </div>
    <div>
        <label for="mail">E-mail :</label>
        <input type="text" name="mail" id="mail" value="<?= $mail;?>" />
    </div>
    <div>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" />
    </div>
    <div>
        <label for="confirmPassword">Confirmer le mot de passe :</label>
        <input type="password" name="confirmPassword" id="confirmPassword" />
    </div>
    <div>
        <input type="reset" value="Effacer"/>
        <input type="submit" value="Envoyer"/>
    </div>
    <input type="hidden" name="frmInscription"/>
</form>