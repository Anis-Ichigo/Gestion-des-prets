<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Confirmer RDV</title>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css" />
    <script src="https://kit.fontawesome.com/27e9b6ce5f.js" crossorigin="anonymous"></script>
    <link href="uicons-regular-rounded/uicons-regular-rounded/css/uicons-regular-rounded.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            <div><a href="FAQ.html"><i class="far fa-comment-dots"></i></a><b>Entretien</b></div>
            <div><a href="entretien.html"><i class="fas fi-rr-settings"></i></a><b>Liste RDV</b></div>
            <div><a href="liste_RDV.php"><i class="far fa-check-square"></i></a><b>Liste des prêts</b></div>
            <div><a href="suivi_prets.php"><i class="far fa-handshake"></i></a><b>Statistiques</b></div>
            <div><a href="Statistiques.html"><i class="far fi-rr-stats"></i></a></div>
        </div>

        <div class="contenu">
            <h1>Confirmer RDV</h1>

            <div style="margin-left: auto; margin-right: auto; width: 40%; display: block;">
                <div class="card bg-light">
                    <h5 class="card-header">Souhaitez-vous confirmer le RDV ?</h5>
                    <div class="card-body">
                        <h5 class="card-title">Objet :
                            <select name="" id="">
                                <option value="">Emprunt de matériel</option>
                                <option value="">Retour de matériel</option>
                            </select>
                        </h5>
                        <?php if (isset($_POST['horaire_lundi'])) {
                        ?>
                            <p class="card-text">Date : <?php echo strftime("%d/%m/%Y", strtotime("monday")); ?><br>Heure : <?php echo $_POST['horaire_lundi']; ?><br>Bureau :</p>
                        <?php
                        } else if (isset($_POST['horaire_mardi'])) {
                        ?>
                            <p class="card-text">Date : <?php echo strftime("%d/%m/%Y", strtotime("tuesday")); ?><br>Heure : <?php echo $_POST['horaire_mardi']; ?><br>Bureau :</p>
                        <?php
                        } else if (isset($_POST['horaire_mercredi'])) {
                        ?>
                            <p class="card-text">Date : <?php echo strftime("%d/%m/%Y", strtotime("wednesday")); ?><br>Heure : <?php echo $_POST['horaire_mercredi']; ?><br>Bureau :</p>
                        <?php
                        } else if (isset($_POST['horaire_jeudi'])) {
                        ?>
                            <p class="card-text">Date : <?php echo strftime("%d/%m/%Y", strtotime("thursday")); ?><br>Heure : <?php echo $_POST['horaire_jeudi']; ?><br>Bureau :</p>
                        <?php
                        } else if (isset($_POST['horaire_vendredi'])) {
                        ?>
                            <p class="card-text">Date : <?php echo strftime("%d/%m/%Y", strtotime("friday")); ?><br>Heure : <?php echo $_POST['horaire_vendredi']; ?><br>Bureau :</p>
                        <?php
                        }
                        ?>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </svg>
                            <div>
                                Attention, vous devez fournir les documents demandés (photocopie de pièce d'identité recto/verso et/ou photocopie de carte étudiante). Sans cela, aucun matériel ne pourra vous être prêté.
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <a href="reservation.php" class="btn btn-success">Confirmer RDV</a>
                        <a href="reservation.php" class="btn btn-danger">Annuler</a>
                    </div>
                </div>
            </div>


        </div>

    </main>


</body>

</html>