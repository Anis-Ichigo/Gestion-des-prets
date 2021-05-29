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
    <div class="menu">
      <div>
        <a href="Index.html"><img src="images/logo.jpg" alt="logo"></a>
      </div><b>Profil</b>
      <div><a href="profil.php"><i class="fas fa-users"></i></a><b>Nouvelle réservation</b></div>
      <div><a href="reservation.php"><i class="far fa-plus-square"></i></a><b>Forum</b></div>
      <div><a href="FAQ.html"><i class="far fa-comment-dots"></i></a><b>Entretien</b></div>
      <div><a href="entretien.php"><i class="fas fi-rr-settings"></i></a><b>Liste RDV</b></div>
      <div><a href="liste_RDV.php"><i class="far fa-check-square"></i></a><b>Liste des prêts</b></div>
      <div><a href="suivi_prets.php"><i class="far fa-handshake"></i></a><b>Statistiques</b></div>
      <div><a href="Statistiques.html"><i class="far fi-rr-stats"></i></a></div>
    </div>

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