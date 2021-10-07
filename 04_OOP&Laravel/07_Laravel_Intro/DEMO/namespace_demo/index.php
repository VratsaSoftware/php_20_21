<?php

// require_once('App\User.php');
// require_once('Plugins\Package\User.php');
require('vendor\autoload.php');

// spl_autoload_register(function ($class) {
//     echo DIRECTORY_SEPARATOR;
//     $path = explode('\\', $class);
//     $path = implode(DIRECTORY_SEPARATOR, $path);

//     require($class . '.php');
// });

// use App\User;
// use Plugins\Package\User as UserFromPackage;

// $user1 = new User('This is User from App folder');
// $user1->getName();

// $user2 = new UserFromPackage('This is User from Plugins\Package Folder');
// $user2->getName();

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

$validator = Validation::createValidator();

$violations = $validator->validate('', [
    new Length(['min' => 10]),
    new NotBlank(),
]);

if (0 !== count($violations)) {
    // there are errors, now you can show them
    foreach ($violations as $violation) {
        echo $violation->getMessage() . '<br>';
    }
}
