<?php

return [
    "/" => [
        "controller" => "home.php",
        "action" => "home"
    ],
    "/signup" => [
        "controller" => "User/signup.php",
        "action" => "signup"
    ],
    "/signin" => [
        "controller" => "User/signin.php",
        "action" => "signin"
    ],
    "/logout" => [
        "controller" => "User/logout.php",
        "action" => "logout"
    ],

    "/favorites" => [
        "controller" => "favorites/showFavorites.php",
        "action" => "showFavorites"
    ],
    "/api/favorites" => [
        "controller" => "Api/showFavorites.php",
        "action" => "showFavorites"
    ],
];


/* return [
    "/" => [
        "controller" => "signin.php",
        "action" => "signin",
        "controllerUser" => "home.php",
        "actionUser" => "home"
    ],
    "/signup" => [
        "controller" => "signup.php",
        "action" => "signup",
        "controllerUser" => "home.php",
        "actionUser" => "home"
    ],
    "/signin" => [
        "controller" => "signin.php",
        "action" => "signin",
        "controllerUser" => "home.php",
        "actionUser" => "home"
    ],
    "/logout" => [
        "controller" => "signup.php",
        "action" => "signup",
        "controllerUser" => "logout.php",
        "actionUser" => "logout"
    ],
];*/

/*return [
    "/" => [
        "controller" => "home.php",
        "action" => "home"
    ],
    "/signup" => [
        "controller" => "signup.php",
        "action" => "signup"
    ],
    "/signin" => [
        "controller" => "signin.php",
        "action" => "signin"
    ],
];*/
/*
[
    "/" => 'home',
    "/signup" => 'signup',
    "/signin" => 'signin',
];
*/