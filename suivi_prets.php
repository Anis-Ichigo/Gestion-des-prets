<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');


?>
<!DOCTYPE html>
<html>

<head>
  <title>Delegue</title>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
  <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">

  <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>


  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="menu.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>




  <script src="sorttable.js"></script>

</head>

<body>

  <?php
  $identifiant = $_SESSION['identifiant'];

  $param_date_r = mysqli_query($session, "UPDATE personne SET date_r = NULL WHERE IdentifiantPe = '$identifiant'");
  $param_categorie = mysqli_query($session, "UPDATE personne SET categorie = '' WHERE IdentifiantPe = '$identifiant'");
  $suivant = mysqli_query($session, "UPDATE personne SET semaine = 0 WHERE IdentifiantPe = '$identifiant'");

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
                <a class="nav-link" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> <?php echo LISTE_RDV;?></a>
            </li>
            <li class="nav-item  text-center">
                <a class="nav-link" href="suivi_prets.php" style="background-color: none; color: black"><i class=" fi-rr-info"></i> <?php echo SUIVI_PRET;?> </a>
            </li>
            <li class="nav-item  text-center">
                <a class="nav-link" href="Statistiques.php"><i class=" fi-rr-stats"></i> <?php echo STATS;?></a>
            </li>
            <li class="nav-item  text-center">
                <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
            </li>
            <li class="nav-item  text-center">
                <a class="nav-link" aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER; ?> </a>
            </li>
            <li class="nav-item  text-center">
                <a class="nav-link" href="mes_reservations.php" ><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION; ?></a>
            </li>
            <li class="nav-item  text-center">
                <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE; ?></a>
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
                <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes emprunts</a>
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
                <a class="nav-link" href="#"><i class="fi-rr-file-check"></i> Mes emprunts</a>
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
        <thead>
          <tr>
            <th data-sortable="true">
              Identifiant emprunteur
            </th data-sortable="true">
            <th>
              Numéro du matériel
            </th data-sortable="true">
            <th data-sortable="true">
              Type de matériel
            </th>
            <th data-sortable="true">
              Date de retour actuelle
            </th>
            <th data-sortable="true">
              Date de prolongation demandée
            </th>
            <th>
            </th>
          </tr>
        </thead>


        <?php

        foreach ($result_emprunt as $row) {

        ?>

          <form action="gestion_prolongation.php" method="POST">

            <tr>
              <input type="hidden" class="form-control-plaintext" name="IdentifiantE" value="<?php echo $row['IdentifiantE'] ?>" readonly>

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
            </tr>
          </form>

        <?php
        }
        ?>
      </table>

    <?php
    }
    ?>


    <br>

    <div class="contenu">
      <?php

      $emprunt = ("SELECT *
                            FROM emprunt, personne, materiel
                            WHERE emprunt.IdentifiantPe = personne.IdentifiantPe
                            AND emprunt.IdentifiantM = materiel.IdentifiantM
                            AND emprunt.EtatE LIKE 'Non rendu'
                            GROUP BY materiel.IdentifiantM
                            ORDER BY emprunt.DateRetour ASC");



      $result_emprunt = mysqli_query($session, $emprunt);
      ?>
      <Table class="table table-striped table-hover">
        <thead>
          <TR>
            <TH data-sortable="true">
              Prénom
            </TH>
            <TH data-sortable="true">
              Nom
            </TH>
            <TH data-sortable="true">
              Numéro du matériel
            </TH>
            <TH data-sortable="true">
              Type de materiel
            </TH>
            <TH data-sortable="true">
              Email
            </TH>
            <TH data-sortable="true">
              Date de reservation
            </TH>
            <TH data-sortable="true">
              Date de retour prévue
            </TH>
          </TR>
        </thead>
        <tbody>


          <form action="rendu.php" method="POST">

            <?php
            $i = 0;
            foreach ($result_emprunt as $row) {
              $i += 1;
            ?>

              <TR id="ligne_<?php echo "$i" ?>">
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
                  <input type="text" class="form-control-plaintext" value="<?php echo $row['DateRetour'] ?>" name="DateRetour" id="DateRetour_<?php echo "$i" ?>" readonly>
                </TD>

                <?php
                if ($row['DateRetour'] < strftime("%Y-%m-%d", strtotime("now"))) {
                ?>
                  <script>
                    document.getElementById('ligne_<?php echo "$i" ?>').style.backgroundColor = "rgb(255,111,86)";
                  </script>
                <?php
                } else if ($row['DateRetour'] >= strftime("%Y-%m-%d", strtotime("-1 week")) && $row['DateRetour'] < strftime("%Y-%m-%d", strtotime("+1 week"))) {
                ?>
                  <script>
                    document.getElementById('ligne_<?php echo "$i" ?>').style.backgroundColor = "rgb(255,176,61)";
                  </script>
                <?php
                } else {
                ?>
                  <script>
                    document.getElementById('ligne_<?php echo "$i" ?>').style.backgroundColor = "rgb(202,255,36)";
                  </script>
                <?php
                }
                ?>
              </TR>
            <?php
            }
            ?>
        </tbody>

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
            $message = "Bonjour, Veuillez prendre rendez-vous afin de rendre le matériel emprunté. Cordialement, ";
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
            $message = "Bonjour, la date de remise est dépassée veuillez prendre rendez-vous afin de rendre le matériel emprunté dans les plus brefs délais. Cordialement,";
            $headers = 'From: Responsable des prêts de matériels' . "\r\n" .
              'Reply-To: Responsable des prêts de matériels' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
            mail($destinataire, $objet, $message, $headers);
            $update_mail_retour_depasse = ("UPDATE emprunt SET mail_rappel = 'effectue' WHERE IdentifiantM = '$identifiantM' AND IdentifiantPe = '$identifiantPe'");
            $result_update_mail_retour_depasse = mysqli_query($session, $update_mail_retour_depasse);
          }
        }


        ?>
        </form>

      </Table>

    </div>

</body>

</html>
