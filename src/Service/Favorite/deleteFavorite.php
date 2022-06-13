<?php

include_once '../src/Service/User/saveUser.php';

function deleteFavorite(int $id): bool
{
    $dbh = getConnexion();
    $sth = $dbh->prepare("
DELETE  
FROM user_favorite
WHERE user_favorite.`favorite_id` = :id AND user_favorite.`user_id` = :user_id ;
DELETE  
FROM favorite
WHERE favorite.`id` = :id;
 ");
    $sth->execute([
        "id" => $id,
        "user_id" => $_SESSION["user"]["id"],
    ]);
    return true;

}
//    DELETE user_favorite, favorite
//FROM user_favorite
//JOIN favorite
//ON user_favorite.`favorite_id` = favorite.`id`
//WHERE favorite.`href` = :href  AND  user_favorite.`user_id` = :user_id
//;

/*foreach ($_SESSION["user"]["favorites"] as $key => $value) {
    if ($href === $value["href"]) {
        array_splice($_SESSION["user"]["favorites"], $key, 1);
        return saveUser(
            $_SESSION["user"]["email"],
            $_SESSION["user"]["password"],
            $_SESSION["user"]["favorites"]
        );
    }
}*/

