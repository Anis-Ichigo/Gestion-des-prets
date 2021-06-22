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
  <script type="text/javascript" src="test.js"></script>

</head>

<body>

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
                <a class="nav-link" style="background-color: none; color:black" href="suivi_prets.php"><i class=" fi-rr-info"></i> Suivi des prêts</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link" href="Statistiques.php"><i class=" fi-rr-stats"></i> Statistiques</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes emprunts</a>
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

    <br><br>

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

        <form action="gestion_prolongation.php" method="POST">
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

  ?>

  <div class="contenu">
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
    <Table class="table table-striped table-hover avectri">
      <thead>
        <TR>
          <TH>
            Prénom
          </TH>
          <TH>
            Nom
          </TH>
          <TH data-tri="1" class="selection" data-type="num">
            Numéro du matériel
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
        </TR>
      </thead>
      <tbody>


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
            </TR>
          <?php
          }
          ?>
      <tbody>

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


        ?>
        </form>

    </Table>

  </div>

  <style>
    /* Classe obligatoire pour les flèches */
    .flecheDesc {
      width: 0;
      height: 0;
      float: right;
      margin: 10px;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-bottom: 5px solid black;
    }

    .flecheAsc {
      width: 0;
      height: 0;
      float: right;
      margin: 10px;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-top: 5px solid black;
    }

    /* Classe optionnelle pour le style */
    .tableau {
      width: 100%;
      table-layout: fixed;
      border-collapse: collapse;
    }

    .tableau td {
      padding: .3rem
    }

    .zebre tbody tr:nth-child(odd) {
      background-color: #d6d3ce;
      border-bottom: 1px solid #ccc;
      color: #444;
    }

    .zebre tbody tr:nth-child(even) {
      background-color: #c6c3bd;
      border-bottom: 1px solid #ccc;
      color: #444;
    }

    .zebre tbody tr:hover:nth-child(odd) {
      background-color: #999690;
      color: #ffffff;
    }

    .zebre tbody tr:hover:nth-child(even) {
      background-color: #999690;
      color: #ffffff;
    }

    .avectri th {
      text-align: center;
      padding: 5px 0 0 5px;
      vertical-align: middle;
      background-color: #999690;
      color: #444;
      cursor: pointer;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -o-user-select: none;
      user-select: none;
    }

    .avectri th.selection {
      background-color: #5d625c;
      color: #fff;
    }

    .avectri th.selection .flecheDesc {
      border-bottom-color: white;
    }

    .avectri th.selection .flecheAsc {
      border-top-color: white;
    }

    .zebre tbody td:nth-child(3) {
      text-align: center;
    }
  </style>

  <script>
    // Tri dynamique de tableau HTML
    // Auteur : Copyright © 2015 - Django Blais
    // Source : http://trucsweb.com/tutoriels/Javascript/tableau-tri/
    // Sous licence du MIT.
    function twInitTableau() {
      // Initialise chaque tableau de classe « avectri »
      [].forEach.call(document.getElementsByClassName("avectri"), function(oTableau) {
        var oEntete = oTableau.getElementsByTagName("tr")[0];
        var nI = 1;
        // Ajoute à chaque entête (th) la capture du clic
        // Un picto flèche, et deux variable data-*
        // - Le sens du tri (0 ou 1)
        // - Le numéro de la colonne
        [].forEach.call(oEntete.querySelectorAll("th"), function(oTh) {
          oTh.addEventListener("click", twTriTableau, false);
          oTh.setAttribute("data-pos", nI);
          if (oTh.getAttribute("data-tri") == "1") {
            oTh.innerHTML += "<span class=\"flecheDesc\"></span>";
          } else {
            oTh.setAttribute("data-tri", "0");
            oTh.innerHTML += "<span class=\"flecheAsc\"></span>";
          }
          // Tri par défaut
          if (oTh.className == "selection") {
            oTh.click();
          }
          nI++;
        });
      });
    }

    function twInit() {
      twInitTableau();
    }

    function twPret(maFonction) {
      if (document.readyState != "loading") {
        maFonction();
      } else {
        document.addEventListener("DOMContentLoaded", maFonction);
      }
    }
    twPret(twInit);

    function twTriTableau() {
      // Ajuste le tri
      var nBoolDir = this.getAttribute("data-tri");
      this.setAttribute("data-tri", (nBoolDir == "0") ? "1" : "0");
      // Supprime la classe « selection » de chaque colonne.
      [].forEach.call(this.parentNode.querySelectorAll("th"), function(oTh) {
        oTh.classList.remove("selection");
      });
      // Ajoute la classe « selection » à la colonne cliquée.
      this.className = "selection";
      // Ajuste la flèche
      this.querySelector("span").className = (nBoolDir == "0") ? "flecheAsc" : "flecheDesc";

      // Construit la matrice
      // Récupère le tableau (tbody)
      var oTbody = this.parentNode.parentNode.parentNode.getElementsByTagName("tbody")[0];
      var oLigne = oTbody.rows;
      var nNbrLigne = oLigne.length;
      var aColonne = new Array(),
        i, j, oCel;
      for (i = 0; i < nNbrLigne; i++) {
        oCel = oLigne[i].cells;
        aColonne[i] = new Array();
        for (j = 0; j < oCel.length; j++) {
          aColonne[i][j] = oCel[j].innerHTML;
        }
      }

      // Trier la matrice (array)
      // Récupère le numéro de la colonne
      var nIndex = this.getAttribute("data-pos");
      // Récupère le type de tri (numérique ou par défaut « local »)
      var sFonctionTri = (this.getAttribute("data-type") == "num") ? "compareNombres" : "compareLocale";
      // Tri
      aColonne.sort(eval(sFonctionTri));
      // Tri numérique
      function compareNombres(a, b) {
        return a[nIndex - 1] - b[nIndex - 1];
      }
      // Tri local (pour support utf-8)
      function compareLocale(a, b) {
        return a[nIndex - 1].localeCompare(b[nIndex - 1]);
      }
      // Renverse la matrice dans le cas d’un tri descendant
      if (nBoolDir == 0) aColonne.reverse();

      // Construit les colonne du nouveau tableau
      for (i = 0; i < nNbrLigne; i++) {
        aColonne[i] = "<td>" + aColonne[i].join("</td><td>") + "</td>";
      }

      // assigne les lignes au tableau
      oTbody.innerHTML = "<tr>" + aColonne.join("</tr><tr>") + "</tr>";
    }
  </script>

</body>

</html>