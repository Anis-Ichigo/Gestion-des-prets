<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");

$idE = $_POST['IdentifiantEPR'];
$idM = $_POST['IdentifiantMPR'];
$date_prolongation = $_POST['DateProlongation'];

if (isset($_POST['valider_prolongation'])){
    $query_valider_prolongation = "UPDATE emprunt SET DateRetour = '$date_prolongation' WHERE IdentifiantE = '$idE'";
    $result_valider_prolongation = mysqli_query($session, $query_valider_prolongation);
    $query_etat = "UPDATE materiel SET EtatM = 'Non Dispo' WHERE IdentifiantM = '$idM'";
    $result_etat = mysqli_query($session, $query_etat);
}

if (isset($_POST['refuser_prolongation'])){
    $query_refuser_prolongation = "UPDATE emprunt SET DateProlongation = NULL WHERE IdentifiantE = '$idE'";
    $result_refuser_prolongation = mysqli_query($session, $result_refuser_prolongation);
    $query_etat = "UPDATE materiel SET EtatM = 'Non Dispo' WHERE IdentifiantM = '$idM'";
    $result_etat = mysqli_query($session, $query_etat);
}

header('Location: Liste_RDV.php');
?>