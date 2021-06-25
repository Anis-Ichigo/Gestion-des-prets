<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');

?>

<!DOCTYPE html>
<html>

<head>
    <title>FAQ</title>
    <meta charset="utf-8" />
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <link href="menu.css" type="text/css" rel="stylesheet" />
    <link href="Style_FAQ.css" type="text/css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

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
                            <a class="nav-link" style="background-color: none; color:black" href="liste_RDV.php"><i class="  fi-rr-calendar"></i> Liste des rendez-vous</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="suivi_prets.php"><i class=" fi-rr-info"></i> Suivi des prêts</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="Statistiques.php"><i class=" fi-rr-stats"></i> Statistiques</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " aria-current="page" href="reservation_portable"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
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
                            <a class="nav-link  active" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link " href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
                        </li>
                    <?php
                    } else if ($role_user == "Emprunteur") {
                    ?>
                        <li class="nav-item  text-center">
                            <a class="nav-link" aria-current="page" href="reservation_portable.php"><i class=" fi-rr-add"></i> Nouvelle réservation</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="mes_reservations.php"><i class="fi-rr-file-check"></i> Mes emprunts</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="profil.php"><i class=" fi-rr-user"></i> Profil</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" style="background-color: none; color:black" href="FAQ.php"><i class=" fi-rr-interrogation"></i> FAQ</a>
                        </li>
                        <li class="nav-item  text-center">
                            <a class="nav-link" href="reglage.php"><i class=" fi-rr-settings"></i> Réglages</a>
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
        <h1> <?php echo TXT_ACCUEIL_FAQ; ?> </h1>
        <section class="faq">
            <strong><?php echo TXT_QUESTION1; ?></strong>
            <p align="justify"> <?php echo TXT_REPONSE1_A; ?> <a href="reservation_portable.php"><i>"<?php echo TXT_REPONSE1_B; ?>"</i></a><?php echo TXT_REPONSE1_C; ?>
            </p>
        </section>
        <section class="faq">
            <strong><?php echo TXT_QUESTION2; ?></strong>
            <p align="justify"><?php echo TXT_REPONSE2; ?> </p>
        </section>
        <section class="faq">
            <strong><?php echo TXT_QUESTION3; ?></strong>
            <p align="justify"><?php echo TXT_REPONSE3_A; ?>
                <i>"<?php echo TXT_REPONSE3_B; ?>"</i> <?php echo TXT_REPONSE3_C; ?>
            </p>
        </section>
        <section class="faq">
            <strong><?php echo TXT_QUESTION4; ?></strong>
            <p> <?php echo TXT_REPONSE4_A; ?>
                <a href="mes_reservations.php"> <i>"<?php echo TXT_REPONSE4_B; ?>"</i></a>
                <?php echo TXT_REPONSE4_C; ?>
            </p>
        </section>
        <section class="faq">
            <strong><?php echo TXT_QUESTION5; ?></strong>
            <p> <?php echo TXT_REPONSE5_A; ?> <a href="AC.php"><?php echo TXT_REPONSE5_B; ?></a>. </p>
        </section>
        <section class="faq">
            <strong><?php echo TXT_QUESTION6; ?></strong>
            <p> <?php echo TXT_REPONSE6; ?> <a href="CGU.php"><?php echo TXT_REPONSE5_B; ?></a>. </p>
        </section>
        <section class="faq">
            <strong><?php echo TXT_QUESTION7; ?></strong>
            <p> <?php echo TXT_REPONSE7; ?><a href="mes_reservations.php"> <?php echo TXT_REPONSE5_B; ?></a>.
            </p>
        </section>
    </div>

    <br><br>

    <footer style="text-align: center; font-size: 1.5em; bottom:0; position:relative; width:100%; background-color: #ffc0cb;">
        Site réalisé par Marine CABIROL - Haoyang YU - Lisa DE SMET - Anis MANA - Antoine LAVIGNE
    </footer>
</body>


</html>