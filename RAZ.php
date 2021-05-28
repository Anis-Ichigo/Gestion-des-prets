<?php
session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Notif</title>
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
                <b>Profil</b>
            </div>
            <div><a href="profil.php"><i class="fas fa-users"></i></a><b>Nouvelle réservation</b></div>
            <div><a href="reservation.php"><i class="far fa-plus-square"></i></a><b>Forum</b></div>
            <div><a href="forum.html"><i class="far fa-comment-dots"></i></a><b>Entretien</b></div>
            <div><a href="entretien.php"><i class="fas fi-rr-settings"></i></a><b>Liste RDV</b></div>
            <div><a href="liste_RDV.php"><i class="far fa-check-square"></i></a><b>Liste des prêts</b></div>
            <div><a href="suivi_prets.php"><i class="far fa-handshake"></i></a><b>Statistiques</b></div>
            <div><a href="Statistiques.html"><i class="far fi-rr-stats"></i></a></div>
        </div>

        <div class="contenu">
            <h1>Entretien</h1>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="entretien.php">Mise a jour du parc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">RAZ des machines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SAV.html">SAV</a>
                </li>
            </ul>

            <Table class="table table-striped table-hover">
                <TR>
                    <th>
                        Numéro du materiel
                    </Th>
                    <th>
                        Date de pret
                    </Th>
                    <th>
                        Date retour
                    </Th>
                    <th>
                        Type de materiel
                    </Th>
                    <th>
                        Etat
                    </Th>
                    <th>
                        Problème
                    </Th>
                    <th>

                    </Th>
                </TR>

                <?php
                require('Connexion_BD.php');

                $query_pb = "SELECT M.IdentifiantM, E.DateEmprunt,E.DateRetour, M.CategorieM, M.EtatM, P.NomP
                            FROM materiel M, emprunt E, probleme P
                            WHERE M.IdentifiantM = E.IdentifiantM
                            AND M.IdentifiantM = P.IdentifiantM
                            AND M.EtatM = 'Non dispo'";
                $result_pb = mysqli_query($session, $query_pb);
                if ($result_pb != NULL){
                  while ($ligne = mysqli_fetch_array($result_pb)) {
                 ?>
              <form class="" action="reparer_materiel.php" method="post">
                <TR>
                    <TD>
                        <input type="text" name="numero" class="form-control-plaintext" value="<?php echo $ligne['IdentifiantM'] ?>">
                    </TD>
                    <TD>
                        <input type="text" name="datepret" class="form-control-plaintext" value="<?php echo $ligne['DateEmprunt'] ?>">
                    </TD>
                    <TD>
                        <input type="text" name="datepret" class="form-control-plaintext" value="<?php echo $ligne['DateRetour'] ?>">
                    </TD>
                    <TD>
                        <input type="text" name="type" class="form-control-plaintext" value="<?php echo $ligne['CategorieM'] ?>">
                    </TD>
                    <TD>
                      <input type="text" name="etat" class="form-control-plaintext" value="<?php echo $ligne['EtatM'] ?>">
                    </TD>
                    <TD>
                        <input type="text" name="probleme" class="form-control-plaintext" value="<?php echo $ligne['NomP'] ?>">
                    </TD>
                    <TD>

                        <input type="submit" id="pb" class="btn btn-primary" value="Problème Résolu">

                    </TD>
                </TR>
              </form>

              <?php
                }
            }

            $query_raz = "SELECT M.IdentifiantM, E.DateEmprunt, E.DateRetour, M.CategorieM, M.EtatM
                        FROM materiel M, emprunt E
                        WHERE M.IdentifiantM = E.IdentifiantM
                        AND M.IdentifiantM = P.IdentifiantM
                        AND M.EtatM = 'Non dispo'
                        AND E.DateRetour <= strftime('%Y-%m-%d')";
            $result_raz = mysqli_query($session, $query_raz);
            if ($result_raz != NULL){
              while ($ligne = mysqli_fetch_array($result_raz)) {
               ?>
               <form class="" action="reparer_materiel.php" method="post">
                 <TR>
                     <TD>
                         <input type="text" name="numero" class="form-control-plaintext" value="<?php echo $ligne['IdentifiantM'] ?>">
                     </TD>
                     <TD>
                         <input type="text" name="datepret" class="form-control-plaintext" value="<?php echo $ligne['DateEmprunt'] ?>">
                     </TD>
                     <TD>
                         <input type="text" name="type" class="form-control-plaintext" value="<?php echo $ligne['DateRetour'] ?>">
                     </TD>
                     <TD>
                       <input type="text" name="etat" class="form-control-plaintext" value="<?php echo $ligne['CategorieM'] ?>">
                     </TD>
                     <TD>
                         <input type="text" name="probleme" class="form-control-plaintext" value="<?php echo $ligne['EtatM'] ?>">
                     </TD>
                     <TD>
                    </TD>
                     <TD>
                         <input type="submit" class="btn btn-primary" value="RAZ Terminée">
                     </TD>
                 </TR>
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
