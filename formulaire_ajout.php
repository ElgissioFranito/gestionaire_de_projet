<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un formulaire</title>
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
            <h2> Veuillez completer cet formulaire : </h2>
        </div>
        <div class="bloc">
            <form method="POST" action="./stockage.php">

                <h3 class="legende"> Entrer le nom du projet:</h3>
                <input type="text" class="cadre" type="text" name="NOM_PROJET">
                <h3 class="legende"> Responsable du projet:</h3>
                <input type="text" class="cadre" type="text" name="CHEF_DE_PROJET">
                <h3 class="legende"> L'objectif du projet:</h3>
                <input type="text" class="cadre" type="text" name="OBJECTIF_DU_PROJET">
                <h3 class="legende"> Date de commencement:</h3>
                <input type="text" class="cadre" type="date" name="DATE_DE_COMMENCEMENT">
                <h3 class="legende"> Date de la finition:</h3>
                <input type="text" class="cadre" type="date" name="DATE_DE_FIN">
                <h3 class="legende"> Le projet:</h3>
                <select class="option" name="STATUS">
                    <option value="en_attente"> n'a pas encore commencé</option>
                    <option value="fini">est terminé</option>
                    <option selected="selected" value="en_cours">est en cours</option>
                </select>
                <br>
                <button class="btn-ajout" type="subbmit"> ajouter </button>
            </form>
        </div>
    </div>
</body>

</html>