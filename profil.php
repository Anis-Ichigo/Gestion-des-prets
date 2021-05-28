<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profil</title>
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
            <h1>Mon Profil</h1>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Mes infos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="probleme.php">Declarer un probleme</a>
                </li>
            </ul>

            <?php
            //$identifiant = $_SESSION['identifiant'];
            $identifiant = '22508753';

            if (isset($_POST['envoyer_probleme'])) {

                $NomP = addslashes($_POST['NomP']);
                $DateProbleme = strftime('%Y-%m-%d');
                $Description = addslashes($_POST['Description']);

                $CategorieM = $_POST['CategorieM'];

                $categorie = ("SELECT *
                               FROM emprunt, materiel, personne
                               WHERE emprunt.IdentifiantM = materiel.identifiantM
                               AND emprunt.identifiantPe = personne.IdentifiantPe
                               AND materiel.CategorieM = '$CategorieM'
                               AND personne.IdentifiantPe = $identifiant");
                $result_categorie = mysqli_query($session, $categorie);
                foreach ($result_categorie as $row) {
                    $IdentifiantM = $row['IdentifiantM'];
                }



                $probleme = ("INSERT INTO `probleme`(`NomP`, `DateProbleme`, `DateResolution`, `Resolution`, `Description`, `IdentifiantPe`, `IdentifiantM`) 
                VALUES ('$NomP', '$DateProbleme', NULL, NULL, '$Description', '$identifiant', '$IdentifiantM')");
                $result_probleme = mysqli_query($session, $probleme);

            }


            if (isset($_POST['modifier'])) {

                $modif_PrenomPe = $_POST['modif_PrenomPe'];
                $modif_NomPe = $_POST['modif_NomPe'];
                $modif_EmailPe = $_POST['modif_EmailPe'];
                $modif_AdressePe = addslashes($_POST['modif_AdressePe']);
                $modif_TelPe = $_POST['modif_TelPe'];
                $modif_Statut = $_POST['modif_Statut'];
                $modif_Formation = $_POST['modif_Formation'];

                $modif_profil = ("UPDATE personne SET PrenomPe = '$modif_PrenomPe', NomPe = '$modif_NomPe', EmailPe = '$modif_EmailPe', AdressePe = '$modif_AdressePe', TelPe = '$modif_TelPe', Statut = '$modif_Statut', Formation = '$modif_Formation' WHERE IdentifiantPe = $identifiant");
                $result_modif_profil = mysqli_query($session, $modif_profil);
            }

            $emprunteur = ("SELECT * FROM personne where IdentifiantPe = $identifiant");
            $result_emprunteur = mysqli_query($session, $emprunteur);
            foreach ($result_emprunteur as $row) {
            ?>

                <FORM method="POST" action="modifier_profil.php">
                    <div class="form-group row">

                        <TABLE NOBOARDER>
                            <TR>
                                <TD>
                                    <label>Prénom :</label>
                                </TD>
                                <TD>
                                    <input type="text" readonly class="form-control-plaintext" name="PrenomPe" value="<?php echo $row['PrenomPe']; ?>">
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <label>Nom :</label>
                                </TD>
                                <TD>
                                    <input type="text" readonly class="form-control-plaintext" name="NomPe" value="<?php echo $row['NomPe']; ?>">
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <label>Email :</label>
                                </TD>
                                <TD>
                                    <input type="text" readonly class="form-control-plaintext" name="EmailPe" value="<?php echo $row['EmailPe']; ?>">
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <label>Adresse :</label>
                                </TD>
                                <TD>
                                    <input type="text" readonly class="form-control-plaintext" name="AdressePe" value="<?php echo $row['AdressePe']; ?>">
                                </TD>
                            </TR>

                            <TR>
                                <TD>
                                    <label>Téléphone :</label>
                                </TD>
                                <TD>
                                    <input type="text" readonly class="form-control-plaintext" name="TelPe" value="<?php echo $row['TelPe']; ?>">
                                </TD>
                            </TR>

                            <TR>
                                <TD>
                                    <label>Vous êtes :</label>
                                </TD>
                                <TD>
                                    <input type="text" readonly class="form-control-plaintext" name="Statut" value="<?php echo $row['Statut']; ?>">
                                </TD>
                            </TR>

                            <TR>
                                <TD>
                                    <label>Formation:</label>
                                </TD>
                                <TD>
                                    <input type="text" readonly class="form-control-plaintext" name="Formation" value="<?php echo $row['Formation']; ?>">
                                </TD>
                                <TD>
                                    <label>Ou Secretariat :</label>
                                </TD>
                                <TD>
                                    <SELECT size=" 1 ">
                                        <OPTION>Scolarité informatique </OPTION>
                                        <OPTION>Service de scolarité de ..</OPTION>
                                        <OPTION>Service de scolarité de ..</OPTION>
                                        <OPTION>Service de scolarité de ..</OPTION>
                                        <OPTION>Service de scolarité de ..</OPTION>
                                    </SELECT>
                                </TD>
                            </TR>

                        </TABLE>
                    </div>

                    <br>
                    <p>
                        <input type="submit" class="btn btn-primary" value="Modifier le profil">
                    </p>
                </FORM>

            <?php
            }
            ?>

            <h2>Mes Réservations</h2>
            <Table class="table table-striped table-hover">
                <TR>
                    <TH>
                        Numéro du materiel
                    </TH>
                    <TH>
                        Date de retrait
                    </TH>
                    <TH>
                        Date de retour
                    </TH>
                    <TH>
                        Type de matériel
                    </TH>
                    <TH>
                        Problème
                    </TH>
                </TR>

                <?php
                $reservations = ("SELECT *
                FROM emprunt, personne, probleme, materiel
                WHERE emprunt.IdentifiantPe = personne.IdentifiantPe
                AND emprunt.IdentifiantM = materiel.IdentifiantM
                AND probleme.IdentifiantPe = personne.IdentifiantPe
                AND personne.IdentifiantPe = $identifiant;");
                $result_reservations = mysqli_query($session, $reservations);
                foreach ($result_reservations as $row) {
                ?>
                    <TR>
                        <TD>
                            <?php echo $row['IdentifiantM'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['DateEmprunt'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['DateRetour'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['CategorieM'] ?>
                        </TD>
                        <TD>
                            <?php echo $row['NomP'] ?>
                        </TD>
                    </TR>
                <?php
                }
                ?>
            </Table>

            <h2>Mes rendez-vous</h2>

            <Table class="table table-striped table-hover">
                <TR>
                    <TH>
                        Numéro de matériel
                    </TH>
                    <TH>
                        Type de matériel
                    </TH>
                    <TH>
                        Date
                    </TH>
                    <TH>
                        Heure
                    </TH>
                </TR>

                <?php
                $reservations = ("SELECT *
                FROM emprunt, personne, materiel, calendrier 
                WHERE emprunt.IdentifiantM = materiel.IdentifiantM 
                AND emprunt.IdentifiantPe = personne.IdentifiantPe 
                AND emprunt.IdentifiantCal = calendrier.IdentifiantCal 
                AND personne.IdentifiantPe = $identifiant;");
                $result_reservations = mysqli_query($session, $reservations);
                foreach ($result_reservations as $row) {
                ?>
                    <tr>
                        <td>
                            <?php echo $row['IdentifiantM'] ?>
                        </td>
                        <td>
                            <?php echo $row['CategorieM'] ?>
                        </td>
                        <td>
                            <?php echo $row['DateEmprunt'] ?>
                        </td>
                        <td>
                            <?php echo $row['HoraireCal'] ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </Table>
        </div>
    </main>
</body>

</html>