<?php
include_once '../src/Service/Favorite/buildFavorites.php';
include_once '../src/Service/Favorite/getRawUserFavorites.php';

function getFavoritesUser(): array{
    $favorites = getRawUserFavorites();

    return buildFavorites($favorites);
}