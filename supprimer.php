<!DOCTYPE html>
<html lang="en">
<?php
$id_projet = $_GET['id_delete'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Supprimer le projet</title>
</head>

<body>
    <?php
    $req = $bdd->query("DELETE FROM projet WHERE ID_PROJET='$id_projet'");
    header('location:index.php');
    ?>
</body>

</html>
<?php ?>