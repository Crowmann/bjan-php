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
$url = "https://api.rss2json.com/v1/api.json?rss_url=http%3A%2F%2Ffeeds.tv2.dk%2Fnyhederne_seneste%2Frss&api_key=p1whcyb32elxey6pebengitravjmva5ik0fpaxqo&order_by=pubDate&order_dir=desc&count=10";
$jsondata = file_get_contents($url);

$data = json_decode($jsondata, true);

//echo "<pre>";
//var_dump($data);
//echo "</pre>";
//die();
// Get news


echo $twig->render('index.twig',
    array(
        'page' => 'Forside',
        'ToiletArray' => $decodedDataArray,
        'NewsArray' => $data,
        'toilet1' => true,
        "navne"=> [
            "1" => "2. sal tv.",
            "2" => "2. sal th.",
            "3" => "3. sal ude tv.",
            "4" => "3. sal ude th.",
            "5" => "3. sal inde tv.",
            "6" => "3. sal inde midt",
            "7" => "3. sal inde spasser kummen",
        ]
    )
);
?>
