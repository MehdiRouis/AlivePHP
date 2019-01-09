<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<p>Il est possible de récupérer le lien à partir d'une route depuis une vue : <br />
	    <code>$router->getFullUrl('NomDeLaRoute');</code></p>
	<p>Le résultat donne par exemple pour la route 'getRedirection' : <?= $router->getFullUrl('getRedirection'); ?></p>
    </body>
</html>
