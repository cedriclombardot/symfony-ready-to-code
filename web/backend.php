<?php

require_once __DIR__.'/../backend/bootstrap.php.cache';
require_once __DIR__.'/../backend/AppKernel.php';
//require_once __DIR__.'/../backend/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
