<?php
$requete = "SELECT * FROM utilisateurs;";
$queryInsert = new Sql();
$resultat = $queryInsert->showTable($requete);
?>
<table>
    <tr>
        <th>Nom</th>
        <th>Prenom °F</th>
        <th>Mail</th>
    </tr>

    <?php foreach ($resultat as $key) { ?>
        <tr>
            <input type="hidden" value="<?= $key['id_utilisateur'] ?>">
            <td> <input type="text" value="<?= $key['nom'] ?>" name="nom" disabled></td>
            <td> <input type="text" value="<?= $key['prenom'] ?>" name="prenom" disabled></td>
            <td> <input type="text" value="<?= $key['mail'] ?>" name="mail" disabled></td>
            <td> <input type="button" value="Modifier" name="Modifier" onclick="update(<?= $key['id_utilisateur'] ?>)"></td>
            <td> <input type="button" value="Supprimer" onclick="'index.php?page=update'"></td>
        </tr>


    <?php }
    ?>