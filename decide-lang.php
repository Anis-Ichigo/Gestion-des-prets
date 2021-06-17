<?php

session_start();


?>

<?php
if (isset($_POST['enregistrer_parametres'])) {
    if ($_POST['lang'] == 'fr') {
        $_SESSION['lang'] = 'fr';
        include('fr-lang.php');
    } else if ($_POST['lang'] == 'en') {
        $_SESSION['lang'] = 'en';
        include('en-lang.php');
    }else if ($_POST['lang'] == 'cn') {
        $_SESSION['lang'] = 'cn';
        include('cn-lang.php');
    }
?>
    <script type="text/javascript">
        document.location.href = 'reglage.php';
    </script>
<?php
}else if (isset($_SESSION['lang'])) {
    if ($_SESSION['lang'] == 'fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
        include('fr-lang.php');
    } else if($_SESSION['lang'] == 'en'){      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
        include('en-lang.php');
    }else if($_SESSION['lang'] == 'cn') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
        include('cn-lang.php');
    }
}
?>

<?php


// if (isset($_COOKIE['lang'])) {

// 	if (isset($_POST['enregistrer_parametres'])) {

// 		$lang = $_POST['lang'];
// 	} else {
// 		// si aucune langue n'est déclarée on tente de reconnaitre la langue par défaut du navigateur
// 		//$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
// 		$lang = $_POST['lang'];
// 	}
// }
// //script d'origine
// if ($lang == 'fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
// 	include('fr-lang.php');
// } elseif ($lang == 'en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
// 	include('en-lang.php');
// }
// //fin du script d'origine

// //définition de la durée du cookie (1 an)
// $expire = 365 * 24 * 3600;

// //enregistrement du cookie au nom de lang
// setcookie('lang', $lang, time() + $expire);
