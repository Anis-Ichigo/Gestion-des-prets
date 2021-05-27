<?php
session_start();

require('Connexion_BD.php');

$numero = '';
if(isset($_POST['numero'])){
  $numero = $_POST['numero'];
}

$supprimer = "UPDATE materiel SET StatutM = 'Supprimé' WHERE IdentifiantM = '?'";
if($stmt = mysqli_prepare($session, $supprimer)){
  mysqli_stmt_bind_param($stmt,'i', $numero);
  mysqli_stmt_execute($stmt);
}

header('Location: entretien.php');
 ?>
