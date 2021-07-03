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
    <title>reservation</title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styletest.css" type="text/css">
    <link rel="stylesheet" href="menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



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
                            <a class="nav-link" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> <?php echo LISTE_RDV; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> <?php echo SUIVI_PRET; ?> </a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="Statistiques.php"><i class=" fi-rr-stats"></i> <?php echo STATS; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" aria-current="page" href="reservation_portable.php" style="background-color: none; color: black"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER; ?> </a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE; ?></a>
                        </li>
                    <?php
                    } else if ($role_user == "Vacataire") {
                    ?>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="entretien.php"><i class=" fi-rr-computer"></i> <?php echo TXT_ACCUEIL_ENTRETIEN; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" style="background-color: none; color: black" aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE; ?></a>
                        </li>
                    <?php
                    } else if ($role_user == "Emprunteur") {
                    ?>
                        <li class="nav-item  text-center">
                            <a class="nav-link" style="background-color: none; color:black" aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i><?php echo TXT_ACCUEIL_RESERVATION; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="FAQ.php"><i class=" fi-rr-interrogation"></i> <?php echo FAQ; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE; ?></a>
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

    <br><br>


    <?php
    $semaine = mysqli_query($session, "SELECT * FROM personne WHERE IdentifiantPe = '$identifiant'");
    foreach ($semaine as $sem) {
        $s = $sem['semaine'];
        $d = $sem['date_r'];
        $c = $sem['categorie'];
    }

    ?>
    <form method="POST" action="" id='form'>

        <table>
            <!--Materiel, comment recuperer les donnees dans select-->
            <tr>
                <td>
                    <label><?php echo TXT_DEMANDE_CONCERNE; ?> :</label>
                </td>
                <td>
                    <SELECT name="categorie" style="width:100%" required>
                        <?php
                        if ($c != NULL) {
                            $res = mysqli_query($session, "SELECT CategorieM FROM materiel WHERE EtatM LIKE 'Dispo' AND StatutM LIKE 'Existant' AND CategorieM NOT LIKE '$c' GROUP BY CategorieM");

                            echo "<Option> $c </Option>";

                            while ($tab = mysqli_fetch_assoc($res)) {
                                $cat = addslashes($tab["CategorieM"]);
                                echo "<Option> $cat </Option>";
                            }
                        } else {
                            $res = mysqli_query($session, "SELECT CategorieM FROM materiel WHERE EtatM LIKE 'Dispo' AND StatutM LIKE 'Existant' GROUP BY CategorieM");

                            while ($tab = mysqli_fetch_assoc($res)) {
                                $cat = addslashes($tab["CategorieM"]);
                                echo "<Option> $cat </Option>";
                            }
                        }

                        ?>
                    </SELECT>
                </td>
                <td>(*)</td>
            </tr>
            <!--Date de retour-->
            <tr>
                <td>
                    <?php echo TXT_CHOIX_RETOUR; ?> :
                </td>
                <td>
                    <?php if ($d != NULL) {
                    ?>
                        <input type="date" class="form-control" name="DateRetour" id="DateRetour" onchange="test()" placeholder="dd-mm-yyyy" value="<?php echo $d ?>" required>
                    <?php
                    } else {
                    ?>
                        <input type="date" class="form-control" name="DateRetour" id="DateRetour" onchange="test()" placeholder="dd-mm-yyyy" required>
                    <?php
                    }
                    ?>
                </td>
                <td>
                    (*)
                </td>
                </div>
            </tr>
        </table>


        <br>

        <p><?php echo TXT_CHOIX_CRENEAU; ?></p>
        <!--les creneaux-->
        <!--input sans icon, button avec icon mais toujours submit automatiquement-->


        <!-- /*<input type="date" class="form-control" name="date_RDV" id="date_rdv" onchange="test()"> */ -->


        <?php /*  SELECT *
FROM calendrier
WHERE calendrier.JourCal='Vendredi'
AND calendrier.EtatCal = 'Disponible'
AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                      FROM emprunt, calendrier
                                      WHERE calendrier.JourCal = 'Vendredi'
                                      AND emprunt.DateEmprunt = '2021-06-25'
                                      AND emprunt.Statut_RDV LIKE 'a venir'); */

        ?>
        <?php if ($s > 0) {
        ?>
            <input type="submit" name="precedent" style="font-size:210%; float: left; background-color: transparent; border-style: none; margin-left:5% " value="&lsaquo;">
        <?php
        }
        ?>
        <input type="submit" name="suivant" style="font-size:210%; float: right; background-color: transparent; border-style: none;margin-right: 5%" value="&rsaquo;">

        <?php
        $semaine = mysqli_query($session, "SELECT * FROM personne WHERE IdentifiantPe = '$identifiant'");
        foreach ($semaine as $sem) {
            $s = $sem['semaine'];
            $s2 = $s + 1;
            $s3 = $s - 1;
        }

        if (isset($_POST['precedent'])) {
            $s -= 1;
            $precedent = mysqli_query($session, "UPDATE personne SET semaine = '$s' WHERE IdentifiantPe = '$identifiant'");

            $d = $_POST['DateRetour'];
            $c = $_POST['categorie'];

            $param_date_r = mysqli_query($session, "UPDATE personne SET date_r = '$d' WHERE IdentifiantPe = '$identifiant'");
            $param_categorie = mysqli_query($session, "UPDATE personne SET categorie = '$c' WHERE IdentifiantPe = '$identifiant'");

        ?>
            <script type="text/javascript">
                document.location.href = 'reservation_portable.php';
            </script>
        <?php
        } else if (isset($_POST['suivant'])) {
            $s += 1;
            $suivant = mysqli_query($session, "UPDATE personne SET semaine = '$s' WHERE IdentifiantPe = '$identifiant'");

            $d = $_POST['DateRetour'];
            $c = $_POST['categorie'];

            $param_date_r = mysqli_query($session, "UPDATE personne SET date_r = '$d' WHERE IdentifiantPe = '$identifiant'");
            $param_categorie = mysqli_query($session, "UPDATE personne SET categorie = '$c' WHERE IdentifiantPe = '$identifiant'");

        ?>
            <script type="text/javascript">
                document.location.href = 'reservation_portable.php';
            </script>
        <?php

        }

        ?>


        <?php

        if (($s == 0 && date('w') == 1) || ($s > 0 && date('w') > 1)) {
            $date_lundi = strftime("%Y-%m-%d", strtotime("+{$s} monday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s} monday"));
                                                                                                        echo TXT_LUNDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s == 0 && (date('w') < 1) || ($s > 0 && date('w') <= 1)) {
            $date_lundi = strftime("%Y-%m-%d", strtotime("+{$s2} monday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s2} monday"));
                                                                                                        echo TXT_LUNDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') <= 1)) {
            $date_lundi = strftime("%Y-%m-%d", strtotime("$s monday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s monday"));
                                                                                                        echo TXT_LUNDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') > 1)) {
            $date_lundi = strftime("%Y-%m-%d", strtotime("$s3 monday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s3 monday"));
                                                                                                        echo TXT_LUNDI . " $premierJour";
                                                                                                        ?>">

            <?php
        } else {
            $date_lundi = strftime("%Y-%m-%d", strtotime("last monday"));
            if ($date_lundi < strftime("%Y-%m-%d", strtotime("now"))) {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_lundi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last monday"));
                                                                                                                                echo TXT_LUNDI . " $premierJour";
                                                                                                                                ?>" disabled>

            <?php
            } else {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_lundi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last monday"));
                                                                                                                                echo TXT_LUNDI . " $premierJour";
                                                                                                                                ?>" disabled>

        <?php
            }
        }
        ?>

        <div class="panel">
            <table class="table">
                <?php

                if ($premierJour == Date("d/m/Y")) {
                    $HeureActuelle = date('H:i:s', time());
                    $sql = "SELECT *
            FROM calendrier
            WHERE calendrier.JourCal='Lundi'
            AND calendrier.EtatCal = 'Disponible'
            AND HoraireCal >= '$HeureActuelle'
            AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                FROM emprunt, calendrier
                                                WHERE calendrier.JourCal = 'Lundi'
                                                AND (emprunt.DateEmprunt = '$date_lundi'
                                                    OR emprunt.DateRetour = '$date_lundi')
                                                AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                } else {
                    $sql = "SELECT *
            FROM calendrier
            WHERE calendrier.JourCal='Lundi'
            AND calendrier.EtatCal = 'Disponible'
            AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                FROM emprunt, calendrier
                                                WHERE calendrier.JourCal = 'Lundi'
                                                AND (emprunt.DateEmprunt = '$date_lundi'
                                                    OR emprunt.DateRetour = '$date_lundi')
                                                AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                }
                if ($num > 0) {
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($res);
                        $horaire = date("H:i", strtotime($row['HoraireCal']));
                        if ($i % 6 == 0) echo '<tr>';
                        echo "<td>" . "<input type='submit' class='btn btn-primary' name='Lundi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                    }
                }
                mysqli_free_result($res);

                ?>
            </table>
        </div>
        <!--
        <div class="panel">
            <p>
               <?php
                /* un creneau dans chaque ligne
                $res = mysqli_query($session, "SELECT * FROM calendrier WHERE JourCal='Lundi' AND EtatCal = 'Disponible'");
                while ($tab = mysqli_fetch_assoc($res)) {
                    $horaire = $tab["HoraireCal"];

                    echo "<Table class='table table-striped table-hover text-center'> <TR> <TD><input type='submit' class='btn btn-primary' name='horaire_lundi' value='$horaire'> </td></TR> </table>";
                }
        */
                ?>

            </p>
        </div>
        -->

        <?php

        if (($s == 0 && date('w') == 2) || ($s > 0 && date('w') > 2)) {
            $date_mardi = strftime("%Y-%m-%d", strtotime("+{$s} tuesday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s} tuesday"));
                                                                                                        echo TXT_MARDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s == 0 && (date('w') < 2) || ($s > 0 && date('w') <= 2)) {
            $date_mardi = strftime("%Y-%m-%d", strtotime("+{$s2} tuesday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s2} tuesday"));
                                                                                                        echo TXT_MARDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') <= 2)) {
            $date_mardi = strftime("%Y-%m-%d", strtotime("$s tuesday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s tuesday"));
                                                                                                        echo TXT_MARDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') > 2)) {
            $date_mardi = strftime("%Y-%m-%d", strtotime("$s3 tuesday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s3 tuesday"));
                                                                                                        echo TXT_MARDI . " $premierJour";
                                                                                                        ?>">

            <?php
        } else {
            $date_mardi = strftime("%Y-%m-%d", strtotime("last tuesday"));
            if ($date_mardi < strftime("%Y-%m-%d", strtotime("now"))) {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_mardi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last tuesday"));
                                                                                                                                echo TXT_MARDI . " $premierJour";
                                                                                                                                ?>" disabled>

            <?php
            } else {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_mardi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last tuesday"));
                                                                                                                                echo TXT_MARDI . " $premierJour";
                                                                                                                                ?>" disabled>
        <?php
            }
        }
        ?>

        <div class="panel">
            <table class="table">
                <?php

                if ($premierJour == Date("d/m/Y")) {
                    $HeureActuelle = date('H:i:s', time());
                    $sql = "SELECT *
                    FROM calendrier
                    WHERE calendrier.JourCal='Mardi'
                    AND calendrier.EtatCal = 'Disponible'
                    AND HoraireCal >= '$HeureActuelle'
                    AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                        FROM emprunt, calendrier
                                                        WHERE calendrier.JourCal = 'Mardi'
                                                        AND (emprunt.DateEmprunt = '$date_mardi'
                                                            OR emprunt.DateRetour = '$date_mardi')
                                                        AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                } else {
                    $sql = "SELECT *
                    FROM calendrier
                    WHERE calendrier.JourCal='Mardi'
                    AND calendrier.EtatCal = 'Disponible'
                    AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                        FROM emprunt, calendrier
                                                        WHERE calendrier.JourCal = 'Mardi'
                                                        AND (emprunt.DateEmprunt = '$date_mardi'
                                                            OR emprunt.DateRetour = '$date_mardi')
                                                        AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                }
                if ($num > 0) {
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($res);
                        $horaire = date("H:i", strtotime($row['HoraireCal']));
                        if ($i % 6 == 0) echo '<tr>';
                        echo "<td>" . "<input type='submit' class='btn btn-primary' name='Mardi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                    }
                }
                mysqli_free_result($res);

                ?>
            </table>
        </div>


        <?php
        if ($s == 0 && (date('w') == 3) || ($s > 0 && date('w') > 3)) {
            $date_mercredi = strftime("%Y-%m-%d", strtotime("+{$s} wednesday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s} wednesday"));
                                                                                                        echo TXT_MERCREDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s == 0 && (date('w') < 3) || ($s > 0 && date('w') <= 3)) {
            $date_mercredi = strftime("%Y-%m-%d", strtotime("+{$s2} wednesday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s2} wednesday"));
                                                                                                        echo TXT_MERCREDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') <= 3)) {
            $date_mercredi = strftime("%Y-%m-%d", strtotime("$s wednesday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s wednesday"));
                                                                                                        echo TXT_MERCREDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') > 3)) {
            $date_mercredi = strftime("%Y-%m-%d", strtotime("$s3 wednesday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s3 wednesday"));
                                                                                                        echo TXT_MERCREDI . " $premierJour";
                                                                                                        ?>">

            <?php
        } else {
            $date_mercredi = strftime("%Y-%m-%d", strtotime("last wednesday"));
            if ($date_mercredi < strftime("%Y-%m-%d", strtotime("now"))) {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_mercredi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last wednesday"));
                                                                                                                                echo TXT_MERCREDI . " $premierJour";
                                                                                                                                ?>" disabled>

            <?php
            } else {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_mercredi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last wednesday"));
                                                                                                                                echo TXT_MERCREDI . " $premierJour";
                                                                                                                                ?>" disabled>
        <?php
            }
        }
        ?>

        <div class="panel">
            <table class="table">

                <?php

                if ($premierJour == Date("d/m/Y")) {
                    $HeureActuelle = date('H:i:s', time());
                    $sql = "SELECT *
                    FROM calendrier
                    WHERE calendrier.JourCal='Mercredi'
                    AND calendrier.EtatCal = 'Disponible'
                    AND HoraireCal >= '$HeureActuelle'
                    AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                        FROM emprunt, calendrier
                                                        WHERE calendrier.JourCal = 'Mercredi'
                                                        AND (emprunt.DateEmprunt = '$date_mercredi'
                                                            OR emprunt.DateRetour = '$date_mercredi')
                                                        AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                } else {
                    $sql = "SELECT *
                    FROM calendrier
                    WHERE calendrier.JourCal='Mercredi'
                    AND calendrier.EtatCal = 'Disponible'
                    AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                        FROM emprunt, calendrier
                                                        WHERE calendrier.JourCal = 'Mercredi'
                                                        AND (emprunt.DateEmprunt = '$date_mercredi'
                                                            OR emprunt.DateRetour = '$date_mercredi')
                                                        AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                }
                if ($num > 0) {
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($res);
                        $horaire = date("H:i", strtotime($row['HoraireCal']));
                        if ($i % 6 == 0) echo '<tr>';
                        echo "<td>" . "<input type='submit' class='btn btn-primary' name='Mercredi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                    }
                }
                mysqli_free_result($res);

                ?>
            </table>
        </div>

        <?php
        if ($s == 0 && (date('w') == 4) || ($s > 0 && date('w') > 4)) {
            $date_jeudi = strftime("%Y-%m-%d", strtotime("+{$s} thursday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s} thursday"));
                                                                                                        echo TXT_JEUDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s == 0 && (date('w') < 4) || ($s > 0 && date('w') <= 4)) {
            $date_jeudi = strftime("%Y-%m-%d", strtotime("+{$s2} thursday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s2} thursday"));
                                                                                                        echo TXT_JEUDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') <= 4)) {
            $date_jeudi = strftime("%Y-%m-%d", strtotime("$s thursday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s thursday"));
                                                                                                        echo TXT_JEUDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') > 4)) {
            $date_jeudi = strftime("%Y-%m-%d", strtotime("$s3 thursday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s3 thursday"));
                                                                                                        echo TXT_JEUDI . " $premierJour";
                                                                                                        ?>">

            <?php
        } else {
            $date_jeudi = strftime("%Y-%m-%d", strtotime("last thursday"));
            if ($date_jeudi < strftime("%Y-%m-%d", strtotime("now"))) {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_jeudi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last thursday"));
                                                                                                                                echo TXT_JEUDI . " $premierJour";
                                                                                                                                ?>" disabled>

            <?php
            } else {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_jeudi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last thursday"));
                                                                                                                                echo TXT_JEUDI . " $premierJour";
                                                                                                                                ?>" disabled>
        <?php
            }
        }
        ?>


        <div class="panel">
            <table class="table">

                <?php
                if ($premierJour == Date("d/m/Y")) {
                    $HeureActuelle = date('H:i:s', time());
                    $sql = "SELECT *
                    FROM calendrier
                    WHERE calendrier.JourCal='Jeudi'
                    AND calendrier.EtatCal = 'Disponible'
                    AND HoraireCal >= '$HeureActuelle'
                    AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                        FROM emprunt, calendrier
                                                        WHERE calendrier.JourCal = 'Jeudi'
                                                        AND (emprunt.DateEmprunt = '$date_jeudi'
                                                            OR emprunt.DateRetour = '$date_jeudi')
                                                        AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                } else {
                    $sql = "SELECT *
                    FROM calendrier
                    WHERE calendrier.JourCal='Jeudi'
                    AND calendrier.EtatCal = 'Disponible'
                    AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                        FROM emprunt, calendrier
                                                        WHERE calendrier.JourCal = 'Jeudi'
                                                        AND (emprunt.DateEmprunt = '$date_jeudi'
                                                            OR emprunt.DateRetour = '$date_jeudi')
                                                        AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                }

                if ($num > 0) {
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($res);
                        $horaire = date("H:i", strtotime($row['HoraireCal']));
                        if ($i % 6 == 0) echo '<tr>';
                        echo "<td>" . "<input type='submit' class='btn btn-primary' name='Jeudi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                    }
                }
                mysqli_free_result($res);
                ?>
            </table>
        </div>

        <!-- button avec icon
        <button class="accordion">
            <?php
            $premierJour = strftime("%Y-%m-%d", strtotime("Friday"));
            echo "Vendredi" . " $premierJour";
            ?>
        </button>
        -->


        <?php
        if (($s == 0 && date('w') == 5) || ($s > 0 && date('w') > 5)) {
            $date_vendredi = strftime("%Y-%m-%d", strtotime("+{$s} friday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s} friday"));
                                                                                                        echo TXT_VENDREDI . " $premierJour";
                                                                                                        ?>">
        <?php
        } else if ($s == 0 && (date('w') < 5) || ($s > 0 && date('w') <= 5)) {
            $date_vendredi = strftime("%Y-%m-%d", strtotime("+{$s2} friday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("+{$s2} friday"));
                                                                                                        echo TXT_VENDREDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') <= 5)) {
            $date_vendredi = strftime("%Y-%m-%d", strtotime("$s Friday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s Friday"));
                                                                                                        echo TXT_VENDREDI . " $premierJour";
                                                                                                        ?>">

        <?php
        } else if ($s < 0 && (date('w') > 5)) {
            $date_vendredi = strftime("%Y-%m-%d", strtotime("$s3 Friday"));
        ?>
            <input type="button" style="text-align: center; font-weight:bold" class="accordion" value="<?php
                                                                                                        $premierJour = strftime("%d/%m/%Y", strtotime("$s3 Friday"));
                                                                                                        echo TXT_VENDREDI . " $premierJour";
                                                                                                        ?>">

            <?php
        } else {
            $date_vendredi = strftime("%Y-%m-%d", strtotime("last Friday"));
            if ($date_vendredi < strftime("%Y-%m-%d", strtotime("now"))) {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_vendredi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last Friday"));
                                                                                                                                echo TXT_VENDREDI . " $premierJour";
                                                                                                                                ?>" disabled>

            <?php
            } else {
            ?>
                <input type="button" style="text-align: center; font-weight:bold" name="date_vendredi" class="accordion" value="<?php
                                                                                                                                $premierJour = strftime("%d/%m/%Y", strtotime("last Friday"));
                                                                                                                                echo TXT_VENDREDI . " $premierJour";
                                                                                                                                ?>" disabled>
        <?php
            }
        }
        ?>



        <div class="panel">
            <table class="table">

                <?php


                if ($premierJour == Date("d/m/Y")) {
                    $HeureActuelle = date('H:i:s', time());
                    $sql = "SELECT *
                    FROM calendrier
                    WHERE calendrier.JourCal='Vendredi'
                    AND calendrier.EtatCal = 'Disponible'
                    AND HoraireCal >= '$HeureActuelle'
                    AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                        FROM emprunt, calendrier
                                                        WHERE calendrier.JourCal = 'Vendredi'
                                                        AND (emprunt.DateEmprunt = '$date_vendredi'
                                                            OR emprunt.DateRetour = '$date_vendredi')
                                                        AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                } else {
                    $sql = "SELECT *
                    FROM calendrier
                    WHERE calendrier.JourCal='Vendredi'
                    AND calendrier.EtatCal = 'Disponible'
                    AND calendrier.IdentifiantCal NOT IN (SELECT emprunt.IdentifiantCal
                                                        FROM emprunt, calendrier
                                                        WHERE calendrier.JourCal = 'Vendredi'
                                                        AND (emprunt.DateEmprunt = '$date_vendredi'
                                                            OR emprunt.DateRetour = '$date_vendredi')
                                                        AND emprunt.Statut_RDV LIKE 'a venir');";
                    $res = mysqli_query($session, $sql);
                    $num = mysqli_num_rows($res);
                }

                if ($num > 0) {
                    for ($i = 0; $i < $num; $i++) {
                        $row = mysqli_fetch_array($res);
                        $horaire = date("H:i", strtotime($row['HoraireCal']));
                        if ($i % 6 == 0) echo '<tr>';
                        echo "<td>" . "<input type='submit' class='btn btn-primary' name='Vendredi' data-bs-toggle='modal' data-bs-target='#exampleModal' value='$horaire'>" . "</td>";
                    }
                }
                mysqli_free_result($res);
                ?>
            </table>
        </div>
        </div>



        <script>
            var myModal = document.getElementById('exampleModal')
            var myInput = document.getElementById('myInput')

            myModal.addEventListener('shown.bs.modal', function() {
                myInput.focus()
            })
        </script>

        <!-- Accordion -->
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>

    </form>

    <?php
    if (isset($_POST['Lundi']) || isset($_POST['Mardi']) || isset($_POST['Mercredi']) || isset($_POST['Jeudi']) || isset($_POST['Vendredi'])) {

        $date_du_jour = strftime('%Y-%m-%d', strtotime('now'));
        $date_res = $_POST['DateRetour'];
        $jour_res = strftime('%A', strtotime($date_res));

        if (isset($_POST['Lundi'])) {
            $date_verif = $date_lundi;
        } else if (isset($_POST['Mardi'])) {
            $date_verif = $date_mardi;
        } else if (isset($_POST['Mercredi'])) {
            $date_verif = $date_mercredi;
        } else if (isset($_POST['Jeudi'])) {
            $date_verif = $date_jeudi;
        } else if (isset($_POST['Vendredi'])) {
            $date_verif = $date_vendredi;
        }

        $d = $_POST['DateRetour'];

        $param_date_r = mysqli_query($session, "UPDATE personne SET date_r = '$d' WHERE IdentifiantPe = '$identifiant'");

        if ($date_res < $date_du_jour) {
    ?>
            <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                </svg>
                                <div>
                                    <?php echo TXT_ERREUR_DATE; ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col text-center">
                                <input type="button" class="btn btn-primary" onclick='document.location.href="reservation_portable.php"' value="<?php echo TXT_OK; ?> ">
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
        } else if (strftime('%Y-%m-%d', strtotime($date_res)) <= $date_verif) {
        ?>
            <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                </svg>
                                <div>
                                    <?php echo DATE_RETOUR; ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col text-center">
                                <input type="button" class="btn btn-primary" onclick='document.location.href="reservation_portable.php"' value="<?php echo TXT_OK; ?> ">
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
        } else if ($jour_res == "Saturday" || $jour_res == "Sunday") {
        ?>
            <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                </svg>
                                <div>
                                    <?php echo TXT_ERREUR_JOUR; ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col text-center">
                                <input type="button" class="btn btn-primary" onclick='document.location.href="reservation_portable.php"' value="<?php echo TXT_OK; ?> ">
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
            if (isset($_POST['Lundi'])) {
                $jour = "Lundi";
                $horaire = $_POST['Lundi'];
                $date_emprunt = $date_lundi;
            } else if (isset($_POST['Mardi'])) {
                $jour = "Mardi";
                $horaire = $_POST['Mardi'];
                $date_emprunt = $date_mardi;
            } else if (isset($_POST['Mercredi'])) {
                $jour = "Mercredi";
                $horaire = $_POST['Mercredi'];
                $date_emprunt = $date_mercredi;
            } else if (isset($_POST['Jeudi'])) {
                $jour = "Jeudi";
                $horaire = $_POST['Jeudi'];
                $date_emprunt = $date_jeudi;
            } else if (isset($_POST['Vendredi'])) {
                $jour = "Vendredi";
                $horaire = $_POST['Vendredi'];
                $date_emprunt = $date_vendredi;
            }
            $date_retour = strftime("%Y-%m-%d", strtotime($_POST['DateRetour']));
            $categorieM = $_POST['categorie'];

            $id_materiel = ("SELECT * FROM materiel WHERE EtatM LIKE 'Dispo' AND StatutM LIKE 'Existant' AND CategorieM = '$categorieM' LIMIT 1");
            $result_id_materiel = mysqli_query($session, $id_materiel);
            foreach ($result_id_materiel as $materiel) {
                $IdentifiantM = $materiel['IdentifiantM'];
            }


            $id_creneau = ("SELECT * FROM calendrier WHERE calendrier.JourCal LIKE '$jour' AND calendrier.HoraireCal = '$horaire'");
            $result_id_creneau = mysqli_query($session, $id_creneau);
            foreach ($result_id_creneau as $creneau) {
                $IdentifiantCal = $creneau['IdentifiantCal'];
            }

            $Bureau = ("SELECT * FROM parametres");
            $result_Bureau = mysqli_query($session, $Bureau);
            $row_bureau = mysqli_fetch_array($result_Bureau);

        ?>
            <!-- Modal -->

            <form action="" method="POST">
                <div class="modal fade" id="alerte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?php echo TXT_CONFIRMATION_RDV; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="IdentifiantM" value="<?php echo $IdentifiantM; ?>">
                                <input type="hidden" name="IdentifiantCal" value="<?php echo $IdentifiantCal; ?>">
                                <input type="hidden" name="DateRetour" value="<?php echo $_POST['DateRetour']; ?>">

                                <div class="form-group row">
                                    <label for="staticEmail" class="col col-form-label"><?php echo TXT_CHOIX_MATERIEL; ?> : </label>
                                    <div class="col">
                                        <input type="text" class="form-control-plaintext" name="categorieM" value="<?php echo $categorieM; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col col-form-label"><?php echo TXT_CHOIX_DATE; ?> : </label>
                                    <div class="col">
                                        <input type="text" class="form-control-plaintext" name="date_emprunt" value="<?php echo $date_emprunt; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col col-form-label"><?php echo TXT_DATER; ?> : </label>
                                    <div class="col">
                                        <input type="text" class="form-control-plaintext" name="date_retour" value="<?php echo $date_retour; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col col-form-label"><?php echo TXT_JOUR; ?> : </label>
                                    <div class="col">
                                        <input type="text" class="form-control-plaintext" name="jour" value="<?php echo $jour; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col col-form-label"><?php echo TXT_CRENEAU; ?> : </label>
                                    <div class="col">
                                        <input type="text" class="form-control-plaintext" name="horaire" value="<?php echo $horaire; ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="staticEmail" class="col col-form-label"><?php echo TXT_BUREAU; ?> : </label>
                                    <div class="col">
                                        <input type="text" class="form-control-plaintext" name="bureau" value="<?php echo $row_bureau['Bureau']; ?>" readonly>
                                    </div>
                                </div>


                                <div class="alert alert-primary d-flex align-items-center" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </svg>
                                    <div>
                                        <?php echo TXT_INFO_RESERVATION; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="<?php echo TXT_RETOUR; ?>">
                                <input type="submit" class="btn btn-primary" name="confirmer" value="<?php echo TXT_CONFIRMER; ?>">
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
        }
    }
        ?>


            </form>

            <?php
            if (isset($_POST['confirmer'])) {

                $dateRetour = $_POST['DateRetour'];

                $horaire = $_POST['horaire'];
                $jour = $_POST['jour'];
                $date_Emprunt = $_POST['date_emprunt'];
                //$dt = DateTime::createFromFormat('d/m/Y', $date_Emprunt);
                //$dateEmprunt = $dt->format('Y-m-d');

                $categorie = $_POST['categorieM'];
                $identifiantM = $_POST['IdentifiantM'];
                $identifiantCal = $_POST['IdentifiantCal'];

                $identifiantPe = $identifiant;



                /*$emprunter = ("UPDATE calendrier SET EtatCal = 'Indisponible' WHERE calendrier.JourCal LIKE '$jour' AND calendrier.HoraireCal = '$horaire'");
                $result_emprunter = mysqli_query($session, $emprunter);*/

                $etat_materiel = ("UPDATE materiel SET EtatM = 'Non Dispo' WHERE IdentifiantM = '$identifiantM'");
                $result_etat_materiel = mysqli_query($session, $etat_materiel);


                $insert_rdv = ("INSERT INTO `emprunt`(`DateEmprunt`, `DateRetour`, `DateProlongation`, `Motif`, `IdentifiantM`, `IdentifiantPe`, `IdentifiantCal`)
                    VALUES ('$date_Emprunt', '$dateRetour', NULL, 'Pret', '$identifiantM', '$identifiantPe', '$identifiantCal')");
                $result_insert_rdv = mysqli_query($session, $insert_rdv);

            ?>

                <div class="modal fade" id="alerte" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    <div>

                                        <?php echo TXT_ALERTE_SUCCES_CRENEAU; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="col text-center">
                                    <input type="button" class="btn btn-primary" onclick='document.location.href="reservation_portable.php"' value="<?php echo TXT_OK; ?> ">
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
            }
            ?>

            <div class="box">
                <a class="button" href="#popup1"><?php echo TXT_BTN_URG; ?></a>
            </div>
            <div id="popup1" class="overlay">
                <div class="popup">
                    <p>
                    <h2><?php echo TXT_BTN_URG; ?></h2>
                    <a class="close" href="#"> &times;</a>
                    </p>
                    <div class="content" style="text-align: justify; font-size: 16px">
                        <?php $Bureau = ("SELECT * FROM parametres");
                        $result_Bureau = mysqli_query($session, $Bureau);
                        $row_bureau = mysqli_fetch_array($result_Bureau);
                        echo TXT_RES_URG ." ". $row_bureau['Bureau'] . "."; ?>
                    </div>
                </div>
            </div>

            <style>
                .box {
                    width: 40%;
                    margin: 0 auto;
                    background: rgba(255, 255, 255, 0.2);
                    padding: 30px;
                    border: 2px solid #fff;
                    border-radius: 20px/50px;
                    background-clip: padding-box;
                    text-align: center;
                }

                .button {
                    font-size: 1em;
                    padding: 10px;
                    border-radius: 20px/30px;
                    text-decoration: none;
                    cursor: pointer;
                    transition: all 0.3s ease-out;
                }

                .button:hover {}

                .overlay {
                    position: fixed;
                    top: 0;
                    bottom: 0;
                    left: 0;
                    right: 0;
                    background: rgba(0, 0, 0, 0.7);
                    transition: opacity 500ms;
                    visibility: hidden;
                    opacity: 0;
                }

                .overlay:target {
                    visibility: visible;
                    opacity: 1;
                }

                .popup {
                    margin: 70px auto;
                    padding: 20px;
                    background: #fff;
                    border-radius: 5px;
                    width: 30%;
                    position: relative;
                    transition: all 5s ease-in-out;
                }

                .popup h2 {
                    margin-top: 0;
                    color: #333;
                    font-family: Tahoma, Arial, sans-serif;
                }

                .popup .close {
                    position: absolute;
                    top: 20px;
                    right: 30px;
                    transition: all 200ms;
                    font-size: 30px;
                    font-weight: bold;
                    text-decoration: none;
                    color: #333;
                }

                .popup .close:hover {
                    color: #33a6cc;
                }

                .popup .content {
                    max-height: 30%;
                    overflow: auto;
                }

                @media screen and (max-width: 700px) {
                    .box {
                        width: 70%;
                    }

                    .popup {
                        width: 70%;
                    }
                }
            </style>

</body>


</html>
