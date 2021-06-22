<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');
require('fpdf.php');


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

$nom = $_SESSION['nom'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(
    40,
    10,

    //<img src='logo_capitole.png' alt='' style='width:10%'>

    //<p>
    utf8_decode("Je soussigné $nom, déclare recevoir <?php echo $CategorieM; ?> N°<?php echo $IdentifiantM ?> Je m’engage à le restituer à tout moment si le responsable de la'")
);

/*  formation en a besoin ou avant le <?php echo $date_retour ?> dans le pire des cas. Le prêt comprend : <?php if ($CategorieM == "Ordinateur") {
                                                                                                                echo "Un " . $CategorieM . " " . $modele . " de la marque : " . $marque . " et une sacoche";
                                                                                                            } else {
                                                                                                                echo "Une " . $CategorieM . " " . $modele . " de la marque : " . $marque;
                                                                                                            } ?>.

//</p>


//<form action="pdf.php" method="POST">
    <p>Fait le <input type="text" name="date_contrat" value="<?php echo strftime('%d/%m/%Y', strtotime('now')) ?>"></p>
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

<?php
if (isset($_POST['valider_contrat'])) {
    $validation = "UPDATE emprunt SET Contrat = 'signé' WHERE emprunt.IdentifiantE = '$IdentifiantE'";
    $result_validation = mysqli_query($session, $validation);
    header("Location: profil.php");
}


?>');*/
$nom = $_SESSION['nom'];
$pdf->Output('I', "contrat.pdf");
