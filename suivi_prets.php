<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');

?>
<!DOCTYPE html>
<html>

<head>
  <title>Delegue</title>
  <meta charset="utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="menu.css" />
  <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
  <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">

</head>

<body>
  <main>

    <?php
    $identifiant = $_SESSION['identifiant'];
    $role_pe = "SELECT * FROM personne WHERE IdentifiantPe = '$identifiant'";
    $resultat = mysqli_query($session, $role_pe);
    foreach ($resultat as $row) {
      $role_user = $row["RolePe"];
    }
    ?>

    <main>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
          <img src="Bandeau.png" href="https://www.ut-capitole.fr/" />
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
          </button>
          <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: auto">

              <?php
              if ($role_user == "Responsable") {
              ?>
                <li class="nav-item  text-center">
                  <a class="nav-link" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> Liste des rendez-vous</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link " aria-current="page" href="reservation_portable"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes réservations</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link active" href="suivi_prets.php"><i class=" fi-rr-info"></i> Suivi des prêts</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link" href="Statistiques.html"><i class=" fi-rr-stats"></i> Statistiques</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
                </li>
              <?php
              } else if ($role_user == "Vacataire") {
              ?>
                <li class="nav-item  text-center">
                  <a class="nav-link" href="entretien.php"><i class=" fi-rr-interrogation"></i> Entretien machine</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes réservations</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link  active" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
                </li>
              <?php
              } else if ($role_user == "Emprunteur") {
              ?>
                <li class="nav-item  text-center">
                  <a class="nav-link " aria-current="page" href="#"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link" href="#"><i class="fi-rr-file-check"></i> Mes réservations</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link  active" href="#"><i class=" fi-rr-user"></i> Profil</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link" href="#"><i class=" fi-rr-interrogation"></i> FAQ</a>
                </li>
                <li class="nav-item  text-center">
                  <a class="nav-link " href="#"><i class=" fi-rr-settings"></i> Réglages</a>
                </li>
              <?php
              }
              ?>
            </ul>
            <span class="navbar-text">
              <div class="mycharts-heading">
                <div class="element-head">
                  <?php echo $_SESSION['nom']; ?>
                  <a href="deconnexion.php" type="button" class="btn btn-default"><i class="fi-rr-sign-out"></i></a>
                </div>
              </div>
            </span>
          </div>
        </div>
      </nav>

      <?php
      $nb_demande_prolongation = ("SELECT * FROM emprunt WHERE DateProlongation <> ''");
      $result_nb_demande_prolongation = mysqli_query($session, $nb_demande_prolongation);

      if (mysqli_num_rows($result_nb_demande_prolongation) > 0) {

        $emprunt = ("SELECT *
                    FROM emprunt, personne, materiel
                    WHERE emprunt.IdentifiantPe = personne.IdentifiantPe
                    AND emprunt.IdentifiantM = materiel.IdentifiantM
                    AND emprunt.DateProlongation <> ''
                    ORDER BY emprunt.DateEmprunt ASC");

        $result_emprunt = mysqli_query($session, $emprunt);
      ?>
        <h1>Demandes de prolongation :</h1>
        <table class="table table-striped table-hover">
          <tr>
            <th>
              Identifiant emprunteur
            </th>
            <th>
              Numéro du matériel
            </th>
            <th>
              Type de matériel
            </th>
            <th>
              Date de retour actuelle
            </th>
            <th>
              Date de prolongation demandée
            </th>
            <th>
            </th>
          </tr>

          <form action="" method="POST">
            <?php

            foreach ($result_emprunt as $row) {

            ?>
              <tr>

                <td>
                  <input type="text" class="form-control-plaintext" name="IdentifiantPe" value="<?php echo $row['IdentifiantPe'] ?>" readonly>
                </td>
                <td>
                  <input type="text" class="form-control-plaintext" name="IdentifiantM" value="<?php echo $row['IdentifiantM'] ?>" readonly>
                </td>
                <td>
                  <input type="text" class="form-control-plaintext" name="CategorieM" value="<?php echo $row['CategorieM'] ?>" readonly>
                </td>
                <td>
                  <input type="text" class="form-control-plaintext" name="DateRetour" value="<?php echo $row['DateRetour'] ?>" readonly>
                </td>
                <td>
                  <input type="text" class="form-control-plaintext" name="DateProlongation" value="<?php echo $row['DateProlongation'] ?>" readonly>
                </td>
                <td>
                  <input type="submit" class="btn btn-primary" name="valider" value="Valider">
                  <input type="submit" class="btn btn-secondary" name="refuser" value="Refuser">
                </td>


          </form>

          </tr>
        </table>
    <?php
            }
          }

          if (isset($_POST['valider'])) {
            $date_retour = $_POST['DateProlongation'];
            $identifiantPe = $_POST['IdentifiantPe'];
            $identifiantM = $_POST['IdentifiantM'];
            $categorieM = $_POST['CategorieM'];


            $prolongation_validee = ("UPDATE emprunt set DateRetour = '$date_retour', DateProlongation = NULL  WHERE IdentifiantPe = '$identifiantPe' AND IdentifiantM = '$identifiantM'");
            $result_prolongation_validee = mysqli_query($session, $prolongation_validee);


            $objet = "Demande de prolongation validée";
            $message = "Votre demande de prolongation pour l'emprunt de votre '$categorieM' a bien été acceptée. La nouvelle date de retour est le '$date_retour'";
            $headers = 'From: Responsable des prêts de matériels' . "\r\n" .
              'Reply-To: Responsable des prêts de matériels' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
            mail($identifiantPe, $objet, $message, $headers);
          } else if (isset($_POST['refuser'])) {
            $identifiantPe = $_POST['IdentifiantPe'];
            $identifiantM = $_POST['IdentifiantM'];

            $prolongation_refusee = ("UPDATE emprunt set DateProlongation = NULL WHERE IdentifiantPe = '$identifiantPe' AND IdentifiantM = '$identifiantM'");
            $result_prolongation_refusee = mysqli_query($session, $prolongation_refusee);

            $objet = "Demande de prolongation refusée";
            $message = "Votre demande de prolongation pour l'emprunt de votre '$categorieM' a été refusée.";
            $headers = 'From: Responsable des prêts de matériels' . "\r\n" .
              'Reply-To: Responsable des prêts de matériels' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
            mail($identifiantPe, $objet, $message, $headers);
          }
    ?>



    <div class="contenu">
      <h1>Suivi des prêts</h1>
      <Table class="table table-striped table-hover">
        <TR>
          <TH>
            Prénom
          </TH>
          <TH>
            Nom
          </TH>
          <TH>
            Numéro du materiel
          </TH>
          <TH>
            Type de materiel
          </TH>
          <TH>
            Email
          </TH>
          <TH>
            Date de reservation
          </TH>
          <TH>
            Date de retour prévue
          </TH>
          <th></th>
        </TR>

        <?php

        $emprunt = ("SELECT *
                              FROM emprunt, personne, materiel
                              WHERE emprunt.IdentifiantPe = personne.IdentifiantPe
                              AND emprunt.IdentifiantM = materiel.IdentifiantM
                              AND emprunt.EtatE LIKE 'Non rendu'
                              GROUP BY materiel.IdentifiantM
                              ORDER BY emprunt.DateEmprunt ASC");



        $result_emprunt = mysqli_query($session, $emprunt);
        ?>
        <form action="rendu.php" method="POST">

          <?php
          foreach ($result_emprunt as $row) {
          ?>

            <TR>
              <input type="hidden" class="form-control-plaintext" value="<?php echo $row['IdentifiantPe'] ?>" name="IdentifiantPe">
              <TD>
                <input type="text" class="form-control-plaintext" value="<?php echo $row['PrenomPe'] ?>" name="PrenomPe" readonly>
              </TD>
              <TD>
                <input type="text" class="form-control-plaintext" value="<?php echo $row['NomPe'] ?>" name="NomPe" readonly>
              </TD>
              <TD>
                <input type="text" class="form-control-plaintext" value="<?php echo $row['IdentifiantM'] ?>" name="IdentifiantM" readonly>
              </TD>
              <TD>
                <input type="text" class="form-control-plaintext" value="<?php echo $row['CategorieM'] ?>" name="CategorieM" readonly>
              </TD>
              <TD>
                <input type="text" class="form-control-plaintext" value="<?php echo $row['EmailPe'] ?>" name="EmailPe" readonly>
              </TD>
              <TD>
                <input type="text" class="form-control-plaintext" value="<?php echo $row['DateEmprunt'] ?>" name="DateEmprunt" readonly>
              </TD>
              <TD>
                <input type="text" class="form-control-plaintext" value="<?php echo $row['DateRetour'] ?>" name="DateRetour" readonly>
              </TD>
              <td>
                <input type="submit" class="btn btn-primary" value="Matériel récupéré" name="recupere">
              </td>
            </TR>

          <?php

            $semaine_prochaine = strftime("%Y-%m-%d", strtotime("+1 week"));
            $semaine_en_cours = strftime("%Y-%m-%d", strtotime("+1 day"));

            $date_retour = $row['DateRetour'];


            $identifiantM = $row['IdentifiantM'];
            $identifiantPe = $row['IdentifiantPe'];


            $mail_rappel = ("SELECT COUNT(*) AS nb_lignes FROM emprunt WHERE IdentifiantM = '$identifiantM' AND IdentifiantPe = '$identifiantPe' AND mail_rappel NOT LIKE 'effectue'");
            $result_mail_rappel = mysqli_query($session, $mail_rappel);
            foreach ($result_mail_rappel as $nb) {
              $nb_lignes = $nb['nb_lignes'];
            }

            $mail_retour_depasse = ("SELECT COUNT(*) AS nb_lignes FROM emprunt WHERE IdentifiantM = '$identifiantM' AND IdentifiantPe = '$identifiantPe' AND mail_retour_depasse NOT LIKE 'effectue'");
            $result_mail_retour_depasse = mysqli_query($session, $mail_retour_depasse);
            foreach ($result_mail_retour_depasse as $nb) {
              $nb_lignes_depasse = $nb['nb_lignes'];
            }

            //echo $date_retour;
            if ($date_retour == $semaine_prochaine) {
              if ($nb_lignes > 0) {
                $destinataire = $row["IdentifiantPe"];
                $objet = "Remise du matériel";
                $message = "Veuillez rendre le matériel emprunté";
                $headers = 'From: Responsable des prêts de matériels' . "\r\n" .
                  'Reply-To: Responsable des prêts de matériels' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
                mail("$destinataire", $objet, $message, $headers);
                $update_mail_rappel = ("UPDATE emprunt SET mail_rappel = 'effectue' WHERE IdentifiantM = '$identifiantM' AND IdentifiantPe = '$identifiantPe'");
                $result_update_mail_rappel = mysqli_query($session, $update_mail_rappel);
              }
            }

            if ($date_retour < $semaine_en_cours) {
              if ($nb_lignes_depasse > 0) {
                $destinataire = $row['IdentifiantPe'];
                $objet = "Date de retour dépassée";
                $message = "Veuillez rendre le matériel emprunté";
                $headers = 'From: Responsable des prêts de matériels' . "\r\n" .
                  'Reply-To: Responsable des prêts de matériels' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
                mail($destinataire, $objet, $message, $headers);
                $update_mail_retour_depasse = ("UPDATE emprunt SET mail_rappel = 'effectue' WHERE IdentifiantM = '$identifiantM' AND IdentifiantPe = '$identifiantPe'");
                $result_update_mail_retour_depasse = mysqli_query($session, $update_mail_retour_depasse);
              }
            }
          }

          //echo strftime("%Y-%m-%d");
          //echo strftime("%Y-%m-%d", strtotime("+1 week"));

          //echo $semaine_prochaine;



          ?>
        </form>

      </Table>

      fonction pour prevenir par mail 1 semaine avant la date de retour prévue + fonction pour rappel une fois la date depassée (essayer d'automatiser)
    </div>
    </main>

</body>

</html>