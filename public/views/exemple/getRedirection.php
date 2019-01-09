<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<p>Il est possible de rediriger depuis un controller grâce à l'attribut "protected" security. Tous les enfants de Controller héritent donc des fonctions de Security : <br />
	    <code>$this->security->safeExternalRedirect('https://google.fr');</code></p>
	<p>Il est aussi possible de rediriger grâce au nom d'une route avec ce même attribut : <br />
	    <code>$this->security->safeLocalRedirect('home');</code></p>
    </body>
</html>
