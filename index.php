<?php

function test($post, $get, $server) {

// echo "<pre>";
// print_r($post) . "</br>" ;
// print_r($get) . "</br>";
// print_r($server) . "</br>";
// echo "</pre>";

} test($_POST, $_GET, $_SERVER);



define('BASE_URI', str_replace('\\', '/', substr(__DIR__,
strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));

$app = new Core\Core();
$app->run();