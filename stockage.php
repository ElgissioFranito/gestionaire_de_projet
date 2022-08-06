<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Réussi !!!</title>
</head>

<body>
    <?php
    include("./connexion.php");

    $req = $bdd->prepare('INSERT INTO projet (NOM_PROJET,CHEF_DE_PROJET,OBJECTIF_DU_PROJET,DATE_DE_COMMENCEMENT,
DATE_DE_FIN,STATUS) VALUES (:NOM_PROJET,:CHEF_DE_PROJET,:OBJECTIF_DU_PROJET,:DATE_DE_COMMENCEMENT,
:DATE_DE_FIN,:STATUS)');
    $req->execute(array(
        'NOM_PROJET' => $_POST['NOM_PROJET'],
        'CHEF_DE_PROJET' => $_POST['CHEF_DE_PROJET'],
        'OBJECTIF_DU_PROJET' => $_POST['OBJECTIF_DU_PROJET'],
        'DATE_DE_COMMENCEMENT' => $_POST['DATE_DE_COMMENCEMENT'],
        'DATE_DE_FIN' => $_POST['DATE_DE_FIN'],
        'STATUS' => $_POST['STATUS']
    ));

    header('location:index.php')
    ?>
</body>

</html>