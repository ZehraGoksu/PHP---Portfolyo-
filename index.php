<?php

require  './vendor/autoload.php';

 
$app = new \Core\Bootstrap();


require "./App/router.php";

$app->run();

?>