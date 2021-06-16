<?php
require("Connexion_BD.php");

if (isset($_POST['recupere'])) {
    $identifiantM = $_POST['IdentifiantM'];
    $identifiantPe = $_POST['IdentifiantPe'];

    echo $identifiantM;
    echo $identifiantPe;

    $rendu = ("UPDATE emprunt SET EtatE = 'Rendu' WHERE IdentifiantPe = '$identifiantPe' AND IdentifiantM = '$identifiantM'");
    $result_rendu = mysqli_query($session, $rendu);
}

header("location: suivi_prets.php");
?>