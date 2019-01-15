<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Accueil - Alive PHP</title>
    </head>
    <body>
	<p><?= $router->getFullUrl('home'); ?></p>
	<p><a href="<?= $router->getFullUrl('getId', ['id' => 5]); ?>">Paramètres d'URL</a></p>
	<p><a href="<?= $router->getFullUrl('getFullUrl'); ?>">Récupérer l'URL d'une page à partir du nom d'une route</a></p>
	<p><a href="<?= $router->getFullUrl('getRedirection'); ?>">Redirections</a></p>
    <p><a href="<?= $router->getFullUrl('404'); ?>">Pages introuvables</a></p>
    <p><a href="<?= $router->getFullUrl('getValidator'); ?>">Système d'auto-validation d'inputs</a></p>
    </body>
</html>
