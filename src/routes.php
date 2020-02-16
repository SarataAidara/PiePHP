<?php
use Core\Router;


Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/register', ['controller' => 'user', 'action' => 'addregister']);
Router::connect('/registeraction', ['controller' => 'user', 'action' => 'register']);
Router::connect('/loginaction', ['controller' => 'user', 'action' => 'addlogin']);
Router::connect('/deco', ['controller' => 'user', 'action' => 'adddeconnect']);
Router::connect('/login', ['controller' => 'user', 'action' => 'login']);
// Router::connect('/loginaction', ['controller' => 'user', 'action' => 'login']);
Router::connect('/compte', ['controller' => 'user', 'action' => 'compte']);
Router::connect('/create', ['controller' => 'user', 'action' => 'create']);
Router::connect('/update', ['controller' => 'user', 'action' => 'update']);
Router::connect('/delete', ['controller' => 'user', 'action' => 'delete']);
Router::connect('/read', ['controller' => 'user', 'action' => 'read']);
Router::connect('/readall', ['controller' => 'user', 'action' => 'readall']);
Router::connect('/erreur', ['controller' => 'formerror', 'action' => 'error']);
Router::connect('/readall', ['controller' => 'formerror', 'action' => 'uniqueemail']);






