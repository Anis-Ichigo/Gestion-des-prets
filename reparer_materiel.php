<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");


if (isset($_POST['raz'])) {
  $newetat = "Dispo";
  $identifiantM = $_POST['numero'];
  $reparer = "UPDATE materiel SET EtatM = '$newetat' WHERE IdentifiantM = '$identifiantM'";
  $result = mysqli_query($session, $reparer);
  header('Location: RAZ.php');
}

if (isset($_POST['reparation'])) {
  $resolution = "Problème résolu";
  $identifiantM = $_POST['numero'];
  $date_reparation = strftime('%Y-%m-%d');
  $reparer = "UPDATE probleme SET Resolution = '$resolution', DateResolution = '$date_reparation' WHERE IdentifiantM = '$identifiantM'";
  $result = mysqli_query($session, $reparer);
  header('Location: SAV.php');
}

if (isset($_POST['transferer'])) {
  $identifiantM = $_POST['numero'];
  $transferer = "UPDATE materiel SET EtatM = 'DSI' WHERE IdentifiantM = '$identifiantM'";
  $result = mysqli_query($session, $transferer);
  header('Location: SAV.php');

  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $description = $_POST['probleme'];


  $destinataire = $_POST["IdentifiantPe"];
  $objet = "Remise du matériel pour panne";
  $message = "Veuillez prendre un RDV pour effectuer un nouvel emprunt et pour ramener le matériel deffectueux";
  $headers = 'From: vacataire' . "\r\n" .
    'Reply-To: vacataire' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  mail("$destinataire", $objet, $message, $headers);


  $destinataire = "responsable@ut-capitole.fr";
  $objet = "Remise du matériel pour panne";
  $message = "Le matériel '$identifiantM', emprunté par '$prenom' ' ' '$nom' doit être envoyé à la DSI pour réparation. Le problème est le suivant : '$description'";
  $headers = 'From: vacataire' . "\r\n" .
    'Reply-To: vacataire' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  mail("$destinataire", $objet, $message, $headers);
}
