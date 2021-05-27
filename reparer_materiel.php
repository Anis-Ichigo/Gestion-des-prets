<?php
session_start();

require('Connexion_BD.php');

$numero = '';
if(isset($_POST['reparer'])){
  $numero = $_POST['numero'];
}
$newetat = "Dispo";
$reparer = "UPDATE materil SET EtatM = $newetat WHERE IdentifiantM = '?'";
if($stmt = mysqli_prepare($session, $reparer)){
  mysqli_stmt_bind_param($stmt, 'i', $numero);
  mysqli_stmt_execute($stmt);
}

header('Location: RAZ.php');
 ?>
