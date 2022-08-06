<!DOCTYPE html>
<html lang="en">
<?php include("./connexion.php") ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage de la liste de projets</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="conteneur">
        <header>
            <?php
            include("./entete.php");
            ?>
        </header>

        <a href="formulaire_ajout.php"> <button> Ajouter un projets </button> </a> <br>

        <table class="tableau">
            <tr class="tete-du-tableau">
                <td> NOM DU PROJET </td>
                <td> RESPONSABLE </td>
                <td> OBJECTIF </td>
                <td> COMMENCER A </td>
                <td> SE TERMINE A </td>
                <td> STATUS </td>
                <td></td>
                <td></td>
            </tr>

            <?php
            $req = $bdd->query('SELECT * FROM projet');
            while ($base = $req->fetch()) {

            ?>
                <tr>
                    <td><?php echo $base['NOM_PROJET']; ?></td>
                    <td><?php echo $base['CHEF_DE_PROJET']; ?></td>
                    <td><?php echo $base['OBJECTIF_DU_PROJET']; ?></td>
                    <td><?php echo $base['DATE_DE_COMMENCEMENT']; ?></td>
                    <td><?php echo $base['DATE_DE_FIN']; ?></td>
                    <td><?php echo $base['STATUS']; ?></td>
                    <td><a href="modifier.php?id_update_projet=<?php echo $base['ID_PROJET'] ?>"> Modifier </a></td>
                    <td><a href="supprimer.php?id_delete=<?php echo $base['ID_PROJET'] ?>"> Supprimer </a></td>

                </tr>
            <?php
            }   // fermeture de while

            $req->closecursor();

            ?>
        </table>
    </div>
</body>

</html>