<?php
require("Connexion_BD.php");

if (isset($_POST['RDV_termine'])) {
    $ide = $_POST['ide'];
    $idm = $_POST['idm'];
    $idc = $_POST['idc'];

    $update_RDV = ("UPDATE emprunt SET Statut_RDV = 'terminé' WHERE IdentifiantM = '$idm' AND IdentifiantPe = '$ide'");
    $result_update_RDV = mysqli_query($session, $update_RDV);
    $update_cal = ("UPDATE calendrier SET EtatCal = 'Disponible' WHERE IdentifiantCal = '$idc'");
    $result_update_cal = mysqli_query($session, $update_cal);
}

header("location: liste_RDV.php");
