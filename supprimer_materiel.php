<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");

$numero = '';
if (isset($_POST['supprimer'])) {
  $numero = $_POST['numero'];

  $supprimer = "UPDATE materiel SET StatutM = 'Supprimé' WHERE IdentifiantM = ?";
  if ($stmt = mysqli_prepare($session, $supprimer)) {
    mysqli_stmt_bind_param($stmt, 's', $numero);
    mysqli_stmt_execute($stmt);
  }
}

header('Location: entretien.php');
