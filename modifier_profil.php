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
            require('Connexion_BD.php');
            //$identifiant = $_SESSION['identifiant'];
            $identifiant = '22508753';

            ?>

            <FORM method="POST" action="profil.php">
                <div class="form-group row">
                    <TABLE NOBOARDER>
                        <TR>
                            <TD>
                                <label>Prénom :</label>
                            </TD>
                            <TD>
                                <input type="text" class="form-control" autocomplete="off" name="modif_PrenomE" value="<?php echo $_POST["PrenomE"]; ?>">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label>Nom :</label>
                            </TD>
                            <TD>
                                <input type="text" class="form-control" autocomplete="off" name="modif_NomE" value="<?php echo $_POST['NomE']; ?>">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label>Email :</label>
                            </TD>
                            <TD>
                                <input type="text" class="form-control" autocomplete="off" name="modif_EmailE" value="<?php echo $_POST['EmailE']; ?>">
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label>Adresse :</label>
                            </TD>
                            <TD>
                                <input type="text" class="form-control" autocomplete="off" name="modif_AdresseE" value="<?php echo $_POST['AdresseE']; ?>">
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <label>Tel :</label>
                            </TD>
                            <TD>
                                <input type="text" class="form-control" autocomplete="off" name="modif_TelE" value="<?php echo $_POST['TelE']; ?>">
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <label>Vous êtes :</label>
                            </TD>
                            <TD>
                                <input type="text" class="form-control" autocomplete="off" name="modif_Statut" value="<?php echo $_POST['Statut']; ?>">
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <label>Formation:</label>
                            </TD>
                            <TD>
                                <input type="text" class="form-control" autocomplete="off" name="modif_Formation" value="<?php echo $_POST['Formation']; ?>">
                            </TD>
                            <TD>
                                <label for=" priorite "> Ou Secretariat:</label>
                            </TD>
                            <TD>
                                <SELECT id=" priorite " name=" priorite " size=" 1 ">
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
                    <input type="submit" name="modifier" class="btn btn-primary" value="Modifier">
                    <a href="profil.php" type="button" class="btn btn-light">Retour</a>
                </p>
            </FORM>

        </div>
    </main>
</body>

</html>
