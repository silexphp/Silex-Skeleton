<?php

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

// include the prod configuration
require __DIR__.'/prod.php';

// enable the debug mode
$app['debug'] = true;
$app['logs.path'] = __DIR__.'/../var/logs/';

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => $app['logs.path'].'silex_dev.log',
));

$app->register(new WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => $app['cache.path'].'profiler',
));
