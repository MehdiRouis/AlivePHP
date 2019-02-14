<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<p>Lorsque la page n'existe pas, il y a une erreur affichée : "No matching route".</p>
	<p>Ce qui peut rapidement être gênant lorsqu'on veut publier un site propre.</p>
	<p>Pour éviter ce genre de problème, il est possible de créer une route qui permet donc de gérer ce cas.</p>
	<p>La route doit avoir pour nom : 'default'. Si jamais la route utilisée existe déjà, il executera en premier la fonction du controller de la route "default", et ensuite la fonction de la route qui possède le même chemin.</p>
    </body>
</html>
