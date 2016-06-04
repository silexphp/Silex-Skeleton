<?php
date_default_timezone_set('Asia/Tokyo');
mb_language('Japanese');

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['twig.form.templates'] = [
//    'forms/form-layout.html.twig',
    'forms/form-horizontal-layout.html.twig',
];

$app['translator.domains'] = [
    'messages' => [
        'ja' => [
            'Send' => '送信する',
            'Form submitted.' => '送信が完了しました。'
        ],
    ],
];
