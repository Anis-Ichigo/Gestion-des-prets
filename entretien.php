<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Entretien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
  <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">

  <link href="menu.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

  <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>


  <script src="sorttable.js"></script>


  <!--
  <script src="sorttable.js"></script>
  <script src="tri_tableaux.js"></script>
  -->
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
              <a class="nav-link active" href="entretien.php"><i class=" fi-rr-computer"></i> Entretien machine</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes réservations</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
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



  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Mise a jour du parc</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="RAZ.php">RAZ des machines </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="SAV.php">SAV</a>
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
  }
  ?>


  <Table class="table table-striped table-hover sortable" style="text-align: center;">
    <thead style="text-align: center;">
      <TR>
        <th data-sortable="true">
          Numéro du matériel
        </th>
        <th data-sortable="true">
          Type de matériel
        </th>
        <th data-sortable="true">
          Modèle
        </th>
        <th data-sortable="true">
          Marque
        </th>
        <th data-sortable="true">
          RAM
        </th>
        <th data-sortable="true">
          Processeur
        </th>
        <th data-sortable="true">
          Capacité de stockage
        </th>
        <th data-sortable="true">
          Date de réception
        </Th>
        <th data-sortable="true">
          Etat
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
            <input type="submit" class='btn btn-secondary supprimer' name="supprimer" value="Supprimer">
          </td>
        </tr>
      </form>

    <?php
    }
    ?>
  </Table>


  <form action="" method="POST">
    <input type="submit" class='btn btn-primary' name="ajouter" value="Ajouter">
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
                  <label for="floatingInput"><?php echo "Numéro du matériel"; ?>:</label>
                </div>

                <label>type de matériel :</label>
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
                  <option id="nouveau">Nouveau</option>
                </SELECT>

                <div class="form-floating mb-3" id="nouvelleCategorie" style="display: none;">
                  <input type='text' class='form-control' placeholder=" " name='nouvelle_categorie'>
                  <label for="floatingInput"><?php echo "Nouvelle catégorie"; ?> :</label>
                </div>

                <input type='date' class='form-control mb-3' placeholder=" " name='date' required>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='NumBonCommande' required>
                  <label for="floatingInput"><?php echo "Numéro du bon de commande"; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='IdentifiantMo' required>
                  <label for="floatingInput"><?php echo "Modèle"; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='Marque' required>
                  <label for="floatingInput"><?php echo "Marque"; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='RAM' required>
                  <label for="floatingInput"><?php echo "RAM"; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='Processeur' required>
                  <label for="floatingInput"><?php echo "Processeur"; ?> :</label>
                </div>

                <div class="form-floating mb-3">
                  <input type='text' class='form-control' placeholder=" " name='CapaciteStockage' required>
                  <label for="floatingInput"><?php echo "Capacité de stockage"; ?> :</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="col text-center">
                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo "Annuler"; ?>">
                <input type="submit" class="btn btn-primary" name="valider_ajout" value="Valider">
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

              <p>Êtes-vous sûr de vouloir supprimer ce matériel</p>

            </div>
            <div class="modal-footer">
              <div class="col text-center">
                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo "Non"; ?>">
                <input type="submit" class="btn btn-primary" name="supprimer_materiel" value="<?php echo "Oui"; ?>">
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