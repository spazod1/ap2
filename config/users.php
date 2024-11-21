<?php
return [
    'Users.Social.login' => true,
    'OneTimePasswordAuthenticator.login' => true,

    'Auth' => [
    'loginAction' => [
        'controller' => 'Users',
        'action' => 'login',
    ],
    'loginRedirect' => '/cakeproject/accueil',
    'logoutRedirect' => '/users/login',
],

];
