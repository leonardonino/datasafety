<?php

require_once('core/core.php');


$controller=isset($_GET['c']) ? $_GET['c'] : 'index';
$method=isset($_GET['m']) ? $_GET['m'] : 'index'; 
require_once('controllers/'.$controller.'Controller.php');
$controller=$controller.'Controller';
$objeto=new $controller();
$objeto->$method();
