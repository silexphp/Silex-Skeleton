<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

$console = new Application('My Silex Application', 'n/a');
$console->getDefinition()->addOption(new InputOption('--env', '-e', InputOption::VALUE_REQUIRED, 'The Environment name.', 'dev'));
$console->setDispatcher($app['dispatcher']);
$console
    ->register('my-command')
    ->setDefinition(array(
        // new InputOption('some-option', null, InputOption::VALUE_NONE, 'Some help'),
    ))
    ->setDescription('My command description')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        // do something
    })
;

if (isset($app['cache.path'])) {
    $console
        ->register('cache:clear')
        ->setDescription('Clears the cache')
        ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
            $cacheDir = $app['cache.path'];
            $finder = Finder::create()->in($cacheDir)->notName('.gitkeep');
            $filesystem = new Filesystem();
            $filesystem->remove($finder);

            $output->writeln(sprintf('%s <info>success</info>', 'cache:clear'));
        })
    ;
}

if (isset($app['logs.path'])) {
    $console
        ->register('logs:clear')
        ->setDescription('Clears the logs')
        ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
            $cacheDir = $app['logs.path'];
            $finder = Finder::create()->in($cacheDir)->notName('.gitkeep');
            $filesystem = new Filesystem();
            $filesystem->remove($finder);

            $output->writeln(sprintf('%s <info>success</info>', 'logs:clear'));
        })
    ;
}

return $console;
