<?php
session_start();
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");

?>

<!DOCTYPE html>
<html>

<head>
    <title>reservation</title>
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
            <h1>Réservation du matériel</h1>

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Réservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Renouvellement.html">Renouvellement</a>
                </li>
            </ul>


            <?php
            //$identifiant = $_SESSION['identifiant'];
            $identifiant = '22508753';

            $emprunteur = ("SELECT * FROM personne where IdentifiantPe = $identifiant");
            $result_emprunteur = mysqli_query($session, $emprunteur);
            foreach ($result_emprunteur as $row) {
            ?>

                <FORM method="POST" action="confirmation_RDV.php" id='form'>
                    <fieldset>
                        <TABLE NOBOARDER>
                            <TR>
                                <TD>
                                    <label for="nom">Nom:</label>
                                </TD>
                                <TD>
                                    <?php echo $row['NomPe']; ?>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <label for="nom">Prénom:</label>
                                </TD>
                                <TD>
                                    <?php echo $row['PrenomPe']; ?>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <label for="nom">Email:</label>
                                </TD>
                                <TD>
                                    <?php echo $row['EmailPe']; ?>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <label for=" nom ">Adresse:</label>
                                </TD>
                                <TD>
                                    <?php echo $row['AdressePe']; ?>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <label for=" nom ">Tel:</label>
                                </TD>
                                <TD>
                                    <?php echo $row['TelPe']; ?>
                                </TD>
                            </TR>
                            <TR>
                                <TD>
                                    <label for=" besoin ">Votre demande concerne :</label>
                                </TD>
                                <TD>
                                    <SELECT id=" besoin " name="besoin" size=" 1 ">
                                        <?php
                                        $res = mysqli_query($session, "SELECT CategorieM FROM materiel GROUP BY CategorieM");
                                        while ($tab = mysqli_fetch_assoc($res)) {
                                            $cat = addslashes($tab["CategorieM"]);
                                            echo "<Option> $cat </Option>";
                                        }
                                        ?>
                                    </SELECT> (*)
                                </TD>
                            </TR>

                            <TR>
                                <TD>
                                    <label for=" priorite ">Vous êtes :</label>
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
                                    <?php echo $row['Secretariat']; ?>
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
                        <?php
                    }
                        ?>
                        </TABLE>

                        <Table class="table table-striped table-hover text-center">
                            <TR>
                                <TH>
                                    Lundi <br><?php $premierJour = strftime("%d/%m/%Y", strtotime("monday"));
                                    echo "<input type='text' class='form-control-plaintext text-center' readonly name='date_lundi' value='$premierJour'>"; ?>
                                </TH>
                                <TH>
                                    Mardi <br><?php $premierJour = strftime("%d/%m/%Y", strtotime("tuesday"));
                                    echo "<input type='text' class='form-control-plaintext text-center' readonly name='date_mardi' value='$premierJour'>"; ?>
                                    </TH>
                                <TH>
                                    Mercredi <br><?php $premierJour = strftime("%d/%m/%Y", strtotime("wednesday"));
                                    echo "<input type='text' class='form-control-plaintext text-center' readonly name='date_mercredi' value='$premierJour'>"; ?>
                                    </TH>
                                <TH>
                                    Jeudi <br><?php $premierJour = strftime("%d/%m/%Y", strtotime("thursday"));
                                    echo "<input type='text' class='form-control-plaintext text-center' readonly name='date_jeudi' value='$premierJour'>"; ?>
                                    </TH>
                                <TH>
                                    Vendredi <br><?php $premierJour = strftime("%d/%m/%Y", strtotime("friday"));
                                    echo "<input type='text' class='form-control-plaintext text-center' readonly name='date_vendredi' value='$premierJour'>"; ?>
                                    </TH>
                            </TR>

                            <TD>
                                <?php
                                $res = mysqli_query($session, "SELECT * FROM calendrier WHERE JourCal='Lundi' AND EtatCal = 'Disponible'");
                                while ($tab = mysqli_fetch_assoc($res)) {
                                    $horaire = $tab["HoraireCal"];

                                    echo "<Table class='table table-striped table-hover text-center'> <TR> <TD><input type='submit' class='btn btn-primary' name='horaire_lundi' value='$horaire'> </td></TR> </table>";
                                }
                                ?>
                            </tD>

                            <TD>
                                <?php
                                $res = mysqli_query($session, "SELECT * FROM calendrier WHERE JourCal='Mardi' AND EtatCal = 'Disponible'");
                                while ($tab = mysqli_fetch_assoc($res)) {
                                    $horaire = $tab["HoraireCal"];
                                    echo "<Table class='table table-striped table-hover text-center'> <TR> <TD><input type='submit' class='btn btn-primary' name='horaire_mardi' value='$horaire'> </td></TR> </table>";
                                }
                                ?>
                            </TD>
                            <TD>
                                <?php
                                $res = mysqli_query($session, "SELECT * FROM calendrier WHERE JourCal='Mercredi' AND EtatCal = 'Disponible'");
                                while ($tab = mysqli_fetch_assoc($res)) {
                                    $horaire = $tab["HoraireCal"];
                                    echo "<Table class='table table-striped table-hover text-center'> <TR> <TD><input type='submit' class='btn btn-primary' name='horaire_mercredi' value='$horaire'> </td></TR> </table>";
                                }
                                ?>
                            </TD>
                            <TD>
                                <?php
                                $res = mysqli_query($session, "SELECT * FROM calendrier WHERE JourCal='Jeudi' AND EtatCal = 'Disponible'");
                                while ($tab = mysqli_fetch_assoc($res)) {
                                    $horaire = $tab["HoraireCal"];
                                    echo "<Table class='table table-striped table-hover text-center'> <TR> <TD><input type='submit' class='btn btn-primary' name='horaire_jeudi' value='$horaire'> </td></TR> </table>";
                                }
                                ?>
                            </TD>
                            <TD>
                                <?php
                                $res = mysqli_query($session, "SELECT * FROM calendrier WHERE JourCal='Vendredi' AND EtatCal = 'Disponible'");
                                while ($tab = mysqli_fetch_assoc($res)) {
                                    $horaire = $tab["HoraireCal"];
                                    echo "<Table class='table table-striped table-hover text-center'> <TR> <TD><input type='submit' class='btn btn-primary' name='horaire_vendredi' value='$horaire'> </td></TR> </table>";
                                }
                                ?>
                            </TD>
                            </TR>
                        </Table>

                    </fieldset>

                </FORM>

        </div>
    </main>
</body>

</html>