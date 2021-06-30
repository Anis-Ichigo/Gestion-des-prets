<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');

?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo TXT_ENTRETIEN;?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">

  <link href="menu.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>


  <!--
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

  <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>


  <script src="sorttable.js"></script>
-->

  <!--
  <script src="sorttable.js"></script>
  <script src="tri_tableaux.js"></script>
  -->
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
              <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> Suivi des prêts</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="Statistiques.php"><i class=" fi-rr-stats"></i> Statistiques</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE;?></a>
            </li>
          <?php
          } else if ($role_user == "Vacataire") {
          ?>
            <li class="nav-item  text-center">
              <a class="nav-link active" href="entretien.php"><i class=" fi-rr-computer"></i> <?php echo TXT_ACCUEIL_ENTRETIEN;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE;?></a>
            </li>
          <?php
          } else if ($role_user == "Emprunteur") {
          ?>
            <li class="nav-item  text-center">
              <a class="nav-link " aria-current="page" href="#"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="#"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link  active" href="#"><i class=" fi-rr-user"></i> <?php echo PROFIL;?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="#"><i class=" fi-rr-interrogation"></i> FAQ</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link " href="#"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE;?></a>
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



  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#"><?php echo TXT_MAJ_PARC;?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="RAZ.php"><?php echo TXT_RAZ;?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="SAV.php"><?php echo TXT_SAV;?> </a>
    </li>
  </ul>

  <?php
  if (isset($_POST['valider_ajout'])) {

    $numero = $_POST["numero"];

    if (!empty($_POST['nouvelle_categorie'])) {
      $type = $_POST['nouvelle_categorie'];
    } else {
      $type = $_POST["type"];
    }

    $date = $_POST["date"];
    $etat = 'Dispo';
    $statut = 'Existant';
    $identifiantMo = $_POST['IdentifiantMo'];
    $NumBonCommande = $_POST['NumBonCommande'];


    $ajouter = "INSERT INTO materiel (IdentifiantM, DateReception, EtatM, CategorieM, StatutM, NumBonCommande, IdentifiantMo) VALUES (?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($session, $ajouter)) {
      mysqli_stmt_bind_param($stmt, 'sssssss', $numero, $date, $etat, $type, $statut, $NumBonCommande, $identifiantMo);
      mysqli_stmt_execute($stmt);
    }


    $marque = $_POST['Marque'];
    $RAM = $_POST['RAM'];
    $processeur = $_POST['Processeur'];
    $capaciteStockage = $_POST['CapaciteStockage'];

    $ajouter_modele = "INSERT INTO modele (IdentifiantMo, Marque, RAM, CapaciteStockage, Processeur) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($session, $ajouter_modele)) {
      mysqli_stmt_bind_param($stmt, 'sssss', $identifiantMo, $marque, $RAM, $capaciteStockage, $processeur);
      mysqli_stmt_execute($stmt);
    }
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
                            <?php echo TXT_ALERTEMAT; ?>
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
  }
  ?>


  <Table class="table table-striped table-hover sortable" style="text-align: center;">
    <thead style="text-align: center;">
      <TR>
        <th data-sortable="true">
         <?php echo TXT_NUM_MAT;?>
        </th>
        <th data-sortable="true">
        <?php echo TXT_TYPEMAT;?>
        </th>
        <th data-sortable="true">
         <?php echo TXT_MODELE;?>
        </th>
        <th data-sortable="true">
        <?php echo TXT_MARQUE;?>
        </th>
        <th data-sortable="true">
         <?php echo TXT_RAM;?>
        </th>
        <th data-sortable="true">
         <?php echo TXT_PROCESS;?>
        </th>
        <th data-sortable="true">
         <?php echo TXT_CAPS;?>
        </th>
        <th data-sortable="true">
         <?php echo TXT_DATERECEP;?>
        </Th>
        <th data-sortable="true">
         <?php echo TXT_ETAT;?>
        </Th>
        <th width="15%" data-sortable="false" data-field="bouttons">
        </th>
      </TR>
    </thead>


    <?php

    $parc = ("SELECT *
                  FROM materiel M, modele Mo
                  WHERE m.IdentifiantMo = mo.IdentifiantMo
                  AND m.StatutM LIKE 'Existant'");
    $result_parc = mysqli_query($session, $parc);
    ?>


    <?php
    foreach ($result_parc as $ligne) {
    ?>

      <form action="" method="POST">


        <tr>
          <td>
            <input type="text" readonly name="numeroM" class="form-control-plaintext text-center" value="<?php echo $ligne['IdentifiantM'] ?>">
          </td>
          <td>
            <input type="text" readonly name="" class="form-control-plaintext text-center" value="<?php echo $ligne['CategorieM'] ?>">
          </td>
          <td>
            <input type="text" readonly name="IdentifiantMo" class="form-control-plaintext text-center" value="<?php echo $ligne['IdentifiantMo'] ?>">
          </td>
          <td>
            <input type="text" name="Marque" class="form-control-plaintext text-center" value="<?php echo $ligne['Marque'] ?>" readonly>
          </td>
          <td>
            <input type="text" readonly name="" class="form-control-plaintext text-center" value="<?php echo $ligne['RAM'] ?>">
          </td>
          <td>
            <input type="text" readonly name="" class="form-control-plaintext text-center" value="<?php echo $ligne['Processeur'] ?>">
          </td>
          <td>
            <input type="text" readonly name="" class="form-control-plaintext text-center" value="<?php echo $ligne['CapaciteStockage'] ?>">
          </td>

          <td>
            <input type="text" readonly name="" class="form-control-plaintext text-center" value="<?php echo $ligne['DateReception'] ?>">
          </td>
          <td>
            <input type="text" readonly name="" class="form-control-plaintext text-center" value="<?php echo $ligne['EtatM'] ?>">
          </td>
          <td>
            <input type="submit" class='btn btn-secondary supprimer' name="supprimer" value="<?php echo TXT_SUPPRIMER;?>">
          </td>
        </tr>
      </form>

    <?php
    }
    ?>
  </Table>


  <form action="" method="POST">
    <input type="submit" class='btn btn-primary' name="ajouter" value="<?php echo TXT_AJOUTER;?>">
  </form>

  <?php
  if (isset($_POST['ajouter'])) {
  ?>

    <form action="" method="POST">
      <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">

              <div>
                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='numero' required>
                  <label for="floatingInput"><?php echo TXT_NUM_MAT; ?>:</label>
                </div>

                <label><?php echo TXT_TYPEMAT;?> :</label>
                <SELECT size="1" name="type" onchange="nouvelleCategorie()" id="categorie" class="form-select mb-3">
                  <?php
                  $categories = ("SELECT * FROM materiel GROUP BY CategorieM");
                  $result_categories = mysqli_query($session, $categories);
                  foreach ($result_categories as $row) {
                  ?>
                    <OPTION><?php echo $row['CategorieM']; ?></OPTION>
                  <?php
                  }
                  ?>
                  <option id="nouveau"><?php echo TXT_NOUVEAU;?></option>
                </SELECT>

                <div class="form-floating mb-3" id="nouvelleCategorie" style="display: none;">
                  <input type='text' class='form-control' placeholder=" " name='nouvelle_categorie'>
                  <label for="floatingInput"><?php echo TXT_NOUVELLECAT; ?> :</label>
                </div>

                <input type='date' class='form-control mb-3' placeholder=" " name='date' required>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='NumBonCommande' required>
                  <label for="floatingInput"><?php echo TXT_NUM_BON; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='IdentifiantMo' required>
                  <label for="floatingInput"><?php echo TXT_MODELE; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='Marque' required>
                  <label for="floatingInput"><?php echo TXT_MARQUE; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='RAM'>
                  <label for="floatingInput"><?php echo TXT_RAM; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='Processeur'>
                  <label for="floatingInput"><?php echo TXT_PROCESS; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='CapaciteStockage' required>
                  <label for="floatingInput"><?php echo TXT_CAPS; ?> :</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="col text-center">
                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo TXT_ANNULER; ?>">
                <input type="submit" class="btn btn-primary" name="valider_ajout" value="<?php echo VALIDER; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  <?php
    echo "<script>
    $(window).load(function() {
        $('#alerte').modal('show');
    });
</script>";
  }
  ?>

  <?php
  if (isset($_POST['supprimer'])) {
  ?>
    <FORM method="POST" action="">
      <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <input type='hidden' name='numero_materiel' value="<?php echo $_POST['numeroM']; ?>">

              <p><?php echo TXT_ALERTESUPP;?></p>
              <p><?php echo TXT_ALERTESUPP2;?></p>

            </div>
            <div class="modal-footer">
              <div class="col text-center">
                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo TXT_OUI; ?>">
                <input type="submit" class="btn btn-primary" name="supprimer_materiel" value="<?php echo TXT_NON; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </FORM>
  <?php
    echo "<script>
    $(window).load(function() {
        $('#alerte').modal('show');
    });
</script>";
  }
  ?>

  <?php

  if (isset($_POST['supprimer_materiel'])) {
    $numero = $_POST['numero_materiel'];

    $supprimer = "UPDATE materiel SET StatutM = 'Supprimé' WHERE IdentifiantM = ?";
    if ($stmt = mysqli_prepare($session, $supprimer)) {
      mysqli_stmt_bind_param($stmt, 's', $numero);
      mysqli_stmt_execute($stmt);
    }
  ?>

    <script type="text/javascript">
      document.location.href = 'entretien.php';
    </script>

  <?php
  }
  ?>

  <script>
    function nouvelleCategorie() {

      var nouveau = document.getElementById('categorie').value;
      if (nouveau == 'Nouveau') {
        document.getElementById('nouvelleCategorie').style.display = 'block';
      } else {
        document.getElementById('nouvelleCategorie').style.display = 'none';
      }

    }
  </script>


</body>

</html>
