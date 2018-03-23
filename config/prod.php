<?php

// configure your app for the production environment

$app['cache.path'] = __DIR__.'/../var/cache/';
$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => $app['cache.path'].'twig');
