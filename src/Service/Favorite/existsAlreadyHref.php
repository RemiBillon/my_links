<?php
function existsAlreadyHref(array $favorites):bool{
    foreach (getRawUserFavorites() as $userfavorite){
        foreach($favorites as $value){

            if($userfavorite["href"] === $value["href"]) {
                return true;
            }

        }

    }
    return false;
}