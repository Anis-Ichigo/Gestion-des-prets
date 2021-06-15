<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
?>
<!DOCTYPE html>
<html>

<head>
  <title>entretien</title>
  <meta charset="utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="Style.css" />
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
                            <a class="nav-link active" href="entretien.php"><i class=" fi-rr-interrogation"></i> Entretien machine</a>
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


    <div class="contenu">
      <h1>Entretien</h1>

      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Mise a jour du parc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="RAZ.php">RAZ des machines </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="SAV.html">SAV</a>
        </li>
      </ul>

      <?php
      if (isset($_POST['ajouter'])) {

        $numero = $_POST["numero"];
        $type = $_POST["type"];
        $date = $_POST["date"];
        $etat = 'Dispo';
        $statut = 'Existant';


        $ajouter = "INSERT INTO materiel (IdentifiantM, DateAchat, EtatM, CategorieM, StatutM) VALUES (?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($session, $ajouter)) {
          mysqli_stmt_bind_param($stmt, 'sssss', $numero, $date, $etat, $type, $statut);
          mysqli_stmt_execute($stmt);
        }
      }
      ?>


      <Table class="table table-striped table-hover">
        <TR>
          <th>
            Numéro du matériel
          </th>
          <th>
            Type de matériel
          </th>
          <th>
            Date d'achat
          </Th>
          <th>
            Etat
          </Th>
          <th>
            Problème
          </Th>
          <th width="15%">

          </th>
        </TR>

        <?php

        $query_avec_probleme = ("SELECT *
        FROM materiel M, emprunt E, probleme P
        WHERE e.IdentifiantM = m.IdentifiantM
        AND p.IdentifiantM = m.IdentifiantM
        AND p.Resolution LIKE 'Non résolu'
        AND m.StatutM LIKE 'Existant';");
        $result_query_avec_probleme = mysqli_query($session, $query_avec_probleme);

        foreach ($result_query_avec_probleme as $ligne) {


        ?>

          <form action="supprimer_materiel.php" method="POST">
            <tr>
              <td>
                <input type="text" readonly name="numero" class="form-control-plaintext" value="<?php echo $ligne['IdentifiantM'] ?>">
              </td>
              <td>
                <input type="text" readonly name="" class="form-control-plaintext" value="<?php echo $ligne['CategorieM'] ?>">
              </td>
              <td>
                <input type="text" readonly name="" class="form-control-plaintext" value="<?php echo $ligne['DateAchat'] ?>">
              </td>
              <td>
                <input type="text" readonly name="" class="form-control-plaintext" value="<?php echo $ligne['EtatM'] ?>">
              </td>
              <td>
                <input type="text" readonly name="" class="form-control-plaintext" value="<?php echo $ligne['NomP'] ?>">
              </td>
              <td>
                <input type="submit" class='btn btn-secondary' name="supprimer" value="Supprimer">
              </td>
            </tr>
          </form>

        <?php
        }


        $query_sans_probleme = ("SELECT *
                                  FROM materiel m
                                  WHERE m.IdentifiantM NOT IN (SELECT p.IdentifiantM
                                                              FROM probleme p, materiel m
                                                              WHERE p.IdentifiantM = m.IdentifiantM
                                                              AND p.Resolution LIKE 'Non résolu')
                                  AND m.StatutM LIKE 'Existant';");
        $result_query_sans_probleme = mysqli_query($session, $query_sans_probleme);

        foreach ($result_query_sans_probleme as $ligne) {
        ?>

          <form action="supprimer_materiel.php" method="POST">
            <tr>
              <td>
                <input type="text" readonly name="numero" class="form-control-plaintext" value="<?php echo $ligne['IdentifiantM'] ?>">
              </td>
              <td>
                <input type="text" readonly name="" class="form-control-plaintext" value="<?php echo $ligne['CategorieM'] ?>">
              </td>
              <td>
                <input type="text" readonly name="" class="form-control-plaintext" value="<?php echo $ligne['DateAchat'] ?>">
              </td>
              <td>
                <input type="text" readonly name="" class="form-control-plaintext" value="<?php echo $ligne['EtatM'] ?>">
              </td>
              <td>
              </td>
              <td>
                <input type="submit" class='btn btn-secondary' name="supprimer" value="Supprimer">
              </td>
            </tr>
          </form>

        <?php
        }

        ?>

      </Table>
      <p>
      </p>
      <a type="button" class="btn btn-primary" href="ajouter_materiel.php">Ajouter</a>

    </div>

  </main>
</body>

</html>