<?php
include '../src/Database/getConnexion.php';
function saveUser(
    string $email,
    string $password
): bool
{
    // vous connecter
    $dbh = getConnexion();
//Préparer ma requête
    $sth = $dbh->prepare("INSERT INTO `user`"
        . "(`email`, `password`)"
        . "VALUES (:email,:password)");
    //Exécuter la requête
    try {
        $sth->execute([
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
    } catch (PDOException $e) {
        return false;
    }
    return true;


}