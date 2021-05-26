<?php
session_start();
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
            <div><a href="forum.html"><i class="far fa-comment-dots"></i></a><b>Entretien</b></div>
            <div><a href="entretien.html"><i class="fas fi-rr-settings"></i></a><b>Liste RDV</b></div>
            <div><a href="liste_RDV.html"><i class="far fa-check-square"></i></a><b>Liste des prêts</b></div>
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
            require('Connexion_BD.php');
            //$identifiant = $_SESSION['identifiant'];
            $identifiant = '22508753';

            if (isset($_POST['modifier'])) {

                $modif_PrenomE = $_POST['modif_PrenomE'];
                $modif_NomE = $_POST['modif_NomE'];
                $modif_EmailE = $_POST['modif_EmailE'];
                $modif_AdresseE = addslashes($_POST['modif_AdresseE']);
                $modif_TelE = $_POST['modif_TelE'];
                $modif_Statut = $_POST['modif_Statut'];
                $modif_Formation = $_POST['modif_Formation'];

                $modif_profil = ("UPDATE emprunteur 
                SET PrenomE = '$modif_PrenomE', NomE = '$modif_NomE', EmailE = '$modif_EmailE', AdresseE = '$modif_AdresseE', TelE = '$modif_TelE', Statut = '$modif_Statut', Formation = '$modif_Formation' 
                WHERE IdentifiantE = $identifiant");
                $result_modif_profil = mysqli_query($session, $modif_profil);
            }

            $emprunteur = ("SELECT * FROM emprunteur where IdentifiantE = $identifiant");
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
                                <input type="text" readonly class="form-control-plaintext" name="PrenomE" value="<?php echo $row['PrenomE']; ?>">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label>Nom :</label>
                            </TD>
                            <TD>
                                <input type="text" readonly class="form-control-plaintext" name="NomE" value="<?php echo $row['NomE']; ?>">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label>Email :</label>
                            </TD>
                            <TD>
                                <input type="text" readonly class="form-control-plaintext" name="EmailE" value="<?php echo $row['EmailE']; ?>">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label>Adresse :</label>
                            </TD>
                            <TD>
                                <input type="text" readonly class="form-control-plaintext" name="AdresseE" value="<?php echo $row['AdresseE']; ?>">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label>Téléphone :</label>
                            </TD>
                            <TD>
                                <input type="text" readonly class="form-control-plaintext" name="AdresseE" value="<?php echo $row['TelE']; ?>">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label>Votre demande concerne :</label>
                            </TD>
                            <TD>
                                <SELECT size=" 1 ">
                                    <OPTION>Un PC</OPTION>
                                    <OPTION>Une Tablette</OPTION>
                                    <OPTION>Une clé 4G</OPTION>
                                    <OPTION>Boucle php pour afficher le reste</OPTION>
                                </SELECT> (*)
                            </TD>
                        </TR>

                        <TR>
                            <TD valign=" top ">
                                <label for=" description ">Description :</label>
                            </TD>
                            <TD>
                                <textarea cols=" 60 " rows=" 10 "></textarea>
                            </TD>
                        </TR>

                    </table>
                    <input type="submit" class="btn btn-primary" value="Envoyer">
                </form>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>