<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paramètres d'URL</title>
    </head>
    <body>
	<p>Il est possible de récupérer des informations en ajoutant les paramètres depuis la fonction : <br />
	    <code>$this->render($path, $params = [])</code></p>
	<p>Depuis la liste des routes, il est possible d'ajouter des paramètres à prendre en compte dans le lien : <br />
	    <code>$router->get('path/:slug', 'Index[Controller]', 'nameOfRoute')->with('slug', '[0-9]+');</code></p>
	<p>Il est aussi bien sûr possible de rajouter PLUSIEURS paramètres différents à la fois : <br />
	    <code>$router->get('path/:firstname-:lastname-:username', 'Index[Controller]', 'nameOfRoute')->with('firstname', '[A-Za-z]+')->with('lastname', '[A-Za-z]+')->with('username', '[\w]+');</code></p>
	<p>La valeur du paramètre actuel est donc : <?= $id; ?></p>
    </body>
</html>
