<?php 

require __DIR__. '/RequestInterface.php';
require __DIR__.'/http/Request.php';
require __DIR__.'/api/Request.php';

$request = new http\Request();
$request->handle();
echo PHP_EOL;



$request = new  api\Request();
$request->handle();






?>