<?php
require('Connexion_BD.php');
mysqli_set_charset($session, "utf-8");
require('decide-lang.php');
if (!$_SESSION['identifiant']) {
  header("Location: Index.html");
}
require('fpdf183/fpdf.php');
date_default_timezone_set('Europe/Paris');


?>

<!DOCTYPE html>

<html>



<head>

  <meta charset="utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="styletest.css" type="text/css">
  <link rel="stylesheet" href="menu.css" type="text/css">
  <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
  <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
  <?php
  $identifiant = $_SESSION['identifiant'];

  $date_actuelle = strftime('%Y-%m-%d', strtotime("now"));
  $param_date_r = mysqli_query($session, "UPDATE personne SET date_r = '$date_actuelle' WHERE IdentifiantPe = '$identifiant'");
  $param_categorie = mysqli_query($session, "UPDATE personne SET categorie = '' WHERE IdentifiantPe = '$identifiant'");
  $suivant = mysqli_query($session, "UPDATE personne SET semaine = 0 WHERE IdentifiantPe = '$identifiant'");

  $role_pe = "SELECT * FROM personne WHERE IdentifiantPe = '$identifiant'";
  $resultat = mysqli_query($session, $role_pe);
  foreach ($resultat as $row) {
    $role_user = $row["RolePe"];
    $contrat = $row['Statut'];
  }
  ?>

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
              <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> <?php echo SUIVI_PRET;?> </a>
          </li>
          <li class="nav-item  text-center">
              <a class="nav-link" href="Statistiques.php"><i class=" fi-rr-stats"></i> <?php echo STATS;?></a>
          </li>
          <li class="nav-item  text-center">
              <a class="nav-link" href="profil.php" style="background-color: none; color: black"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
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
              <a class="nav-link" href="profil.php" style="background-color: none; color:black"><i class=" fi-rr-user"></i> Profil</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
            </li>
          <?php
          } else if ($role_user == "Emprunteur") {
          ?>
            <li class="nav-item  text-center">
              <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER; ?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION; ?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="profil.php" style="background-color: none; color:black"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="FAQ.php"><i class=" fi-rr-interrogation"></i> <?php echo FAQ; ?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE; ?></a>
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


  <br>

  <?php
  if ($role_user == "Responsable") {
  ?>

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="profil.php"><?php echo TXT_ACCUEIL_PROFIL;?> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="definir_vacataire.php"><?php echo VACATAIRE;?> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="choix_dispo.php"><?php echo DISPONIBLE;?></a>
      </li>
    </ul>

  <?php
  }
  ?>

  <br>

  <form action="" method="post">
    <table class="table table-striped table-hover" style="text-align: center;">
      <tr>
        <td><label for="vacataire">Veuillez choisir un nouveau vacataire :</label></td>
        <td>
          <input list="choix_vac" id="vacataire" name="vacataire" value="" />

          <datalist id="choix_vac">
            <?php
            $liste_vac = "SELECT *  FROM personne WHERE RolePe != 'Vacataire'";
            $res = mysqli_query($session, $liste_vac);
            foreach ($res as $row) {
            ?>
              <option value="<?php echo $row['NomPe'] . ' ' . $row['PrenomPe'] . ' ' . $row['IdentifiantPe'] ?>">
              <?php
            }
              ?>
          </datalist>
        </td>
        <td>
          <input type="submit" class='btn btn-primary' name="ajouter" value="Ajouter">
        </td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST['ajouter'])) {
    $identifiant_vacataire = $_POST['vacataire'];

    $tab = explode(" ", $identifiant_vacataire);
    $id_vac = $tab[2];


    $ajouter_vac = "UPDATE personne SET RolePe = 'Vacataire' WHERE  IdentifiantPe = ?";
    if ($stmt = mysqli_prepare($session, $ajouter_vac)) {
      mysqli_stmt_bind_param($stmt, 's', $id_vac);
      mysqli_stmt_execute($stmt);
    }
  ?>

    <div class="modal fade" id="succes_ajouter_vac" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="alert alert-success d-flex align-items-center" role="alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
              </svg>

              <div>
                <?php echo "Le vacataire a été ajouté"; ?>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <div class="col text-center">
              <input type="button" class="btn btn-primary" data-bs-dismiss="modal" value="<?php echo TXT_OK; ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(window).load(function() {
        $('#succes_ajouter_vac').modal('show');
      });
    </script>

  <?php
  }
  ?>

  <br>
  <Table class="table table-striped table-hover" style="text-align: center;">
    <thead style="text-align: center;">
      <TR>
        <th>
          Nom
        </th>
        <th>
          Prénom
        </th>
        <th>
          Email
        </th>
        <th>
          Téléphone
        </th>
      </TR>
    </thead>

    <?php
    $vacataire = ("SELECT * FROM personne WHERE RolePe LIKE 'Vacataire'");
    $result_vacataire = mysqli_query($session, $vacataire);
    foreach ($result_vacataire as $row) {
    ?>
      <FORM method="POST" action="">
        <input type="hidden" size="30" readonly class="form-control-plaintext text-center" name="identifiantPe" value="<?php echo $row['IdentifiantPe']; ?>">

        <TR>
          <TD>
            <input type="text" readonly class="form-control-plaintext text-center" name="NomPe" value="<?php echo $row['NomPe']; ?>">
          </TD>
          <TD>
            <input type="text" readonly class="form-control-plaintext text-center" name="PrenomPe" value="<?php echo $row['PrenomPe']; ?>">
          </TD>
          <TD>
            <input type="text" size="30" readonly class="form-control-plaintext text-center" name="EmailPe" value="<?php echo $row['EmailPe']; ?>">
          </TD>
          <TD>
            <input type="text" readonly class="form-control-plaintext text-center" name="TelPe" value="<?php echo $row['TelPe']; ?>">
          </TD>
          <td>
            <input type="submit" class='btn btn-primary' name="supprimer" value="Supprimer">
          </td>
        </TR>
      </FORM>
    <?php
    }
    ?>
  </TABLE>

  <?php
  if (isset($_POST['supprimer'])) {
    $identifiant_vacataire = $_POST['identifiantPe'];

    $ajouter_vac = "UPDATE personne SET RolePe = 'Emprunteur' WHERE  IdentifiantPe = ?";
    if ($stmt = mysqli_prepare($session, $ajouter_vac)) {
      mysqli_stmt_bind_param($stmt, 's', $identifiant_vacataire);
      mysqli_stmt_execute($stmt);
    }
  ?>

    <div class="modal fade" id="succes_ajouter_vac" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="alert alert-success d-flex align-items-center" role="alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
              </svg>

              <div>
                <?php echo "Le vacataire a été supprimé"; ?>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <div class="col text-center">
              <input type="button" class="btn btn-primary" onclick='document.location.href="definir_vacataire.php"' value="<?php echo TXT_OK; ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(window).load(function() {
        $('#succes_ajouter_vac').modal('show');
      });
    </script>

  <?php
  }
  ?>
  <form action="" method="POST">
    <input type="submit" class='btn btn-primary' name="inscrire_utilisateur" value="Inscrire un utilisateur">
  </form>
  <?php
  if (isset($_POST['inscrire_utilisateur'])) {
  ?>

    <form action="" method="POST">
      <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">

              <div>
                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='nom' required>
                  <label for="floatingInput"><?php echo TXT_NOM; ?>:</label>
                </div>
                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='prenom' required>
                  <label for="floatingInput"><?php echo TXT_PRENOM; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='email' required>
                  <label for="floatingInput"><?php echo TXT_EMAIL; ?> :</label>
                </div>
                <div class="form-floating mb-3">
                  <input type='tel' class='form-control' placeholder=" " name='tel' pattern="[0-9]{10}" required>
                  <label for="floatingInput"><?php echo TXT_TEL; ?> :</label>
                </div>
                <label for="statut"><?php echo TXT_IDENTITE; ?> : </label>
                <SELECT id="statut" name="statut" class="form-select">
                  <OPTION>Etudiant</OPTION>
                  <OPTION>Enseignant</OPTION>
                  <OPTION>Personnel Administratif</OPTION>
                </SELECT>
                <label for="formation" style="display: block;" id="formation"><?php echo TXT_FORMATION; ?> : </label>
                <SELECT id="formation" name="formation" class="form-select" style="display: block;">
                  <OPTION>L3 MIASHS TI</OPTION>
                  <OPTION>LICENCE PRO RTAI</OPTION>
                  <OPTION>M1 MIAGE IM</OPTION>
                  <OPTION>M1 MIAGE 2IS</OPTION>
                  <OPTION>M1 MIAGE IDA</OPTION>
                  <OPTION>M2 MIAGE IPM</OPTION>
                  <OPTION>M2 MIAGE ISIAD</OPTION>
                  <OPTION>M2 MIAGE 2IS</OPTION>
                  <OPTION>M2 MIAGE IDA</OPTION>
                  <OPTION>AUTRE</OPTION>
                </SELECT>
                <input type="radio" style="text-align: center" id="Emprunteur" name="role" value="Emprunteur" checked>
                <label for="role">Emprunteur</label>
                <input type="radio" style="text-align: center" id="Vacataire" name="role" value="Vacataire">
                <label for="role" style="text-align: center">Vacataire</label>
                <div class="form-floating mb-2">
                  <input type="password" class="form-control" id="floatingInput" placeholder=" " autocomplete="off" name="motPasse" value="" required>
                  <label for="floatingInput"><?php echo TXT_MDP_INS; ?> : </label>
                </div>
                <div class="form-floating mb-2">
                  <input type="password" class="form-control" id="floatingInput" placeholder=" " autocomplete="off" name="motPasse2" value="" required>
                  <label for="floatingInput"><?php echo TXT_CONFIRMER_MDP_INS; ?> : </label>
                </div>
                <div class="legals_flex">
                  <CENTER>
                    <input id="checkbox_newletter" name="checkbox_confidentiality_notice" required type="checkbox">
                    <a name="confidentialite" id="confidentialite" href="" data-toggle="modal" data-target="#alerte" for="checkbox_newletter"><?php echo TXT_CONFIDENTIEL; ?></a><br>
                    <input id="checkbox_general_condition" name="checkbox_general_condition" required type="checkbox">
                    <a name="cgu" id="cgu" href="" class="checkbox_container" data-toggle="modal" data-target="#alerte" for="checkbox_general_condition"><?php echo TXT_CGU; ?></a>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="col text-center">
                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo "Annuler"; ?>">
                <input type="submit" class="btn btn-primary" name="valider_inscription" value="Valider">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="modal" id="infos">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Plus d'informations</h4>
            <button type="button" class="close closemodal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo AC; ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary closemodal"><?php echo TXT_OK; ?></button>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(function() {
        $('#confidentialite').click(function() {
          $('.modal').modal('show')
        })
        $('.closemodal').click(function() {
          $('.modal').modal('hide')
        })
      })
    </script>


    <div class="modal" id="infos">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">
              <h1> <?php echo TXT_ACCUEIL_CGU; ?> </h1>
            </h4>
            <button type="button" class="close closemodal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h2> <?php echo CGU; ?> </h2>
            <b> <?php echo CGU1; ?> </b> <?php echo CGU2; ?> </br>
            <b> <?php echo CGU3; ?> </b> <?php echo CGU4; ?> </br>
            <b> <?php echo CGU5; ?> </b> <?php echo CGU6; ?></br>
            <b> <?php echo CGU7; ?> </b> <?php echo CGU8; ?></br>
            <b> <?php echo CGU9; ?> </b> <?php echo CGU10; ?> </br>
            <?php echo CGU11; ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary closemodal"><?php echo TXT_OK; ?></button>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(function() {
        $('#cgu').click(function() {
          $('.modal').modal('show')
        })
        $('.closemodal').click(function() {
          $('.modal').modal('hide')
        })
      })
    </script>

    <?php
    echo "<script>
    $(window).load(function() {
        $('#alerte').modal('show');
    });
