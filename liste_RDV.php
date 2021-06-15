<!DOCTYPE html>
<html>

<head>
    <title>Valide</title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css" />
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
</head>

<body>
    <main>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid ">
        <img src="Bandeau.png" href="https://www.ut-capitole.fr/"/>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse " id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: auto">
            <li class="nav-item  text-center">
              <a class="nav-link " aria-current="page" href="#"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="#"><i class="fi-rr-file-check"></i> Mes réservations</a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link  active" href="#"><i class=" fi-rr-user"></i> Profil</a>
            </li>
            <?php
            if($role_pe == "Responsable"){
              ?>
              <li class="nav-item  text-center">
                <a class="nav-link" href="#"><i class="  fi-rr-calendar"></i> Liste des rendez-vous</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link" href="#"><i class=" fi-rr-info"></i> Suivi des prêts</a>
              </li>
              <li class="nav-item  text-center">
                <a class="nav-link" href="#"><i class=" fi-rr-stats"></i> Statistiques</a>
              </li>
              <?php
            }else if($role_pe == "Vacataire"){
              ?>
              <li class="nav-item  text-center">
                <a class="nav-link" href="#"><i class=" fi-rr-interrogation"></i> Entretien machine</a>
              </li>
              <?php
            }
            else if($role_pe != "Responsable"){
              ?>
              <li class="nav-item  text-center">
                <a class="nav-link" href="#"><i class=" fi-rr-interrogation"></i> FAQ</a>
              </li>
              <?php
            }
            ?>
            <li class="nav-item  text-center">
              <a class="nav-link " href="#"><i class=" fi-rr-settings"></i> Réglages</a>
            </li>
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

<?php
$role_pe = "SELECT * FROM personne WHERE IdentifiantPe = $_SESSION['identifiant']";
$resultat = mysqli_query($session, $role_pe);
$role_user = $resultat["Role_Pe"];
 ?>
        <div class="contenu">
            <h1>Liste des RDV</h1>

            <Table class="table table-striped table-hover">
                <TR>
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
                </TR>

                <?php
                require_once('Connexion_BD.php');

                $query_liste_rdv="
                            SELECT 	em.identifiantE as ide, em.prenomE as prenom, em.nomE as nom, e.dateEmprunt as date_rdv,
                                    cal.horaireCal as heure, e. identifiantM as idm,m. categorieM as type
                            FROM 	materiel m, emprunt e, emprunteur em, calendrier cal
                            WHERE 	em. identifiantE= e. identifiantE
                            AND		e. identifiantM = m. identifiantM
                            AND 	e. identifiantCal = cal. identifiantCal
                            ";
                $result_liste_rdv=mysqli_query($session, $query_liste_rdv);
                if($result_liste_rdv != null) {
                    while ( $ligne_liste_rdv=mysqli_fetch_array($result_liste_rdv)) {
                        echo('<TR>');
                        echo('<TD>' . $ligne_liste_rdv['ide'] . '</TD>');
                        echo('<TD>' . $ligne_liste_rdv['prenom'] . '</TD>');
                        echo('<TD>' . $ligne_liste_rdv['nom'] . '</TD>');
                        echo('<TD>' . $ligne_liste_rdv['date_rdv'] . '</TD>');
                        echo('<TD>' . $ligne_liste_rdv['heure'] . '</TD>');
                        echo('<TD>' . $ligne_liste_rdv['idm'] . '</TD>');
                        echo('<TD>' . $ligne_liste_rdv['type'] . '</TD>');
                        echo('</TR>');
                    }
                }
                ?>

            </Table>
        </div>
    </main>
</body>

</html>
