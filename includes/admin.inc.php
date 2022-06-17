<?php 
            $requete = "SELECT * FROM utilisateurs;";
            $queryInsert = new Sql();
            $resultat = $queryInsert->select($requete) ;
?>
            <table>
        <tr>
            <th>Nom</th>
            <th>Prenom °F</th>
            <th>Mail</th>
        </tr>

        <?php foreach ($resultat as $key) {?>
            <tr>
                <td> <?=$key['nom'] ?></td>
                <td> <?=$key['prenom']  ?></td>
                <td> <?=$key['mail']  ?></td>
            </tr>
            <?php }?>
