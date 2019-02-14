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
    $router->get('/getstarted', 'Index#getFirstProject', 'firstProject');