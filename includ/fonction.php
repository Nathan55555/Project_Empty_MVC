<?php
function connecterServeurBD() 
{
    $PARAM_hote='localhost'; 
    $PARAM_port='3306';
    $PARAM_nom_bd=''; // le nom de votre base de donn�es
    $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    // mot de passe de l'utilisateur pour se connecter

    $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur,'root');
    if($connect)
    {
        return $connect;
    }
    else
    {
        return "non";
    }
    
}
?>