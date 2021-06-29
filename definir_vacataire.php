<?php
require('Connexion_BD.php');
mysqli_set_charset($session, "utf-8");
require('decide-lang.php');
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
              <a class="nav-link" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> Liste des rendez-vous</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> Suivi des prêts</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="Statistiques.php"><i class=" fi-rr-stats"></i> Statistiques</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" style="background-color: none; color:black" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
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
        <a class="nav-link" href="profil.php">Mon profil </a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="definir_vacataire.php">Vacataire </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="choix_dispo.php">Choix disponibilitée</a>
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
    $identifiant = $_POST['vacataire'];
    $ajouter_vac = "UPDATE personne SET RolePe = 'Vacataire' WHERE  IdentifiantPe = ?";
    if ($stmt = mysqli_prepare($session, $ajouter_vac)) {
      mysqli_stmt_bind_param($stmt, 's', $identifiant);
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
        </TR>
      </FORM>
    <?php
    }
    ?>
  </TABLE>
</body>

</html>