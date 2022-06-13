<?php
include "../src/Service/User/allowUser.php";
include '../src/Service/Favorite/getAllFavorites.php';
include '../src/Service/Favorite/addFavoriteById.php';
include '../src/Service/Favorite/getFavoritesUser.php';
include_once "../src/Service/Core/exitUrl.php";
include_once '../src/Service/Favorite/existsAlreadyHref.php';

function showFavorites(): void
{
    allowUser(true);
    $sort = filter_input(INPUT_GET, "sort");
    $favoriteId = filter_input(INPUT_GET, "favorite");

    if ($favoriteId) {
        addFavoriteById($favoriteId);
        exitUrl("/");
    }
    if ("asc" !== $sort) {
        $sort = "desc";
    }


    $favorites = getAllFavorites($sort);
    foreach (getFavoritesUser() as $userfavorite){
        foreach($favorites as &$value){

            if($userfavorite["href"] === $value["href"]) {
                $value["has"] = true;
            }

        }
    }

    include "../templates/favorites/showFavorites.html.php";
}
