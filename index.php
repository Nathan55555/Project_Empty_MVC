<?php
include('includ/fonction.php');
include('vue/navbar.php');
$a=connecterServeurBD();
if($a=="non")
{
 echo "Connexion à la bdd échouée!!";
}
else
{
        echo "Connexion à la BDD réussi!!";
}
?>