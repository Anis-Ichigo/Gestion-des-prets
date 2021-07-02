<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf-8");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Réglages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="styletest.css" type="text/css">
    <link rel="stylesheet" href="menu.css" type="text/css">
    <link rel="stylesheet" href="reglage.css" />

    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <link href="flag-icon-css-master/css/flag-icon.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="right:0;top:0; position :fixed">
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
                            <a class="nav-link" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> <?php echo LISTE_RDV;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> <?php echo SUIVI_PRET;?> </a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="Statistiques.php"><i class=" fi-rr-stats"></i> <?php echo STATS;?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER; ?> </a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php" ><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION; ?></a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php" style="background-color: none; color: black"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE; ?></a>
                        </li>
                        <?php
                        } else if ($role_user == "Vacataire") {
                        ?>
                           <li class="nav-item  text-center">
              <a class="nav-link" href="entretien.php"><i class=" fi-rr-computer"></i> <?php echo TXT_ACCUEIL_ENTRETIEN; ?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link " aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> <?php echo TXT_ACCUEIL_NOUVELLER; ?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION; ?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL; ?></a>
            </li>
            <li class="nav-item  text-center">
              <a class="nav-link active " href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE; ?></a>
            </li>
                        <?php
                        } else if ($role_user == "Emprunteur") {
                        ?>
                            <li class="nav-item  text-center">
                                <a class="nav-link" aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i><?php echo TXT_ACCUEIL_NOUVELLER;?></a>
                            </li>
                            <li class="nav-item  text-center">
                                <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> <?php echo TXT_ACCUEIL_RESERVATION;?></a>
                            </li>
                            <li class="nav-item  text-center">
                                <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> <?php echo PROFIL;?></a>
                            </li>
                            <li class="nav-item  text-center">
                                <a class="nav-link" href="FAQ.php"><i class=" fi-rr-interrogation"></i> <?php echo FAQ;?></a>
                            </li>
                            <li class="nav-item  text-center">
                                <a class="nav-link" style="color:black;" href="reglage.php"><i class=" fi-rr-settings"></i> <?php echo TXT_ACCUEIL_REGLAGE;?></a>
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
    </header>

    <div class="main">

        <h2 align="center"> <?php echo TXT_ACCUEIL_REGLAGE; ?></h2>
        <form action="decide-lang.php" method="post">
            <p style="font-size: 1.5em"><?php echo CHOIX_LANGUE . ':'; ?></p>

            <div class="form-group" align="center" style="font-size: 1.1em">

                <input id="fr" type="radio" name="lang" value="fr" checked>
                <label for="fr">
                    &nbsp;&nbsp;
                    <span class="flag-icon flag-icon-fr"></span>
                    Français
                </label>
                &nbsp;&nbsp;
                <input id="en" type="radio" name="lang" value="en">
                <label for="en">
                    &nbsp; &nbsp;
                    <span class="flag-icon flag-icon-um"></span>
                    English
                </label><br><br>

                <input id="cn" type="radio" name="lang" value="cn">
                <label for="cn">
                    &nbsp; &nbsp;
                    <span class="flag-icon flag-icon-cn"></span>
                    简体中文
                </label><br><br>


                <input type="submit" name="enregistrer_parametres" value="<?php echo ENREGISTRER; ?>">

            </div>
        </form>

    </div>
</body>

</html>
