<?php

    $nomlogin = 'root';
    $nompasswd = '';
    $nombase = 'gestion_des_prets';

    function connexion($nomlogin, $nompasswd, $nombase)
    {
        //Connexion à la base de données
        $session = mysqli_connect('localhost', $nomlogin, $nompasswd);
        if ($session == NULL) //Test de connexion réussie
        {
            echo ("<p>Echec de connexion</p>");
        } else {
            //Sélection de la base de données
            if (mysqli_select_db($session, $nombase) == TRUE) {
                return $session;
            } else {
                echo ("Cette base n'existe pas");
            }
        }
    }

    $session = connexion($nomlogin, $nompasswd, $nombase);
?>