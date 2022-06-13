<?php
include '../src/Database/getConnexion.php';
include_once '../src/Service/Favorite/buildFavorites.php';
include_once '../src/Service/Favorite/buildFavoritesXhr.php';
function getAllFavorites($sort, $offset = 0): array{
    $dbh = getConnexion();
        $sth = $dbh->prepare("SELECT favorite.`id`,favorite.`href`,favorite.`title`, favorite.`description`
FROM favorite
GROUP BY `href`
ORDER BY `id` $sort 
LIMIT 4
OFFSET  $offset;
");

    $sth->execute();
    $favorites = $sth->fetchAll(PDO::FETCH_ASSOC);

    if($offset === 0){
        return buildFavorites($favorites);
    }
    return buildFavoritesXhr($favorites);


}