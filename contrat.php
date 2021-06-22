<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Contrat</title>
</head>

<body>

    <img src="logo_capitole.png" alt="" style="width:10%">
    <?php
    $informations = "SELECT * 
    FROM personne, materiel, emprunt, modele
    WHERE emprunt.IdentifiantM = materiel.IdentifiantM
    AND emprunt.IdentifiantPe = personne.IdentifiantPe
    AND materiel.IdentifiantMo = modele.IdentifiantMo
    AND emprunt.Contrat LIKE 'a signer'";
    $result = mysqli_query($session, $informations);

    foreach ($result as $row) {
        $IdentifiantM = $row['IdentifiantM'];
        $CategorieM = $row['CategorieM'];
        $date_retour = strftime('%d/%m/%Y', strtotime($row['DateRetour']));;
        $modele = $row['IdentifiantMo'];
        $marque = $row['Marque'];
        $date_emprunt = strftime('%d/%m/%Y', strtotime($row['DateEmprunt']));
        $IdentifiantE = $row['IdentifiantE'];
    }
    ?>

    <p>
        Je soussigné <?php echo $_SESSION['nom'] ?>, déclare recevoir <?php echo $CategorieM; ?> N°<?php echo $IdentifiantM ?> Je m’engage à le restituer à tout moment si le responsable de la
        formation en a besoin ou avant le <?php echo $date_retour ?> dans le pire des cas. Le prêt comprend : <?php if ($CategorieM == "Ordinateur") {
                                                                                                                    echo "Un " . $CategorieM . " " . $modele . " de la marque : " . $marque . " et une sacoche";
                                                                                                                } else {
                                                                                                                    echo "Une " . $CategorieM . " " . $modele . " de la marque : " . $marque;
                                                                                                                } ?>.

    </p>


    <form action="profil.php" method="POST">
        <input type="hidden" name="IdentifiantE" value="<?php echo $IdentifiantE ?>" readonly>
        <input type="text" name="date_contrat" size="20" class="form-control-plaintext" value="<?php echo  "Fait le " . strftime('%d/%m/%Y', strtotime('now')) ?>" readonly>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">
                Je certifie sur l'honneur être d'accord avec le présent contrat.
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
            <label class="form-check-label" for="flexCheckChecked">
                En cochant cette case, je consent à l'utilisation de ma signature électronique, je suis d'accord que la signature est valide et a le même effet qu'une signature écrite sur une copie
                papier de ce document.
            </label>
        </div>
        <input type="submit" value="Valider" name="valider_contrat">
    </form>



</body>

</html>