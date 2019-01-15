<?php

    /**
     * Pour des raisons de structuration, les routes sont exclusivement ici.
     * Il est pour autant possible de les mettres dans l'index.
     * À vous d'adopter votre manière de gérer la liste des routes.
     */
    
    // Route, IndexController -> getHomepage(), home = son nom
    /* -[{GET}]- */
    $router->get('/404', 'Index#getNotFound', 'default');
    $router->get('/', 'Index#getHomepage', 'home');
    $router->get('/documentation/exemples/geturlparam/:id', 'Index#getId', 'getId')->with('id', '[0-9]+');
    $router->get('/documentation/exemples/redirections', 'Index#getRedirection', 'getRedirection');
    $router->get('/documentation/exemples/getrouteurl', 'Index#getFullUrl', 'getFullUrl');
    $router->get('/documentation/exemples/notFound', 'Index#get404', '404');
    $router->get('/documentation/exemples/validator', 'Index#getValidatorInformations', 'getValidator');