<?php

/**
 * AlivePHP - Simple micro-framework in PHP.
 * Je vous propose ce micro-framework pour les projets de petites tailles.
 * Niveau requis : Débutant - [[Amateur]] - Intermédiaire - Professionnel - Maître Yoda
 * Types de projets : [[Petit]] - [[Moyen]] - Grand - Très grands
 * Cette page est le cœur de l'application.
 */

/* |Definitions| */
setlocale(LC_TIME, 'fr_FR.utf8'); // Heure traduite en français
define('PROJECT_ROOT', $_SERVER['DOCUMENT_ROOT']); // Dossier local du VHOST
define('PROJECT_SOURCE', ''); // Dossier dans lequel le projet est ( à partir du PROJECT_ROOT )
define('PROJECT_LIBS', PROJECT_ROOT . PROJECT_SOURCE); // Dossier local + Dossier contenant le projet
define('PROJECT_LINK', 'http://alivephp.alivewebproject.fr' . PROJECT_SOURCE); // Lien externe du projet + Dossier contenant le projet
define('PROJECT_NAME', 'AlivePHP');
define('PROJECT_INITIALS', 'APHP');
/* [Appel des classes] */
require PROJECT_LIBS . '/vendor/autoload.php';

/* {Instance des classes} */
$router = new \App\Routes\Router('url');

/* #Routes# */
require PROJECT_LIBS . '/init/routes.php';

/* ~Run~ */
$router->run();