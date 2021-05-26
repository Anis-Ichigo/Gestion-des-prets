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
                    <a class="nav-link active" aria-current="page" href="#">Mes infos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="probleme.html">Declarer un probleme</a>
                </li>
            </ul>

            <?php
            require('Connexion_BD.php');
            //$identifiant = $_SESSION['identifiant'];
            $identifiant = '22508753';

            $emprunteur = ("SELECT * FROM emprunteur where IdentifiantE = $identifiant");
            $result_emprunteur = mysqli_query($session, $emprunteur);
            foreach ($result_emprunteur as $row) {
            ?>

                <FORM method="POST" action="" id='form'>
                    <TABLE NOBOARDER>
                        <TR>
                            <TD>
                                <label for="nom">Prénom :</label>
                            </TD>
                            <TD>
                                <?php echo $row['PrenomE']; ?>
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label for="nom">Nom :</label>
                            </TD>
                            <TD>
                                <?php echo $row['NomE']; ?>
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label for="nom">Email :</label>
                            </TD>
                            <TD>
                                <?php echo $row['EmailE']; ?>
                            </TD>
                        </TR>
                        <TR>
                            <TD>
                                <label for="nom">Adresse :</label>
                            </TD>
                            <TD>
                                <?php echo $row['AdresseE']; ?>
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <label for="nom">Tel :</label>
                            </TD>
                            <TD>
                                <?php echo $row['TelE']; ?>
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <label for="priorite">Vous êtes :</label>
                            </TD>
                            <TD>
                                <?php echo $row['Statut']; ?>
                            </TD>
                        </TR>

                        <TR>
                            <TD>
                                <label for=" priorite ">Formation:</label>
                            </TD>
                            <TD>
                                <?php echo $row['Formation']; ?>
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

                    <br>
                    <p>
                        <a href="modifier_profil.php" type="button" class="btn btn-primary">Modifier le profil</a>
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
                <TR>
                    <TD>
                        N122342546567
                    </TD>
                    <TD>
                        12/02/2021
                    </TD>
                    <TD>
                        24/05/2021
                    </TD>
                    <TD>
                        Clé 4G
                    </TD>
                    <TD>
                        panne
                    </TD>
                </TR>
                <TR>
                    <TD>
                        N122342546567
                    </TD>
                    <TD>
                        12/02/2021
                    </TD>
                    <TD>
                        24/05/2021
                    </TD>
                    <TD>
                        Ordinateur
                    </TD>
                    <TD>

                    </TD>
                </TR>
            </Table>

            <h2>Mes rendez-vous</h2>

            <Table class="table table-striped table-hover">
                <TR>
                    <TH>
                        Type de matériel
                    </TH>
                    <TH>
                        Numéro de matériel
                    </TH>
                    <TH>
                        Date
                    </TH>
                    <TH>
                        Heure
                    </TH>
                    <TH>
                        Lieu
                    </TH>
                </TR>
                <TR>
                    <TD>
                        Ordinateur
                    </TD>
                    <td>
                        N122342546567
                    </td>
                    <TD>
                        19/05/2021
                    </TD>
                    <TD>
                        9h15
                    </TD>
                    <TD>
                        Salle MB404
                    </TD>
                </TR>
            </Table>
        </div>
    </main>
</body>

</html>