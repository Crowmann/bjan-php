<?php
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true,
    'debug' => true
));
$twig->addExtension(new Twig_Extension_Debug());




echo $twig->render('Static.twig',
    array(
        'page' => 'Secondpage'

    )
);