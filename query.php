<?php

require_once('database.php'); 
// Connexion à la basse de donnée effectué il est maintenant possible de récupérer les informations présentes dans la base de donnée

$sql = "SELECT * FROM `USERS`";


// Nous pouvons executer directement la requête étant donné qu'ils s'agit d'une première requête simple

$query = $db->query($sql);

// var_dump($query);

// Il faut maintenant récupérer les information grâce à un fetch ou un fetchAll

$users = $query->fetchAll();

// echo '<pre>';
// var_dump($users[1]["NAME"]);
// echo'</pre>';


// echo '<pre>';
// var_dump($users);
// echo'</pre>';

// Nous allons maintenant maintenant ajouter un utilisateur à notre base de donnée grâce à la requête INSERT INTO

// $sql = "INSERT INTO `USERS`(`NAME`, `PSEUDO`, `EMAIL`, `USER_ROLE`) VALUES ('Rafik', 'rafton', 'rafik@mail.fr','[\"ROLE_USER\"]')";

// $query = $db->query($sql);

// if($db->query($sql) !== false) {
//     echo 'Utilisateur ajoutée à la base de donnée';
// }else{
//     echo 'Un problème est survenu lors de l\'insertion d\'un nouvelle utilisateur';
// }

//Modification de l'utilisateur 

// $sql = "UPDATE `USERS` SET `PSEUDO` = 'fikra' WHERE `idUSERS` = 6";

// $query = $db->query($sql);

// Supression d'un ou de plusieur utilisateurs

// $sql = "DELETE FROM `USERS` WHERE `idUSERS` > 7 AND `idUSERS` <= 14";

// $query = $db->query($sql);
