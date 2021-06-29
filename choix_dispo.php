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
                <a class="nav-link" href="definir_vacataire.php">Vacataire </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="choix_dispo.php">Choix disponibilitée</a>
            </li>
        </ul>

    <?php
    }

    /* "SELECT *
            FROM calendrier
            WHERE calendrier.JourCal='Lundi'
            AND calendrier.EtatCal = 'Disponible'
            AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                FROM emprunt, calendrier
                                                WHERE calendrier.JourCal = 'Lundi'
                                                AND emprunt.DateEmprunt = '$dt_lundi'
                                                AND emprunt.Statut_RDV LIKE 'a venir');"; */
    ?>


    <form action="" method="POST">

        <input type="button" style="text-align: center; font-weight:bold" name="date_lundi" class="accordion" value="<?php echo TXT_LUNDI; ?>">


        <table class="table">
            <?php

            $sql = "SELECT *
            FROM calendrier
            WHERE calendrier.JourCal='Lundi'
            AND calendrier.EtatCal = 'Disponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-primary' name='Lundi_dispo' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);

            $sql = "SELECT *
            FROM calendrier
            WHERE calendrier.JourCal='Lundi'
            AND calendrier.EtatCal = 'Indisponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-danger' name='Lundi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);

            ?>
        </table>

        <input type="button" style="text-align: center; font-weight:bold" name="date_mardi" class="accordion" value="<?php echo TXT_MARDI; ?>">

        <table class="table">
            <?php


            $sql = "SELECT *
FROM calendrier
WHERE calendrier.JourCal='Mardi'
AND calendrier.EtatCal = 'Disponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-primary' name='Mardi_dispo' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);

            $sql = "SELECT *
FROM calendrier
WHERE calendrier.JourCal='Mardi'
AND calendrier.EtatCal = 'Indisponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-danger' name='Mardi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);

            ?>
        </table>


        <input type="button" style="text-align: center; font-weight:bold" name="date_mercredi" class="accordion" value="<?php echo TXT_MERCREDI; ?>">

        <table class="table">

            <?php

            $sql = "SELECT *
FROM calendrier
WHERE calendrier.JourCal='Mercredi'
AND calendrier.EtatCal = 'Disponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-primary' name='Mercredi_dispo' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);

            $sql = "SELECT *
FROM calendrier
WHERE calendrier.JourCal='Mercredi'
AND calendrier.EtatCal = 'Indisponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-danger' name='Mercredi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);

            ?>
        </table>

        <input type="button" name="date_jeudi" style="text-align: center; font-weight:bold" class="accordion" value="<?php echo TXT_JEUDI; ?>">

        <table class="table">

            <?php

            $sql = "SELECT *
FROM calendrier
WHERE calendrier.JourCal='Jeudi'
AND calendrier.EtatCal = 'Disponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-primary' name='Jeudi_dispo' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);

            $sql = "SELECT *
FROM calendrier
WHERE calendrier.JourCal='Jeudi'
AND calendrier.EtatCal = 'Indisponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-danger' name='Jeudi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);
            ?>
        </table>


        <input type="button" name="date_vendredi" style="text-align: center; font-weight:bold" class="accordion" value="<?php echo TXT_VENDREDI ?>">


        <table class="table">

            <?php

            $sql = "SELECT *
FROM calendrier
WHERE calendrier.JourCal='Vendredi'
AND calendrier.EtatCal = 'Disponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-primary' name='Vendredi_dispo' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);

            $sql = "SELECT *
