<?php
require_once 'composer.phar/vendor/autoload.php';

Twig_Autoloader::reqister();
$loader = new Twig_Loader_Filesystem('templates');
$twig= new Twig_Environment($loader);

$template = $twig->loadTemplate('index.twig');
$title  = "ok";
    $car=array(
    array('title'=> 'Toyota Camry', 'engine volume'=>'3.5'),
    array('title'=> 'Nissan Juke', 'engine volume'=>'1.5'),
    array('title'=> 'Lexus GX', 'engine volume'=>'4.6'),
    array('title'=> 'Lexus LX', 'engine volume'=>'5.7'),

);
 echo $template->render('data.twig',array('car'=>$car));