</script>";
  }
  if (isset($_POST['valider_inscription'])) {
    $id = $_POST['email'];
    $stmt = mysqli_prepare($session, "SELECT IdentifiantPe from personne where IdentifiantPe = ?");
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    if (mysqli_stmt_fetch($stmt) == TRUE) {
      $existe = False;
    } else {
      $existe = True;
    }
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['motPasse']) && !empty($_POST['motPasse2'] && !empty($_POST['role']))) {
      if ($existe == True) {
        if (strlen($_POST['motPasse']) >= 4) {
          if ($_POST['motPasse'] == $_POST['motPasse2']) {
            // Cryptage mdp
            $mdp = $_POST['motPasse'];
            $mdp_crypté = sha1($mdp);

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $statut = $_POST['statut'];
            $formation = $_POST['formation'];
            $role = $_POST['role'];
            echo $role;

            $query = "INSERT INTO personne (IdentifiantPe, NomPe, PrenomPe, EmailPe, Mot_de_passePe, TelPe, Statut, Formation, RolePe)
        VALUES ('$email', '$nom', '$prenom', '$email', '$mdp_crypté', '$tel', '$statut', '$formation', '$role')";
            $result = mysqli_query($session, $query);

            $_SESSION['user'] = $email;
            $_SESSION['nom'] = "$prenom $nom";
            $_SESSION['identifiant'] = $email;
            $_SESSION['psw'] = $mdp_crypté;
            $_SESSION['tel'] = $tel;
            $_SESSION['statut'] = $statut;
            $_SESSION['formation'] = $formation;
            $_SESSION['role'] = $role;
    ?>
            <div class="modal fade" id="succes_ajouter" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>

                      <div>
                        <?php echo "L'utilisateur a été ajouté avec succès"; ?>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <div class="col text-center">
                      <input type="button" class="btn btn-primary" data-bs-dismiss="modal" value="<?php echo TXT_OK; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script>
              $(window).load(function() {
                $('#succes_ajouter').modal('show');
              });
            </script>
          <?php
          } else {
          ?>
            <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                      </svg>
                      <div style="margin-left: auto; margin-right: auto;">
                        <?php echo ALERTE_ERREUR_MDP; ?>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="col text-center">
                      <input data-bs-dismiss="modal" class="btn btn-secondary" value="<?php echo TXT_OK; ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            echo "<script>
              $(window).load(function() {
                  $('#alerte').modal('show');
              });
          </script>";
          }
        } else {
          ?>

          <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                      <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                    </svg>
                    <div style="margin-left: auto; margin-right: auto;">
                      <?php echo ERREUR_MDP_COURT; ?>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="col text-center">
                    <input data-bs-dismiss="modal" class="btn btn-secondary" value="<?php echo TXT_OK; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
          echo "<script>
              $(window).load(function() {
                  $('#alerte').modal('show');
              });
          </script>";
        }
      } else {

        ?>


        <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                  </svg>
                  <div style="margin-left: auto; margin-right: auto;">
                    <?php echo "Ce mail est déjà utilisé"; ?>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="col text-center">
                  <input data-bs-dismiss="modal" class="btn btn-secondary" value="<?php echo TXT_OK; ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
  <?php
        echo "<script>
                $(window).load(function() {
                    $('#alerte').modal('show');
                });
            </script>";
      }
    }
  }
  ?>

  <script>
    function changementStatut() {

      var statut = document.getElementById('statut').value;
      if (statut == 'Personnel Administratif' || statut == 'Enseignant') {
        document.getElementById('formation').style.display = 'none';
      } else {
        document.getElementById('formation').style.display = 'block';
      }

    }
  </script>

</body>

</html>