FROM calendrier
WHERE calendrier.JourCal='Vendredi'
AND calendrier.EtatCal = 'Indisponible'";
            $res = mysqli_query($session, $sql);
            $num = mysqli_num_rows($res);

            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $row = mysqli_fetch_array($res);
                    $horaire = date("H:i", strtotime($row['HoraireCal']));
                    if ($i % 8 == 0) echo '<tr>';
                    echo "<td>" . "<input type='submit' class='btn btn-danger' name='Vendredi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                }
            }
            mysqli_free_result($res);
            ?>
        </table>

    </form>

    <?php
    if (isset($_POST['Lundi_dispo']) || isset($_POST['Mardi_dispo']) || isset($_POST['Mercredi_dispo']) || isset($_POST['Jeudi_dispo']) || isset($_POST['Vendredi_dispo'])) {

        if (isset($_POST['Lundi_dispo'])) {
            $jour = "Lundi";
            $horaire = $_POST['Lundi_dispo'];
        } else if (isset($_POST['Mardi_dispo'])) {
            $jour = "Mardi";
            $horaire = $_POST['Mardi_dispo'];
        } else if (isset($_POST['Mercredi_dispo'])) {
            $jour = "Mercredi";
            $horaire = $_POST['Mercredi_dispo'];
        } else if (isset($_POST['Jeudi_dispo'])) {
            $jour = "Jeudi";
            $horaire = $_POST['Jeudi_dispo'];
        } else if (isset($_POST['Vendredi_dispo'])) {
            $jour = "Vendredi";
            $horaire = $_POST['Vendredi_dispo'];
        }


        $calendrier = ("UPDATE calendrier SET EtatCal = 'Indisponible' WHERE JourCal = '$jour' AND HoraireCal = '$horaire'");
        $result_calendrier = mysqli_query($session, $calendrier);
    ?>
        <script type="text/javascript">
            document.location.href = 'choix_dispo.php';
        </script>
        <?php
    }


    if (isset($_POST['Lundi']) || isset($_POST['Mardi']) || isset($_POST['Mercredi']) || isset($_POST['Jeudi']) || isset($_POST['Vendredi'])) {

        if (isset($_POST['Lundi'])) {
            $jour = "Lundi";
            $horaire = $_POST['Lundi'];
        } else if (isset($_POST['Mardi'])) {
            $jour = "Mardi";
            $horaire = $_POST['Mardi'];
        } else if (isset($_POST['Mercredi'])) {
            $jour = "Mercredi";
            $horaire = $_POST['Mercredi'];
        } else if (isset($_POST['Jeudi'])) {
            $jour = "Jeudi";
            $horaire = $_POST['Jeudi'];
        } else if (isset($_POST['Vendredi'])) {
            $jour = "Vendredi";
            $horaire = $_POST['Vendredi'];
        }

        $verif_creneau = "SELECT *
                            FROM calendrier, emprunt, personne
                            WHERE calendrier.JourCal='$jour'
                            AND emprunt.IdentifiantPe = personne.IdentifiantPe
                            AND emprunt.IdentifiantCal = calendrier.IdentifiantCal
                            AND calendrier.IdentifiantCal IN (SELECT emprunt.IdentifiantCal
                                                                FROM emprunt, calendrier
                                                                WHERE calendrier.JourCal = '$jour'
                                                                AND emprunt.DateEmprunt >= NOW()
                                                                AND emprunt.Statut_RDV LIKE 'a venir'
                                                                AND emprunt.IdentifiantPe = personne.IdentifiantPe
                                                                AND emprunt.IdentifiantCal = calendrier.IdentifiantCal)";
        $res_verif_creneau = mysqli_query($session, $verif_creneau);
        $rdv = mysqli_fetch_array($res_verif_creneau);

        if (mysqli_num_rows($res_verif_creneau) > 0) {
        ?>
            <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <div>

                                    <?php echo "Attention, vous avez un rendez-vous de prévu pour ce créneau avec " . $rdv['PrenomPe'] . " " . $rdv['NomPe'] . " que vous pouvez prévenir à l'adresse : " . $rdv['IdentifiantPe']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col text-center">
                                <input type="button" class="btn btn-primary" onclick='document.location.href="choix_dispo.php"' value="<?php echo TXT_OK; ?> ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            echo "<script>
        $(window).load(function() {
            $('#alerte').modal('show');
        });
    </script>";
        } else {

            $calendrier = ("UPDATE calendrier SET EtatCal = 'Disponible' WHERE JourCal = '$jour' AND HoraireCal = '$horaire'");
            $result_calendrier = mysqli_query($session, $calendrier);
        ?>
            <script type="text/javascript">
                document.location.href = 'choix_dispo.php';
            </script>
    <?php
        }
    }
    ?>