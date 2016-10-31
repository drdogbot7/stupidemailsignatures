<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'debug' => true
));

$namesJSON = file_get_contents("names.json");
$names = json_decode($namesJSON, true);

// $names = array('test'=>'this is a test','fuck'=>'fuck fuck fuck');

echo $twig->render('people.html', $names );


?>