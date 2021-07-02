<?php
require('Connexion_BD.php');
mysqli_set_charset($session, "utf8");
session_start();





function is_mobile()
{
    $regex_match = "/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";

    $regex_match .= "htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";

    $regex_match .= "blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";

    $regex_match .= "symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";

    $regex_match .= "jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";

    $regex_match .= ")/i";


    return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT']));

}


if (is_mobile()) {

    if ($_POST['lang'] == 'fr') {
        $_SESSION['lang'] = 'fr';

    } else if ($_POST['lang'] == 'en') {
        $_SESSION['lang'] = 'en';

    } else if ($_POST['lang'] == 'cn') {
        $_SESSION['lang'] = 'cn';

    }

    header("HTTP/1.1 301 Moved Permanently");

    header("Location: ../gestion-des-reservation-portable/Page_Inscription.php");


} else {
    if ($_POST['lang'] == 'fr') {
        $_SESSION['lang'] = 'fr';

    } else if ($_POST['lang'] == 'en') {
        $_SESSION['lang'] = 'en';

    } else if ($_POST['lang'] == 'cn') {
        $_SESSION['lang'] = 'cn';

    }

    header("HTTP/1.1 301 Moved Permanently");

        header("Location: Page_Inscription.php");


}



?>