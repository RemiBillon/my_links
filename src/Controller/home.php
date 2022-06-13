<?php

include "../src/Service/User/allowUser.php";
include "../src/Service/Form/getForm.php";
include '../src/Service/Form/isSubmitted.php';
include '../src/Service/Form/isValid.php';
include '../src/Service/Favorite/addFavorite.php';
include '../src/Service/Favorite/deleteFavorite.php';
include '../src/Service/Favorite/getFavoritesUser.php';
include_once "../src/Service/Core/exitUrl.php";


function home(): void
{

    allowUser(true);
    $form = getForm(["favorite"]);
    $favoriteId = filter_input(INPUT_GET, "favoriteId");

    if (isSubmitted($form) && isValid($form)) {
        addFavorite($form);
        exitUrl("/");
    } elseif ($favoriteId) {
        deleteFavorite($favoriteId);
        exitUrl("/");
    }

   $favorites = getFavoritesUser();


    include '../templates/home/home.html.php';


}