<?php
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    //'cache' => '/path/to/compilation_cache',
    'auto_reload' => true,
    'debug' => true
));
$twig->addExtension(new Twig_Extension_Debug());

// Get info from rest
$uri = "http://nodservice.cloudapp.net/WebService.svc/currentstate";
$jsondata = file_get_contents($uri);
$decodedDataArray = json_decode($jsondata);
// Get info from rest

// Get news
$rss = new rss_php();

// Get news


echo $twig->render('index.twig',
    array(
        'page' => 'Forside',
        'ToiletArray' => $decodedDataArray,
        'toilet1' => true

    )
);
?>
