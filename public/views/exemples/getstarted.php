<div class="container">
    <div class="card">
        <div class="card-content center-align">
            <p class="card-title">Premier projet</p>
            <div class="divider mb-10"></div>
            <p>Dans ce petit tutoriel, on va prendre en main le micro-framework.</p>
        </div>
    </div>
    <div class="card">
        <div class="card-content center-align">
            <p class="card-title">1. Récupérer le squelette du projet</p>
            <div class="divider mb-10"></div>
            <p>Je ne vais pas m'attarder sur cette partie. Il suffit de récupérer / télécharger le projet sur Github.</p>
            <div class="divider mb-10"></div>
            <p><a target="_blank" class="btn btn-large waves-effect waves-light black" href="https://github.com/MehdiRouis/AlivePHP-Skeleton">OBTENIR</a></p>
        </div>
    </div>
    <div class="card">
        <div class="card-content center-align">
            <p class="card-title">2. Configuration</p>
            <div class="divider mb-10"></div>
            <p>Dans cette partie de configuration, il n'y a pas grand chose à faire.<br />
                Dans un premier temps, on va configurer le chemin du dossier.<br />
                Pour finir, on va configurer les accès à la base de données si vous voulez utiliser la classe préfaite.</p>
            <div class="divider mb-10"></div>
            <p>On commence donc avec l'index.php qui se trouve à la racine du projet. ( Projet/index.php )</p>
            <p>Nous avons 3 définitions à régler :</p>
            <blockquote class="left-align">
                define('PROJECT_SOURCE', ''); // Dossier dans lequel le projet est ( à partir du PROJECT_ROOT )<br />
                define('PROJECT_LINK', 'http://alivephp' . PROJECT_SOURCE); // Lien externe du projet + Dossier contenant le projet<br />
                define('PROJECT_NAME', 'AlivePHP');<br />
                define('PROJECT_INITIALS', 'APHP');
            </blockquote>
            <p>PROJECT_SOURCE permet de savoir dans quel dossier est le projet si jamais votre site est dans un dossier de votre virtualhost.<br />
                Exemple : Mon site est http://test.domaine. Le site est dans http://test.domaine/alivephp. Il faut donc rajouter /alivephp dans PROJECT_SOURCE.</p>
            <p>PROJECT_LINK correspond au lien du site, par la même occasion, il rajoute automatiquement le dossier dans lequel le projet est.</p>
            <p>PROJECT_NAME correspond au nom du projet. ( facultatif )</p>
            <p>PROJECT_NAME correspond au nom court du projet. ( facultatif )</p>
        </div>
    </div>
    <div class="card">
        <div class="card-content center-align">
            <p class="card-title">3. Connexion à la base de donnée ( facultatif )</p>
            <div class="divider mb-10"></div>
            <p>Le connexion à la base de donnée n'est pas obligatoire, mais conseillée. Si vous avez vos propres classes, vous pouvez remplacer / ajouter celles-ci.</p>
            <div class="divider mb-10"></div>
            <p>On commence donc avec le fichier PDOConnect.php qui se trouve dans les modèles. ( Projet/src/Models/Database/PDOConnect.php )</p>
            <p>Dans le constructeur de la classe, on doit changer les valeurs par défaut par vos informations de connexion afin de gagner du temps par la suite.</p>
            <blockquote class="left-align">
                public function __construct($db_name = 'dbname', $db_host = 'dbhost', $db_user = 'dbuser', $db_pass = 'dbpass') {
                $this->db_host = $db_host;
                $this->db_user = $db_user;
                $this->db_pass = $db_pass;
                $this->db_name = $db_name;
                }
            </blockquote>
            <p>Pour accéder à cette base de données, il faudra simplement instancier cette classe n'importe où dans votre projet.</p>
            <blockquote class="left-align">
                $db = new \Models\Database\PDOConnect(); // Instance de la classe PDOConnect<br />
                $db->getPDO(); // Accès aux fonctions de PDO ( prepare, execute, query, exec, etc. )<br />
                // Une fonction intéressante est présente d'ailleurs :<br />
                $db->query('SELECT * FROM users'); // Une méthode query est présente dans la classe PDOConnect qui permet l'automatisation du prepare / execute / query.<br />
                // S'il n'y a pas de paramètres en compte, il fait un query, autrement, il faut un prepare / execute.<br />
                $db->query('SELECT * FROM users WHERE id = ?', [$id]);
            </blockquote>
        </div>
    </div>
    <div class="card">
        <div class="card-content center-align">
            <p class="card-title">4. Création de notre première page</p>
            <div class="divider mb-10"></div>
            <p>Dans un premier temps, on va créer une route. ( Fichier : Projet/init/routes.php )</p>
            <blockquote>
                $router->get('/helloworld', 'Index#helloWorld', 'helloworld');
            </blockquote>
            <p>Si on décortique le tout, on a un 1er paramètre : '/helloworld'.<br />
                Il correspond au chemin depuis la barre d'adresse. ( https://alivephp.alivewebproject.fr/helloworld <br />
                Si on accède à cette route, on passe donc au 2ème paramètre : 'Index#helloWorld'.<br />
                Le paramètre contient en réalité 2 paramètres séparé par un '#'. Si on sépare donc les 2, on a Index et helloWorld.<br />
                L'Index correspond au controller qui sera executé. ( \Controllers\IndexController dans ce cas ). Il rajoute automatiquement Controller à la fin.<br />
                Il est donc obligatoire d'avoir un nom de fichier finissant par 'Controller' étant dans le namespace Controller ( chemin : Projet/src/Controllers ).<br />
                helloWorld correspond à la méthode qui sera appelée dans la classe choisie. ( Exemple : $controller->helloWorld(); )<br />
                Le 3ème et dernier paramètre correspond au nom qui sera associé à cette route. Si rien n'est définit, la route prendra comme nom, le nom de la fonction.</p>
            <div class="divider mb-10"></div>
            <p>On continue donc avec la création de l'IndexController. ( Projet/src/Controllers/IndexController.php</p>
            <blockquote class="left-align">
                namespace Controllers;<br />
                /**<br />
                * @author esska<br />
                */<br />
                class IndexController extends Controller {<br />
                <br />
                public function helloWorld() {<br />
                echo 'Hello World!';<br />
                }<br />
                }<br />
            </blockquote>
            <p>Les controllers étendent de Controller afin de pouvoir récupérer des variables / fonctions protégées.</p>
            <p>Maintenant qu'on a crée la fonction helloWorld(), on peut maintenant accéder à la page /helloworld de votre site.</p>
            <p>Une fonction dans un controller correspond donc à une route.</p>
            <p>Nous avons maintenant le côté Models et Controllers, il nous manque le côté Views.</p>
            <div class="divider mb-10"></div>
            <p>Pour continuer dans notre lancée, il est possible de rendre une vue. Vous pouvez tout aussi bien installer Twig en tant que moteur de template.</p>
            <p>Pour le coup, afin de rendre une vue depuis un controller, c'est assez simple, il suffit d'utiliser une fonction du parent ( Controller.php )</p>
            <blockquote class="left-align">
                $this->render('exemple/helloworld');
            </blockquote>
            <p>Dans notre cas, il va rendre la vue helloworld.php qui se trouve donc dans le répertoire : Projet/public/views/exemple/helloworld.php</p>
            <p>Si la vue n'existe pas, une erreur s'affiche vous donnant donc les informations concernant la vue qui est appelée.</p>
            <p>Afin d'envoyer des variables depuis la fonction render, il suffit d'entrer en paramètres ce que vous voulez :</p>
            <blockquote class="left-align">
                $this->render('exemple/helloworld', ['hw' => 'helloworld']);
            </blockquote>
            <p>Depuis la vue, on peut donc appeler la variable "hw".</p>
            <blockquote class="left-align">
                echo $hw; // return 'helloworld';
            </blockquote>
            <p>Plus qu'à vous souhaiter un bon développement. :3<br />
                - > Des fonctionnalités complémentaires sont disponible et seront abordés prochainement.</p>
        </div>
    </div>
</div>