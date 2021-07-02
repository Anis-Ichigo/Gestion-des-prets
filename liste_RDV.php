<?php
require('decide-lang.php');
if (!$_SESSION['identifiant']) {
  header("Location: Index.html");
}
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


  <script type="text/javascript">
    function actualiseimages() {
      $("#contenu").load("liste_RDV.php #contenu");
    }
  </script>
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
                <a class="nav-link" href="liste_RDV.php" style="background-color: none; color: black"><i class="  fi-rr-calendar"></i> <?php echo LISTE_RDV;?></a>
            </li>
            <li class="nav-item  text-center">
                <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> <?php echo SUIVI_PRET;?> </a>
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
                <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes emprunts</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link  active" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link" href="FAQ.php"><i class=" fi-rr-interrogation"></i> FAQ</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
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
          <th></th>
        </TR>

        <?php
        require_once('Connexion_BD.php');

        $query_liste_rdv = "
                            SELECT 	p.IdentifiantPe as ide, p.PrenomPe as prenom, p.NomPe as nom, e.DateEmprunt as date_rdv,
                                    cal.HoraireCal as heure, e.IdentifiantM as idm, m.CategorieM as type, cal.IdentifiantCal as idc,
                                    e.motif as motif, e.IdentifiantE as idemprunt, e.Horaire_modif as horaire_modif, e.Contrat as contrat, e.DateRetour as date_retour
                            FROM 	materiel m, emprunt e, personne p, calendrier cal
                            WHERE 	p.IdentifiantPe= e.IdentifiantPe
                            AND		e.IdentifiantM = m.IdentifiantM
                            AND 	e.IdentifiantCal = cal.IdentifiantCal
                            AND Statut_RDV LIKE 'a venir'
                            ORDER BY e.DateEmprunt ASC
                            ";
        $result_liste_rdv = mysqli_query($session, $query_liste_rdv);
        if ($result_liste_rdv != null) {
        ?>
          <?php
          while ($ligne_liste_rdv = mysqli_fetch_array($result_liste_rdv)) {

          ?>
            <form method="POST" action="">

              <tr>
                <input type='hidden' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['idemprunt'] ?>" name='idemprunt' readonly>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['motif'] ?>" name='motif' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['ide'] ?>" id="ide" name='ide' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['prenom'] ?>" name='prenom' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['nom'] ?>" name='nom' readonly>
                </td>
                <?php
                if ($ligne_liste_rdv['motif'] == 'Pret') {
                ?>
                  <td>
                    <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['date_rdv'] ?>" name='date_rdv' readonly>
                  </td>
                <?php
                } else if ($ligne_liste_rdv['motif'] == 'Retour') {
                ?>
                  <td>
                    <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['date_retour'] ?>" name='date_rdv' readonly>
                  </td>
                <?php
                }
                ?>
                <?php
                if ($ligne_liste_rdv['horaire_modif'] != '') {
                ?>
                  <td>
                    <input type='time' step="2" class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['horaire_modif'] ?>" name='heure' readonly>
                  </td>
                <?php
                } else {
                ?>
                  <td>
                    <input type='time' step="2" class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['heure'] ?>" name='heure' readonly>
                  </td>
                <?php
                }
                ?>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['idm'] ?>" id="idm" name='idm' readonly>
                </td>
                <td>
                  <input type='text' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['type'] ?>" name='type' readonly>
                </td>
                <input type='hidden' class='form-control-plaintext' value="<?php echo $ligne_liste_rdv['idc'] ?>" id="idc" name='idc' readonly>
                <td>

                  <?php if ($ligne_liste_rdv['motif'] == 'Pret' && (
                    ($ligne_liste_rdv['date_rdv'] < strftime("%Y-%m-%d", strtotime("now"))) || ($ligne_liste_rdv['date_rdv'] == strftime("%Y-%m-%d", strtotime("now"))
                      && (date("H:i:s", strtotime("-15 minutes", strtotime($ligne_liste_rdv['horaire_modif']))) <= date("H:i:s")) && ($ligne_liste_rdv['horaire_modif'] != NULL)) ||
                    (($ligne_liste_rdv['date_rdv'] == strftime("%Y-%m-%d", strtotime("now")) && (date("H:i:s", strtotime("-15 minutes", strtotime($ligne_liste_rdv['heure']))) <= date("H:i:s")) && ($ligne_liste_rdv['horaire_modif'] == NULL)))
                  ) || ($ligne_liste_rdv['motif'] == 'Retour' && (
                    ($ligne_liste_rdv['date_retour'] < strftime("%Y-%m-%d", strtotime("now"))) || ($ligne_liste_rdv['date_retour'] == strftime("%Y-%m-%d", strtotime("now"))
                      && (date("H:i:s", strtotime("-15 minutes", strtotime($ligne_liste_rdv['horaire_modif']))) <= date("H:i:s")) && ($ligne_liste_rdv['horaire_modif'] != NULL)) ||
                    (($ligne_liste_rdv['date_retour'] == strftime("%Y-%m-%d", strtotime("now")) && (date("H:i:s", strtotime("-15 minutes", strtotime($ligne_liste_rdv['heure']))) <= date("H:i:s")) && ($ligne_liste_rdv['horaire_modif'] == NULL)))
                  ))){
                  ?>
                    <?php
                    if ($ligne_liste_rdv['contrat'] == 'signe') {
                    ?>
                      <input type="submit" class="btn btn-primary" onclick="actualiseimages()" value="RDV terminé" name="RDV_termine">
                    <?php
                    } else if ($ligne_liste_rdv['contrat'] == 'a signer') {
                    ?>
                      <input type="submit" class="btn btn-primary" onclick="actualiseimages()" value="Annuler" name="Annuler">
                    <?php
                    } else if ($ligne_liste_rdv['contrat'] == NULL) {
                    ?>
                      <input type="submit" class="btn btn-primary" onclick="actualiseimages()" value="Générer contrat" name="generer_contrat">
                    <?php
                    }
                  }

                  if (($ligne_liste_rdv['contrat'] != 'a signer' && $ligne_liste_rdv['contrat'] != 'signe') || $ligne_liste_rdv['motif'] == 'Retour') {
                    ?>
                    <input type="submit" class="btn btn-primary" value="Modifier" name="Modifier_RDV">
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

      <?php
      if (isset($_POST['generer_contrat'])) {
        $ide = $_POST['ide'];
        $idm = $_POST['idm'];
        $generer_contrat = ("UPDATE emprunt SET Contrat = 'a signer' WHERE IdentifiantM = '$idm' AND IdentifiantPe = '$ide'");
        $result_generer_contrat = mysqli_query($session, $generer_contrat);
      ?>
        <script type="text/javascript">
          document.location.href = 'liste_RDV.php';
        </script>

      <?php
      }

      if (isset($_POST['RDV_termine'])) {
        if ($_POST['motif'] == 'Pret') {
          $ide = $_POST['ide'];
          $idm = $_POST['idm'];
          $idc = $_POST['idc'];

          $update_RDV = ("UPDATE emprunt SET Statut_RDV = 'termine' WHERE IdentifiantM = '$idm' AND IdentifiantPe = '$ide'");
          $result_update_RDV = mysqli_query($session, $update_RDV);
          /*$update_cal = ("UPDATE calendrier SET EtatCal = 'Disponible' WHERE IdentifiantCal = '$idc'");
          $result_update_cal = mysqli_query($session, $update_cal);*/
        } else if ($_POST['motif'] == 'Retour') {
          $ide = $_POST['ide'];
          $idm = $_POST['idm'];
          $idc = $_POST['idc'];

          $update_RDV = ("UPDATE emprunt SET Statut_RDV = 'termine' WHERE IdentifiantM = '$idm' AND IdentifiantPe = '$ide'");
          $result_update_RDV = mysqli_query($session, $update_RDV);
          /*$update_cal = ("UPDATE calendrier SET EtatCal = 'Disponible' WHERE IdentifiantCal = '$idc'");
          $result_update_cal = mysqli_query($session, $update_cal);*/
          $rendu = ("UPDATE emprunt SET EtatE = 'Rendu' WHERE IdentifiantPe = '$ide' AND IdentifiantM = '$idm'");
          $result_rendu = mysqli_query($session, $rendu);
        }

      ?>
        <script type="text/javascript">
          document.location.href = 'liste_RDV.php';
        </script>

      <?php
      }

      if (isset($_POST['Modifier_RDV'])) {
      ?>
        <FORM method="POST" action="">
          <div class="modal fade" id="mdp" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">

                  <input type='hidden' class='form-control-plaintext' value="<?php echo $_POST['idemprunt'] ?>" name='idemprunt' readonly>
                  <input type='hidden' class='form-control-plaintext' value="<?php echo $_POST['idm'] ?>" name='idm' readonly>
                  <input type='hidden' class='form-control-plaintext' value="<?php echo $_POST['date_rdv'] ?>" name='date_rdv' readonly>
                  <input type='hidden' class='form-control-plaintext' value="<?php echo $_POST['heure'] ?>" name='heure' readonly>


                  <div class="form-floating mb-3">
                    <input type='text' class='form-control' value="<?php echo $_POST['motif'] ?>" placeholder=" " name='motif' readonly>
                    <label for="floatingInput"><?php echo "Motif"; ?>:</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type='text' class='form-control' placeholder=" " value="<?php echo $_POST['ide'] ?>" name='ide' readonly>
                    <label for="floatingInput"><?php echo "Identifiant emprunteur"; ?>:</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type='text' class='form-control' value="<?php echo $_POST['prenom'] ?>" placeholder=" " name='prenom' readonly>
                    <label for="floatingInput"><?php echo "Prénom de l'emprunteur"; ?> :</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type='text' class='form-control' value="<?php echo $_POST['nom'] ?>" name='nom' readonly>
                    <label for="floatingInput"><?php echo "Nom de l'emprunteur"; ?> :</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type='text' class='form-control' value="<?php echo $_POST['date_rdv'] ?>" name='nouvelle_date_rdv'>
                    <label for="floatingInput"><?php echo "Date du RDV"; ?> :</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type='time' step="2" class='form-control' value="<?php echo $_POST['heure'] ?>" name='nouvelle_heure'>
                    <label for="floatingInput"><?php echo "Heure"; ?> :</label>
                  </div>

                  <label for="nouveau_idm">Veuillez choisir un numéro de matériel :</label>
                  <input list="choix_idm" id="nouveau_idm" name="nouveau_idm" value="<?php echo $_POST['idm']; ?>" />

                  <datalist id="choix_idm">
                    <?php
                    $liste_idm = "SELECT * FROM materiel WHERE EtatM LIKE 'Dispo'";
                    $res = mysqli_query($session, $liste_idm);
                    foreach ($res as $row) {
                    ?>
                      <option value="<?php echo $row['IdentifiantM'] ?>">
                      <?php
                    }
                      ?>
                  </datalist>


                  <div class="form-floating mb-3">
                    <input type='text' class='form-control' value="<?php echo $_POST['type'] ?>" name='type' readonly>
                    <label for="floatingInput"><?php echo "Type de matériel"; ?> :</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type='hidden' class='form-control' value="<?php echo $_POST['idc'] ?>" name='idc'>
                  </div>
                </div>

                <div class="modal-footer">
                  <div class="col text-center">
                    <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo "Annuler"; ?>">
                    <input type="submit" class="btn btn-primary" name="confirmer_modifier_RDV" value="<?php echo "Valider"; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        echo "<script>
          $(window).load(function() {
          $('#mdp').modal('show');
          });
      </script>";
      }
        ?>
        </FORM>

        <?php


        if (isset($_POST['confirmer_modifier_RDV'])) {


          $ide = $_POST['ide'];
          $idm = $_POST['idm'];
          $nouveau_idm = $_POST['nouveau_idm'];
          $idc = $_POST['idc'];
          $date_rdv = $_POST['date_rdv'];
          $nouvelle_date_rdv = $_POST['nouvelle_date_rdv'];
          $idemprunt = $_POST['idemprunt'];
          $heure = $_POST['heure'];
          $nouvelle_heure = $_POST['nouvelle_heure'];


          $existe_idm = "SELECT * FROM materiel WHERE IdentifiantM = '$nouveau_idm'";
          $res_existe_idm = mysqli_query($session, $existe_idm);

          $dispo_idm = "SELECT * FROM materiel WHERE IdentifiantM = '$nouveau_idm' AND EtatM LIKE 'Non Dispo'";
          $res_dispo_idm = mysqli_query($session, $dispo_idm);

          if (mysqli_num_rows($res_dispo_idm) > 1) {
        ?>
            <div class="modal fade" id="succes_mdp" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>

                      <div>
                        <?php echo "Ce matériel n'est pas disponible" ?>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <div class="col text-center">
                      <input type="button" class="btn btn-primary" onclick='document.location.href="liste_RDV.php"' value="<?php echo TXT_OK; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php
            echo "<script>
  $(window).load(function() {
      $('#succes_mdp').modal('show');
  });
</script>";
          } else if (mysqli_num_rows($res_existe_idm) == 0) {
          ?>

            <div class="modal fade" id="succes_mdp" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>

                      <div>
                        <?php echo "Veuillez choisir un numéro de matériel existant" ?>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <div class="col text-center">
                      <input type="button" class="btn btn-primary" onclick='document.location.href="liste_RDV.php"' value="<?php echo TXT_OK; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php
            echo "<script>
    $(window).load(function() {
        $('#succes_mdp').modal('show');
    });
</script>";
          } else {

            if ($_POST['motif'] == 'Pret') {
              $modifier_RDV = ("UPDATE emprunt SET IdentifiantM = '$nouveau_idm', DateEmprunt = '$nouvelle_date_rdv', Horaire_modif = '$nouvelle_heure' WHERE IdentifiantPe = '$ide' AND IdentifiantE = '$idemprunt' AND IdentifiantM = '$idm'");
              $result_modifier_RDV = mysqli_query($session, $modifier_RDV);
            }
            if ($_POST['motif'] == 'Retour') {
              $modifier_RDV = ("UPDATE emprunt SET IdentifiantM = '$nouveau_idm', DateRetour = '$nouvelle_date_rdv', Horaire_modif = '$nouvelle_heure' WHERE IdentifiantPe = '$ide' AND IdentifiantE = '$idemprunt' AND IdentifiantM = '$idm'");
              $result_modifier_RDV = mysqli_query($session, $modifier_RDV);
            }


            $modifier_id_nouveau_materiel = ("UPDATE materiel SET EtatM = 'Non Dispo' WHERE IdentifiantM = '$nouveau_idm'");
            $result_modifier_id_nouveau_materiel = mysqli_query($session, $modifier_id_nouveau_materiel);

            if ($idm != $nouveau_idm) {
              $modifier_id_materiel = ("UPDATE materiel SET EtatM = 'Dispo' WHERE IdentifiantM = '$idm'");
              $result_modifier_id_materiel = mysqli_query($session, $modifier_id_materiel);
            }

            /*if (($nouvelle_date_rdv != $date_rdv) || ($nouvelle_heure != $heure)) {
              $modifier_etatCal = ("UPDATE calendrier SET EtatCal = 'Disponible' WHERE IdentifiantCal = '$idc'");
              $result_modifier_etatCal = mysqli_query($session, $modifier_etatCal);
            }*/

          ?>

            <div class="modal fade" id="succes_mdp" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>

                      <div>
                        <?php echo "Les modifications ont bien été effectuées" ?>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <div class="col text-center">
                      <input type="button" class="btn btn-primary" onclick='document.location.href="liste_RDV.php"' value="<?php echo TXT_OK; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php
            echo "<script>
    $(window).load(function() {
        $('#succes_mdp').modal('show');
    });
</script>";
          }
        }

        if (isset($_POST['Annuler'])) {

          ?>
          <form action="" method="POST">
            <input type='hidden' class='form-control' value="<?php echo $_POST['idc'] ?>" name='idc'>
            <input type='hidden' class='form-control' value="<?php echo $_POST['ide'] ?>" name='ide'>
            <input type='hidden' class='form-control' value="<?php echo $_POST['idm'] ?>" name='idm'>

            <div class="modal fade" id="succes_mdp" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>

                      <div>
                        <?php echo "Êtes-vous sûr de vouloir annuler cet emprunt ?" ?>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <div class="col text-center">
                      <input type="submit" name="Annuler_emprunt" class="btn btn-primary" value="<?php echo "Oui"; ?>">
                      <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo "Annuler"; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>

        <?php
          echo "<script>
    $(window).load(function() {
        $('#succes_mdp').modal('show');
    });
</script>";
        }


        if (isset($_POST['Annuler_emprunt'])) {
          $ide = $_POST['ide'];
          $idm = $_POST['idm'];
          $idc = $_POST['idc'];
          $idemprunt = $_POST['idemprunt'];

          $annuler_emprunt = ("UPDATE emprunt SET Statut_RDV = 'annule', Motif='annule', EtatE = 'annule', Contrat = 'non signe' WHERE IdentifiantE = '$idemprunt' AND IdentifiantM = '$idm' AND IdentifiantPe = '$ide'");
          $result_annuler_emprunt = mysqli_query($session, $annuler_emprunt);
          /*$modifier_etatCal = ("UPDATE calendrier SET EtatCal = 'Disponible' WHERE IdentifiantCal = '$idc'");
          $result_modifier_etatCal = mysqli_query($session, $modifier_etatCal);*/

        ?>
          <script type="text/javascript">
            document.location.href = 'liste_RDV.php';
          </script>

        <?php
        }
        ?>


    </div>
  </main>
</body>

</html>
