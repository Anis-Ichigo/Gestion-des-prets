<?php
date_default_timezone_set('Europe/Paris');

$semaine_prochaine = strftime("%Y-%m-%d", strtotime("+1 week"));
echo $semaine_prochaine." ";

if (isset($_POST['mail'])) {
    $date_retour = $_POST['DateRetour'];
    echo $date_retour;
    if ($date_retour == $semaine_prochaine) {
        mail("antoine.lavigne.costa@gmail.com", "test mail", "le corps du mail");
    }
}
