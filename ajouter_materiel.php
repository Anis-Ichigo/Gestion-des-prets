<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
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
            <form action="entretien.php" method="POST">
                <table>
                    <tr>
                        <TD>
                            <label>Numéro du matériel</label>
                        </TD>
                        <TD>
                            <INPUT type="text" name="numero" required>
                        </TD>
                    </tr>
                    <tr>
                        <TD>
                            <label>type de matériel</label>
                        </TD>
                        <TD>
                            <INPUT type="text" name="type" required>
                        </TD>
                    </tr>
                    <tr>
                        <TD>
                            <label>Date d'achat</label>
                        </TD>
                        <TD>
                            <INPUT type="date" name="date" required>
                        </TD>
                    </tr>
                </table>
            </form>
            <br>
            <a type="button" href="entretien.php" class="btn btn-primary">Ajouter</a>

        </div>
    </main>
</body>

<?php

$numero = isset($_POST["numero"]);
$type = isset($_POST["type"]);
$date = isset($_POST["date"]);

$ajouter = "INSERT INTO materiel (IdentifiantM, DateAchat, EtatM, CategorieM, SatutM) VALUES ('?', '?', 'Dispo', '?','Existant')";
if($stmt = mysqli_prepare($session, $ajouter)){
  mysqli_stmt_bind_param($stmt, 'iis', $numero, $date, $type);
  mysqli_stmt_execute($stmt);
}

 ?>

</html>
