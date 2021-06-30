<?php
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");

if (isset($_POST['valider'])) {
    $date_retour = $_POST['DateProlongation'];
    $identifiantPe = $_POST['IdentifiantPe'];
    $identifiantM = $_POST['IdentifiantM'];
    $categorieM = $_POST['CategorieM'];
    $identifiantE = $_POST['IdentifiantE'];



    $prolongation_validee = ("UPDATE emprunt set DateRetour = '$date_retour', DateProlongation = NULL  WHERE IdentifiantE = '$identifiantE' AND IdentifiantPe = '$identifiantPe' AND IdentifiantM = '$identifiantM'");
    $result_prolongation_validee = mysqli_query($session, $prolongation_validee);


    $objet = "Demande de prolongation validée";
    $message = "Votre demande de prolongation pour l'emprunt de votre " . $categorieM . " a bien été acceptée. La nouvelle date de retour est le '$date_retour'";
    $headers = 'From: Responsable des prêts de matériels' . "\r\n" .
      'Reply-To: Responsable des prêts de matériels' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
    mail("$identifiantPe", $objet, $message, $headers);
  } else if (isset($_POST['refuser'])) {
    $identifiantPe = $_POST['IdentifiantPe'];
    $identifiantM = $_POST['IdentifiantM'];
    $categorieM = $_POST['CategorieM'];

    $prolongation_refusee = ("UPDATE emprunt set DateProlongation = NULL WHERE IdentifiantPe = '$identifiantPe' AND IdentifiantM = '$identifiantM'");
    $result_prolongation_refusee = mysqli_query($session, $prolongation_refusee);

    $objet = "Demande de prolongation refusée";
    $message = "Votre demande de prolongation pour l'emprunt de votre " . $categorieM . " a été refusée.";
    $headers = 'From: Responsable des prêts de matériels' . "\r\n" .
      'Reply-To: Responsable des prêts de matériels' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
    mail("$identifiantPe", $objet, $message, $headers);
  }

header('Location: suivi_prets.php');
?>