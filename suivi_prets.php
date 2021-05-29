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