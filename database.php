<?php

// les constantes d'environnement 

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "Hanane0251");
define("DBNAME", "NOUVELLE_TECHNO");

// dsn de connexion

$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

// Connexion à la base de données

try {
    // Instanciation de PDO

    $db = new PDO($dsn, DBUSER, DBPASS);

    //echo "Connection à la base de donnée réussie";

    $db->exec("SET NAMES utf8");

    // Il est possible (et même préférable de définir le mode par défaut du fetch)

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(PDOException $e){
    die($e->getMessage());
}
