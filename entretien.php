<?php
session_start();
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
            <div><a href="forum.html"><i class="far fa-comment-dots"></i></a><b>Entretien</b></div>
            <div><a href="entretien.php"><i class="fas fi-rr-settings"></i></a><b>Liste RDV</b></div>
            <div><a href="liste_RDV.html"><i class="far fa-check-square"></i></a><b>Liste des prêts</b></div>
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
                    <a class="nav-link" href="RAZ.html">RAZ des machines </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SAV.html">SAV</a>
                </li>
            </ul>


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
                      require('Connexion_BD.php');

                      $query = "SELECT M.IdentifiantM, M.CatégorieM, M.DateAchat, M.EtatM, P.NomP
                      FROM materiel M, probleme P, resoudre R, s_occuper S
                      WHERE P.IdentifiantP = R.IdentifiantP
                      AND R.IdentifiantV = S.IdentifiantV
                      AND S.IdentifiantM = M.IdentifiantM
                      AND M.StatutM = 'Existant'";
                      $result= mysqli_query($session, $query);
                      if ($result != NULL){
                        while($ligne = mysqli_fetch_array($result)){
                          ?>

                          <tr>
                            <td>
                              <input type="text" name="numero" value="<?php echo $ligne['IdentifiantM'] ?>"></input>
                            </td>
                            <td>
                              <input type="text" name="" value="<?php echo $ligne['CatégorieM'] ?>"></input>
                            </td>
                            <td>
                              <input type="text" name="" value="<?php echo $ligne['DateAchat'] ?>"></input>
                            </td>
                            <td>
                              <input type="text" name="" value="<?php echo $ligne['EtatM'] ?>"></input>
                            </td>
                            <td>
                              <input type="text" name="" value="<?php echo $ligne['NomP'] ?>"></input>
                            </td>
                            <td>
                              <a type="button" href="supprimer_materiel.php"<i class='fas fa-trash-alt'></i></a>
                          </td>
                        </tr>
                      <?php
                    }
                        }
                     ?>

            </Table>
            <p>
            </p>
            <a type="button" class="btn btn-primary" href="ajouter_materiel.html">Ajouter</a>

        </div>
    </main>
</body>

</html>
