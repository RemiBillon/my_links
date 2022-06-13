<?php
function getRawUserFavorites(){
    $dbh = getConnexion();
    $sth = $dbh->prepare("SELECT favorite.`id`,favorite.`href`,favorite.`title`, favorite.`description`
FROM `user_favorite`
JOIN `favorite`
ON user_favorite.`favorite_id` = favorite.`id`
WHERE user_favorite.`user_id` = :user_id;"
    ) ;
    $sth->execute([
        ":user_id" => $_SESSION["user"]["id"]
    ]);

    $favorites= $sth -> fetchAll(PDO::FETCH_ASSOC);
    return $favorites;
}


