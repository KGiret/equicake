<?php

// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('defines.inc.php');
require(_PATH_ . 'web/tools/smarty/Smarty.class.php');

// Chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

// Connexion Database
try {
$bdd = new PDO("mysql:host=localhost;dbname=equinoxx", "root", "Bbbordeaux16");
$bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée EquinoXx...";
    die();
}

//Identifiant du compte administrateur
$admin_login = 'd8ab1273858e44adc9bf33f41a5432e2';
$admin_password ='aeb44282ab24a8f8ec000711ad16e0af';


// Initialisation Smarty
$smarty = new Smarty();

?>