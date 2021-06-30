<?php
require('decide-lang.php');
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
date_default_timezone_set('Europe/Paris');

require('fpdf183/fpdf.php');

$IdentifiantE = $_POST['IdentifiantE'];


$informations = "SELECT materiel.IdentifiantM AS 'IdentifiantM', materiel.CategorieM AS 'CategorieM', emprunt.DateRetour AS 'DateRetour', modele.IdentifiantMo AS 'IdentifiantMo', modele.Marque AS 'Marque', emprunt.DateEmprunt AS 'DateEmprunt', emprunt.IdentifiantE AS 'IdentifiantE', personne.PrenomPe AS 'PrenomPe', personne.NomPe AS 'NomPe'
                                        FROM personne, materiel, emprunt, modele
                                        WHERE emprunt.IdentifiantM = materiel.IdentifiantM
                                        AND emprunt.IdentifiantPe = personne.IdentifiantPe
                                        AND materiel.IdentifiantMo = modele.IdentifiantMo
                                        AND emprunt.IdentifiantE = '$IdentifiantE'";
$result = mysqli_query($session, $informations);

foreach ($result as $row) {
    $IdentifiantM = $row['IdentifiantM'];
    $CategorieM = $row['CategorieM'];
    $date_retour = strftime('%d/%m/%Y', strtotime($row['DateRetour']));;
    $modele = $row['IdentifiantMo'];
    $marque = $row['Marque'];
    $date_emprunt = strftime('%d/%m/%Y', strtotime($row['DateEmprunt']));
    $IdentifiantE = $row['IdentifiantE'];
    $prenom = $row['PrenomPe'];
    $nom = $row['NomPe'];
}


if ($CategorieM == 'Ordinateur') {
    $var = "un";
} else {
    $var = "une";
}
class PDF extends FPDF
{
    protected $B = 0;
    protected $I = 0;
    protected $U = 0;
    protected $HREF = '';

    function WriteHTML($html)
    {
        // HTML parser
        $html = str_replace("\n", ' ', $html);
        $a = preg_split('/<(.*)>/U', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
        foreach ($a as $i => $e) {
            if ($i % 2 == 0) {
                // Text
                if ($this->HREF)
                    $this->PutLink($this->HREF, $e);
                else
                    $this->Write(10, $e);
            } else {
                // Tag
                if ($e[0] == '/')
                    $this->CloseTag(strtoupper(substr($e, 1)));
                else {
                    // Extract attributes
                    $a2 = explode(' ', $e);
                    $tag = strtoupper(array_shift($a2));
                    $attr = array();
                    foreach ($a2 as $v) {
                        if (preg_match('/([^=]*)=["\']?([^"\']*)/', $v, $a3))
                            $attr[strtoupper($a3[1])] = $a3[2];
                    }
                    $this->OpenTag($tag, $attr);
                }
            }
        }
    }

    function OpenTag($tag, $attr)
    {
        // Opening tag
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyle($tag, true);
        if ($tag == 'A')
            $this->HREF = $attr['HREF'];
        if ($tag == 'BR')
            $this->Ln(10);
    }

    function CloseTag($tag)
    {
        // Closing tag
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyle($tag, false);
        if ($tag == 'A')
            $this->HREF = '';
    }

    function SetStyle($tag, $enable)
    {
        // Modify style and select corresponding font
        $this->$tag += ($enable ? 1 : -1);
        $style = '';
        foreach (array('B', 'I', 'U') as $s) {
            if ($this->$s > 0)
                $style .= $s;
        }
        $this->SetFont('', $style);
    }

    function PutLink($URL, $txt)
    {
        // Put a hyperlink
        $this->SetTextColor(0, 0, 255);
        $this->SetStyle('U', true);
        $this->Write(5, $txt, $URL);
        $this->SetStyle('U', false);
        $this->SetTextColor(0);
    }
}

/*
$prenom = 'haoyang';
$nom = 'yu';
$var = 'une';
$CategorieM = 'ordinateur';
$IdentifiantM = '1234567';
$date_retour = '21/07/2021';
$modele = 'Inspiron 15 3000';
$marque = 'DELL';
$date_emprunt = '21/06/2021';
*/

$pdf = new PDF();
$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(30);
$pdf->AddPage();
$pdf->Image('miage.jpg', 10, 6, 30);
$pdf->Ln(60);
$pdf->SetFont('Helvetica', '', 14);

$pdf->WriteHTML(iconv('UTF-8', 'windows-1252', "Je soussigné(e) <b>{$prenom} {$nom} </b>, déclare recevoir {$var} <b>{$CategorieM} N°{$IdentifiantM}.</b> Je m’engage à restituer le matériel à tout moment si le responsable de la formation en a besoin ou avant le <b>{$date_retour}</b> dans le pire des cas.
"));
$pdf->Ln(15);
$pdf->WriteHTML(iconv('UTF-8', 'windows-1252', "Le prêt comprend :<br>- {$var} <b>{$CategorieM} {$modele}</b> de la marque <b>{$marque}</b>"));
$pdf->Ln();
$pdf->WriteHTML(iconv('UTF-8', 'windows-1252',"- une sacoche"));

$pdf->Ln(40);
$pdf->SetLeftMargin(135);
$pdf->MultiCell(0, 10, iconv('UTF-8', 'windows-1252', "Fait le {$date_emprunt}"));

$pdf->SetLeftMargin(30);
$pdf->SetRightMargin(15);
$pdf->Ln(15);
$pdf->Image('box.png', 31, 202, 5, 0, '');
$pdf->SetLeftMargin(40);
$pdf->WriteHTML(iconv('UTF-8', 'windows-1252', "Je certifie sur l'honneur être d'accord avec le présent contrat."));
$pdf->Ln(15);
$pdf->Image('box.png', 31, 217, 5, 0, '');
$pdf->SetLeftMargin(40);
$pdf->WriteHTML(iconv('UTF-8', 'windows-1252', "En cochant cette case, je consent à l'utilisation de ma signature électronique, je certifie qu'elle est valide et a le même effet qu'une signature écrite sur une copie papier de ce document."));


$pdf->Output();





/*
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
/*
$pdf->Output();*/
