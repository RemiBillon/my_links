<?php
include "../src/Service/User/allowUser.php";
include '../src/Service/Favorite/getAllFavorites.php';
include '../src/Service/Favorite/getFavoritesUser.php';

function showFavorites(): void
{
    allowUser(true);
    $sort = filter_input(INPUT_GET, "sort");
    $offset = (int)filter_input(INPUT_GET, "offset");
    if("asc" !== $sort){
        $sort = "desc";
    }
    if(null === $offset){
        $offset = 0;
    }
    $favorites = getAllFavorites($sort, $offset);


    header("Content-Type : application/json");
    echo json_encode($favorites);
}
