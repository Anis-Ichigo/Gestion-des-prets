<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");


if (isset($_POST['reparation'])) {
  $resolution = "Problème résolu";
  $identifiantM = $_POST['numero'];
  $date_reparation = strftime('%Y-%m-%d');
  $reparer = "UPDATE probleme SET Resolution = '$resolution', DateResolution = '$date_reparation' WHERE IdentifiantM = '$identifiantM'";
  $result = mysqli_query($session, $reparer);
}

if (isset($_POST['raz'])) {
  $newetat = "Dispo";
  $identifiantM = $_POST['numero'];
  $reparer = "UPDATE materiel SET EtatM = '$newetat' WHERE IdentifiantM = '$identifiantM'";
  $result = mysqli_query($session, $reparer);
}
header('Location: RAZ.php');
?>
