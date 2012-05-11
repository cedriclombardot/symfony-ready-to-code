<?php

require_once __DIR__.'/../frontend/bootstrap.php.cache';
require_once __DIR__.'/../frontend/AppKernel.php';
//require_once __DIR__.'/../frontend/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
