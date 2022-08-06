<!DOCTYPE html>
<html lang="en">
<?php
include("./connexion.php");
$id_projet = $_GET["id_update_projet"]
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un projet</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="conteneur">
        <header>
            <?php
            include('./entete.php');
            ?>
        </header>

        <div class="titre">
            <h2> Modifier le projet : </h2>
        </div>
        <?php
        $get_projet_info = $bdd->prepare("SELECT * FROM projet WHERE ID_PROJET='id_projet'");
        $get_projet_info->execute();
        $projet_data = $get_projet_info->fetch();
        ?>
        <div class="bloc">
            <form method="POST" action="./modification.php?id_update_projet=<?php echo $id_projet ?>">

                <h3 class="legende"> Modifier le nom du projet:</h3>
                <input type="text" class="cadre" type="text" name="NOM_PROJET" value="<?php echo $projet_data['NOM_PROJET']; ?>">
                <h3 class="legende"> Responsable du projet:</h3>
                <input type="text" class="cadre" type="text" name="CHEF_DE_PROJET" value="<?php echo $projet_data['CHEF_DE_PROJET']; ?>">
                <h3 class="legende"> L'objectif du projet:</h3>
                <input type="text" class="cadre" type="text" name="OBJECTIF_DU_PROJET" value="<?php echo $projet_data['OBJECTIF_DU_PROJET']; ?>">
                <h3 class="legende"> Date de commencement:</h3>
                <input type="text" class="cadre" type="date" name="DATE_DE_COMMENCEMENT" value="<?php echo $projet_data['DATE_DE_COMMENCEMENT']; ?>">
                <h3 class="legende"> Date de la finition:</h3>
                <input type="text" class="cadre" type="date" name="DATE_DE_FIN" value="<?php echo $projet_data['DATE_DE_FIN']; ?>">
                <h3 class="legende"> Le projet:</h3>
                <select class="option" name="STATUS">
                    <option value="en_attente"> n'a pas encore commencé</option>
                    <option value="fini">est terminé</option>
                    <option value="en_cours">est en cours</option>
                    <option selected="selected" value="<?php echo $projet_data['STATUS'] ?>"> <?php echo $projet_data['STATUS'] ?> </option>
                </select> <br>
                <button class="btn-ajout" type="subbmit"> modifier </button>
            </form>
        </div>
        <a href="./index.php"> <button> Annuler </button></a>
    </div>
</body>

</html>