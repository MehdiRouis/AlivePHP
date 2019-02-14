<?php
/**
 * @var \App\Views\Navbar $navbar
 * @var array $news
 * @var string $pageName
 * @var \Models\Authentication\DBAuth $auth
 * @var \Models\Users\User $user
 * @var \App\Routes\Router $router
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title><?= PROJECT_NAME; ?><?= isset($pageName) ? ' - ' . $pageName : ''; ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,600,800,900" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/ico" href="<?= PROJECT_LINK; ?>/public/assets/img/favicon.png" />
    <link type="text/css" rel="stylesheet" href="<?= PROJECT_LINK; ?>/public/assets/import/Materialize/css/materialize.min.css"  media="screen" />
    <link type="text/css" rel="stylesheet" href="<?= PROJECT_LINK; ?>/public/assets/css/style.css" />
</head>
<body class="grey lighten-2">
<div id="home">
    <div class="parallax" data-img="<?= PROJECT_LINK; ?>/public/assets/img/parallax/bureau.jpg"></div>
</div>
<header>
    <nav id="navbar">
        <div class="nav-wrapper dark-blue">
            <a href="http://alivewebproject/account/dashboard"><i class="fas fa-cloud"></i></a>
            <a href="http://alivewebproject/account/dashboard" class="brand-logo"><?= PROJECT_INITIALS; ?></a>
            <ul class="right center-align">
                <li><a id="menuSideNav" data-target="slide-out" class="right sidenav-trigger"><i class="material-icons">menu</i></a></li>
            </ul>
        </div>
    </nav>
</header>
<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="http://alivewebproject/public/assets/img/navbar/background.jpg" alt="Office background" />
            </div>
            <a href="http://alivewebproject/user/8/profile"><span class="circle white darken-1 black-text hoverable avatar">A</span></a>
            <a href="http://alivewebproject/user/8/profile"><span class="white-text name right-align">AlivePHP</span></a>
            <a href="http://alivewebproject/user/8/profile"><span class="white-text email right-align">support@alivewebproject.fr</span></a>
        </div>
    </li>
    <li><a href="<?= $router->getFullUrl('home') ?>"><i class="fas fa-home"></i> ACCUEIL</a></li>
    <li><a href="<?= $router->getFullUrl('firstProject'); ?>"><i class="fas fa-file-export"></i> GET STARTED</a></li>
</ul>