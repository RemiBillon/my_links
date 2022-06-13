<?php

session_start();

$routeList = require('./../config/routes.php');
$url = filter_input(INPUT_SERVER, "PATH_INFO");

if (null === $url) {
    $url = '/';
}


foreach ($routeList as $path => $route) {
    if ($url === $path) {

        include "./../src/Controller/" . $route['controller'];
        $route['action']();

    }
}
/*$dbh = new PDO(
    "mysql:host=localhost :3306;dbname=my_links",
    "root",
    ""
);

var_dump($dbh);*/
/*include '../src/Database/getConnexion.php';
// vous connecter
$dbh = getConnexion();
//Préparer ma requête
$sth = $dbh->prepare("INSERT INTO `user`(
                   `email`, `password`) 
                   VALUES ('??','??'
) ");
//Exécuter la requête
$sth->execute();
*/

/*function insert(string $dbName, array $fields)
{
    $fieldsName = [];
    $fieldsValue =[];

    foreach ($fields as $key => $value){
        $fieldsName[] = $key;
        $fieldsValue[] = $value;
    }
    $dbh = new PDO();

    $sth = $dbh->prepare("
INSERT INTO `$dbName`(`".implode("`, `",$fieldsName)."`") VALUES ('$email','$password'
) ");

    $sth->execute();
}*/
/*
try{
    new Toto();
}catch (Throwable $e){
    var_dump($e->getMessage());
    var_dump("une erreur s'est produite");
}*/
/*$email ='a@gmail.com';
$dbh = getConnexion();
$sth = $dbh->prepare("SELECT `id`,`email`,`password` FROM `user`
          WHERE `email` =:email;"
) ;
$sth->execute([
    ":email" => $email
]);
// récupérer le jeu de résultat
$result = $sth -> fetch(PDO::FETCH_ASSOC);*/

/*$href ="https://www.php.net/manual/fr/function.explode.php";
$title ="?";
$desc = "?";

$dbh = getConnexion();

$sth = $dbh->prepare("
INSERT INTO `favorite`(`href`,`title`,`description`) VALUES (:href,:title, :description) ");

$sth->execute([
    "href" => $href,
    "title" => $title,
    "description" => $desc,
]);

var_dump($dbh -> lastInsertId());

$sth = $dbh->prepare("
INSERT INTO `user_favorite`(`user_id`,`favorite_id`) VALUES (:user_id,:favorite_id) ");

$sth->execute([
    "user_id" => $_SESSION["user"]["id"],
    "favorite_id" => $title,
]);*/
/*$dbh = getConnexion();
$sth = $dbh->prepare("SELECT favorite.id, favorite.href,favorite.title, favorite.description
FROM user_favorite
JOIN favorite
ON user_favorite.favorite_id = favorite.id
WHERE user_favorite.user_id =1;"
) ;
$sth->execute();

$result = $sth -> fetchAll(PDO::FETCH_ASSOC);*/

/*$tab = [
    "email" => "toto",
    "password" => true
];

extract($tab);*/


