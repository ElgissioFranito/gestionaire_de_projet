<!DOCTYPE html>
<html lang="en">
<?php
include("./connexion.php");
$id_projet = $_GET["id_update_projet"];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Réussi !!!</title>
</head>

<body>
    <?php
    $req = $bdd->prepare("UPDATE projet SET 
    NOM_PROJET=:NOM_PROJET,
    CHEF_DE_PROJET=:CHEF_DE_PROJET,
    OBJECTIF_DU_PROJET=:OBJECTIF_DU_PROJET,
    DATE_DE_COMMENCEMENT=:DATE_DE_COMMENCEMENT,
    DATE_DE_FIN=:DATE_DE_FIN,
    STATUS=:STATUS WHERE ID_PROJET='$id_projet'");

    $req->execute(array(
        'NOM_PROJET' => $_POST['NOM_PROJET'],
        'CHEF_DE_PROJET' => $_POST['CHEF_DE_PROJET'],
        'OBJECTIF_DU_PROJET' => $_POST['OBJECTIF_DU_PROJET'],
        'DATE_DE_COMMENCEMENT' => $_POST['DATE_DE_COMMENCEMENT'],
        'DATE_DE_FIN' => $_POST['DATE_DE_FIN'],
        'STATUS' => $_POST['STATUS']
    ));
    header('location:index.php');
    ?>

</body>

</html>