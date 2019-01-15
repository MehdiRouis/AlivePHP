<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Auto-validateur d'inputs</title>
</head>
<body>
<h1>Cette partie sera un peu plus longue que les autres en sachant qu'elle propose des informations concernant la modification.</h1>
<h2>Lancer une vérification</h2>
<hr />
<p>Pour lancer une vérification, il suffit tout simplement de faire comme ceci: <br />
<code>$validator = new \App\Validators\Validator([], 'tablename');</code><br />
Il est important de prendre en compte le nom de la table. En fonction de si le nom de la table est présent, des vérifications supplémentaires pourront avoir lieu comme par exemple la vérification : si l'adresse mail n'existe pas déjà. <br />
Entre "[]" on doit y entrer le type de vérifications à faire : <br />
<code>$validator = new \App\Validators\Validator(['name' => [$firstName, $lastName], 'email' => [$email]], 'patients');</code><br />
"$firstName" correspond à la clé du $_POST[]; On est donc censé pouvoir entrer $_POST[$firstName] pour récupérer l'information. (ATTENTION : C'EST BIEN LA CLÉ ET NON LA VALEUR DU $_POST)<br />
    La liste des vérifications est présente dans le dossier src/App/Validators/Verifications.php.<br />
    Le nom est à gauche, et la fonction à laquelle correspond à droite. Un exemple de la page est donc présente ici :<br />
<code>$this->inputTypes = [<br />
    'name' => 'isValidName',<br />
    'birthDay' => 'isValidBirthDay',<br />
    'email' => 'isValidEmail',<br />
    'editEmail' => 'isBaseEmailValid',<br />
    'phoneNumber' => 'isValidPhoneNumber',<br />
    'password' => 'isValidPassword'<br />
    ];</code><br />
    Pour valider ces inputs il faudra donc poursuivre avec la méthode validate :<br />
    <code>$validator = new \App\Validators\Validator(['name' => [$firstName]]);<br />
    $validator->validate();<br />
    // S'il n'y a pas d'erreurs<br />
        if(!$validator->isThereErrors() {<br />
    // Code ici<br />
    }<br />
    //Récupérer les erreurs<br />
    var_dump($validator->getErrors());<br /></code>
    Les erreurs peuvent être affichés de façon personnalisées. getErrors(); retourne un tableau.<br />
    À partir de ce tableau, la clé du $_POST permet de récupérer l'erreur liée à l'input. Exemple : <br />
    <code>echo $validator->getErrors()[$firstName];</code><br />
    Il est donc possible d'ajouter des types d'erreurs et des fonctions liés aux types d'erreurs.<br />
    Il faut donc aller dans le fichier <i>src/App/Validators/Vérifications.php</i> et y ajouter un contenu dans le tableau <i>$this->inputTypes</i> dans la méthode magique "__construct".<br />
    <code>$this->inputTypes = [<br />
        'name' => 'isValidName',<br />
        'birthDay' => 'isValidBirthDay',<br />
        'email' => 'isValidEmail',<br />
        'editEmail' => 'isBaseEmailValid',<br />
        'phoneNumber' => 'isValidPhoneNumber',<br />
        'password' => 'isValidPassword',<br />
        'username' => 'isValidUsername'<br />
        ];</code><br />
Une fois la ligne rajoutée ( 'username' ), il faut maintenant rajouter la fonction qui va s'occuper de la vérification ( 'isValidUsername' ).<br />
    <code>public function isValidUsername($inputName, $inputValue) {}</code>
    <br />
    Les variables $inputName et $inputValue sont obligatoire. Elles permettent de récupérer la clé du $_POST ( pour ajouter une erreur lié à la clé de l'input ) et la valeur du $_POST.<br />
    Je vous conseil de vous inspirer de ce qui a déjà été réalisé dans les vérifications.
</p>
</body>
</html>
