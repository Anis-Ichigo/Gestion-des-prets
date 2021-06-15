<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Delegue</title>
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
                <a class="nav-link active" href="suivi_prets.php"><i class=" fi-rr-info"></i> Suivi des prêts</a>
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
            <h1>Suivi des prêts</h1>
            <Table class="table table-striped table-hover">
                <TR>
                    <TH>
                        ID de l'emprunteur
                    </TH>
                    <TH>
                        Prénom
                    </TH>
                    <TH>
                        Nom
                    </TH>
                    <TH>
                        Numéro du materiel
                    </TH>
                    <TH>
                        Type de materiel
                    </TH>
                    <TH>
                        Email
                    </TH>
                    <TH>
                        Date de reservation
                    </TH>
                    <TH>
                        Date de retour prévue
                    </TH>
                    <TH>
                        Problème
                    </TH>
                </TR>

                <?php

                $emprunt_avec_probleme = ("SELECT *
                FROM emprunt, personne, probleme, materiel
                WHERE emprunt.IdentifiantPe = personne.IdentifiantPe
                AND emprunt.IdentifiantM = materiel.IdentifiantM
                AND probleme.IdentifiantPe = personne.IdentifiantPe
                AND probleme.IdentifiantM = materiel.IdentifiantM
                AND probleme.Resolution LIKE 'Non résolu';");


                $result_emprunt_avec_probleme = mysqli_query($session, $emprunt_avec_probleme);
                foreach ($result_emprunt_avec_probleme as $row) {
                ?>

                    <TR>
                        <TD>
                            <?php echo $row['IdentifiantPe'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['PrenomPe'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['NomPe'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['IdentifiantM'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['CategorieM'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['EmailPe'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['DateEmprunt'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['DateRetour'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['NomP'] ?>
                        </TD>
                    </TR>

                <?php
                }
                ?>

                <?php

                $emprunt_sans_probleme = ("SELECT personne.IdentifiantPe, personne.PrenomPe, personne.NomPe, materiel.IdentifiantM, materiel.CategorieM, personne.EmailPe, emprunt.DateEmprunt, emprunt.DateRetour
                                            FROM emprunt, personne, probleme, materiel
                                            WHERE emprunt.IdentifiantPe = personne.IdentifiantPe
                                            AND emprunt.IdentifiantM = materiel.IdentifiantM
                                            AND materiel.IdentifiantM NOT IN (SELECT probleme.IdentifiantM
                                                                        FROM probleme, materiel
                                                                        WHERE probleme.IdentifiantM = materiel.IdentifiantM
                                                                        AND probleme.Resolution LIKE 'Non résolu')
                                            GROUP BY materiel.IdentifiantM;");



                $result_emprunt_sans_probleme = mysqli_query($session, $emprunt_sans_probleme);
                foreach ($result_emprunt_sans_probleme as $row) {
                ?>

                    <TR>
                        <TD>
                            <?php echo $row['IdentifiantPe'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['PrenomPe'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['NomPe'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['IdentifiantM'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['CategorieM'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['EmailPe'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['DateEmprunt'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['DateRetour'] ?>
                        </TD>
                        <TD>
                        </TD>
                    </TR>

                <?php
                }
                ?>

            </Table>
            fonction pour prevenir par mail 1 semaine avant la date de retour prévue + fonction pour rappel une fois la date depassée (essayer d'automatiser)
        </div>
    </main>

</body>

</html>