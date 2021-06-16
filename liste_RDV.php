<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');
?>

<!DOCTYPE html>
<html>

<head>
  <title>Valide</title>
  <meta charset="utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="menu.css" type="text/css">
  <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
  <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
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
                <a class="nav-link active" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> Liste des rendez-vous</a>
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
                <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> Suivi des prêts</a>
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


    <div class="contenu">
      <h1>Liste des RDV</h1>

      <Table class="table table-striped table-hover">
        <TR>
          <th>
            Motif du RDV
          </th>
          <TH>
            ID de l'emprunteur
          </TH>
          <TH>
            Prénom de l'emprunteur
          </TH>
          <TH>
            Nom de l'emprunteur
          </TH>
          <TH>
            Date du RDV
          </TH>
          <TH>
            Heure du RDV
          </TH>
          <TH>
            Numéro du materiel
          </TH>
          <TH>
            Type de matériel
          </TH>
          <th></th>
        </TR>

        <?php
        require_once('Connexion_BD.php');

        $query_liste_rdv = "
                            SELECT 	p.IdentifiantPe as ide, p.PrenomPe as prenom, p.NomPe as nom, e.DateEmprunt as date_rdv,
                                    cal.HoraireCal as heure, e.IdentifiantM as idm, m.CategorieM as type, cal.IdentifiantCal as idc, e.motif as motif
                            FROM 	materiel m, emprunt e, personne p, calendrier cal
                            WHERE 	p.IdentifiantPe= e.IdentifiantPe
                            AND		e.IdentifiantM = m.IdentifiantM
                            AND 	e.IdentifiantCal = cal.IdentifiantCal
                            AND Statut_RDV LIKE 'à venir'
                            ORDER BY e.DateEmprunt ASC
                            ";
        $result_liste_rdv = mysqli_query($session, $query_liste_rdv);
        if ($result_liste_rdv != null) {
        ?>
          <form action="RDV_termine.php" method="POST">
            <?php
            while ($ligne_liste_rdv = mysqli_fetch_array($result_liste_rdv)) {

            ?>
              <tr>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['motif'] ?>" name='motif' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['ide'] ?>" name='ide' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['prenom'] ?>" name='prenom' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['nom'] ?>" name='nom' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['date_rdv'] ?>" name='date_rdv' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['heure'] ?>" name='heure' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['idm'] ?>" name='idm' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['type'] ?>" name='type' readonly>
                </td>
                <input type='hidden' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['idc'] ?>" name='idc' readonly>
                <td>
                  <?php if ($ligne_liste_rdv['date_rdv'] <= strftime("%Y-%m-%d", strtotime("now")) && $ligne_liste_rdv['heure'] <= strftime('H:i:s')) {

                  ?>
                    <input type="submit" class="btn btn-primary" value="RDV terminé" name="RDV_termine">
                  <?php
                  }
                  ?>
                </td>

              </tr>

          </form>
      <?php
            }
          }


      ?>

      </Table>
    </div>
  </main>
</body>

</html>