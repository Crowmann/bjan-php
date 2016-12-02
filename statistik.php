<?php
require_once 'vendor/autoload.php';
require "navne.php";
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true,
    'debug' => true
));
$twig->addExtension(new Twig_Extension_Debug());

//echo "Hello world";

echo $twig->render('statistik.twig',
    array(
        'page' => 'Backpage',
        "navne"=> json_encode($toiletter)
        'basename' => basename(__FILE__)

    )
);