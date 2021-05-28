<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');

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
                    <a class="nav-link" href="profil.php">Mes infos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Declarer un probleme </a>
                </li>
            </ul>

            <?php
            //$identifiant = $_SESSION['identifiant'];
            $identifiant = '22508753';


            $emprunteur = ("SELECT * FROM personne where IdentifiantPe = $identifiant");
            $result_emprunteur = mysqli_query($session, $emprunteur);
            foreach ($result_emprunteur as $row) {
            ?>

                <form method="POST" action="profil.php">
                    <table NOBOARDER>
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
                                <label>Votre demande concerne :</label>
                            </TD>
                            <TD>
                                <SELECT size="1" name="CategorieM">
                                    <OPTION></OPTION>
                                    <?php
                                    $categories = ("SELECT * FROM emprunt, materiel, personne 
                                                    WHERE emprunt.IdentifiantM = materiel.identifiantM
                                                    AND emprunt.IdentifiantPe = personne.IdentifiantPe
                                                    AND personne.identifiantPe = $identifiant
                                                    GROUP BY CategorieM");
                                    $result_categories = mysqli_query($session, $categories);
                                    foreach ($result_categories as $row) {
                                    ?>
                                        <OPTION><?php echo $row['CategorieM']; ?></OPTION>
                                    <?php
                                    }
                                    ?>
                                </SELECT> (*)
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <label>Titre :</label>
                            </TD>
                            <TD>
                                <input type="text" class="form-control" name="NomP">
                            </TD>
                        </TR>

                        <TR>
                            <TD valign=" top ">
                                <label>Description :</label>
                            </TD>
                            <TD>
                                <textarea name="Description" cols="60" rows="10"></textarea>
                            </TD>
                        </TR>

                    </table>
                    <input type="submit" class="btn btn-primary" name="envoyer_probleme" value="Envoyer">
                </form>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>