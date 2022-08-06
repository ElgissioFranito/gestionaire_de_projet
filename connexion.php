<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_de_projet', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('erreur:' . $e->getMessage());
}
