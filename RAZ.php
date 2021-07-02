<?php
require('decide-lang.php');
if (!$_SESSION['identifiant']) {
    header("Location: Index.html");
}
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo TXT_RAZ;?> </title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css" />
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
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
                            <a class="nav-link active" href="entretien.php"><i class=" fi-rr-computer"></i> <?php echo TXT_ACCUEIL_ENTRETIEN;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i>  <?php echo PROFIL;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i><?php echo TXT_ACCUEIL_REGLAGE;?></a>
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

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link " href="entretien.php"><?php echo TXT_MAJ_PARC;?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><?php echo TXT_RAZ;?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="SAV.php"><?php echo TXT_SAV;?></a>
            </li>
        </ul>

        <Table class="table table-striped table-hover">
            <TR>
                <th>
                <?php echo TXT_NUM_MAT;?>
                </Th>
                <th>
                <?php echo TXT_TYPEMAT;?>
                </Th>
                <th>
                <?php echo TXT_ETAT;?>
                </Th>
                <th>

                </Th>
            </TR>

            <?php


            $query_raz = "SELECT *
                FROM materiel M, emprunt E
                WHERE M.IdentifiantM = E.IdentifiantM
                AND M.StatutM = 'Existant'
                AND m.EtatM LIKE 'Non Dispo'
                AND E.DateRetour <= now()
                AND m.IdentifiantM NOT IN (SELECT p.IdentifiantM
                                      FROM probleme p, materiel m
                                      WHERE m.IdentifiantM = p.IdentifiantM
                                      AND p.Resolution LIKE 'Non résolu');";
            $result_raz = mysqli_query($session, $query_raz);
            if ($result_raz != NULL) {
                while ($ligne = mysqli_fetch_array($result_raz)) {
            ?>

                    <form action="reparer_materiel.php" method="POST">

                        <TR>
                            <TD>
                                <input type="text" name="numero" class="form-control-plaintext" value="<?php echo $ligne['IdentifiantM'] ?>">
                            </TD>
                            <TD>
                                <input type="text" name="type" class="form-control-plaintext" value="<?php echo $ligne['CategorieM'] ?>">
                            </TD>
                            <TD>
                                <input type="text" name="etat" class="form-control-plaintext" value="<?php echo $ligne['EtatM'] ?>">
                            </TD>
                            <TD>
                                <input type="submit" name="raz" class="btn btn-primary" value="<?php echo TXT_RAZ_TERMINE; ?>">
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