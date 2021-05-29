<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
?>
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
        <div class="menu">
            <div>
                <a href="Index.html"><img src="images/logo.jpg" alt="logo"></a>
                <b>Profil</b>
            </div>
            <div><a href="profil.php"><i class="fas fa-users"></i></a><b>Nouvelle réservation</b></div>
            <div><a href="reservation.php"><i class="far fa-plus-square"></i></a><b>Forum</b></div>
            <div><a href="FAQ.html"><i class="far fa-comment-dots"></i></a><b>Entretien</b></div>
            <div><a href="entretien.php"><i class="fas fi-rr-settings"></i></a><b>Liste RDV</b></div>
            <div><a href="liste_RDV.php"><i class="far fa-check-square"></i></a><b>Liste des prêts</b></div>
            <div><a href="suivi_prets.php"><i class="far fa-handshake"></i></a><b>Statistiques</b></div>
            <div><a href="Statistiques.html"><i class="far fi-rr-stats"></i></a></div>
        </div>

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

                $query_liste_rdv = "
                            SELECT 	p.identifiantPe as ide, p.prenomPe as prenom, p.nomPe as nom, e.dateEmprunt as date_rdv,
                                    cal.horaireCal as heure, e.identifiantM as idm, m.categorieM as type
                            FROM 	materiel m, emprunt e, personne p, calendrier cal
                            WHERE 	e.IdentifiantPe = p.identifiantPe
                            AND		e.identifiantM = m.identifiantM
                            AND 	e.identifiantCal = cal.identifiantCal
                            ";
                $result_liste_rdv = mysqli_query($session, $query_liste_rdv);
                if ($result_liste_rdv != null) {
                    while ($ligne_liste_rdv = mysqli_fetch_array($result_liste_rdv)) {
                        echo ('<TR>');
                        echo ('<TD>' . $ligne_liste_rdv['ide'] . '</TD>');
                        echo ('<TD>' . $ligne_liste_rdv['prenom'] . '</TD>');
                        echo ('<TD>' . $ligne_liste_rdv['nom'] . '</TD>');
                        echo ('<TD>' . $ligne_liste_rdv['date_rdv'] . '</TD>');
                        echo ('<TD>' . $ligne_liste_rdv['heure'] . '</TD>');
                        echo ('<TD>' . $ligne_liste_rdv['idm'] . '</TD>');
                        echo ('<TD>' . $ligne_liste_rdv['type'] . '</TD>');
                        echo ('</TR>');
                    }
                }
                ?>

            </Table>
        </div>
    </main>
</body>

</html>