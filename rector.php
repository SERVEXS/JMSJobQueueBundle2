<?php

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPhpSets(php82: true)
    ->withPaths([
        __DIR__ . '/Command',
        __DIR__ . '/Console',
        __DIR__ . '/Cron',
        __DIR__ . '/DependencyInjection',
        __DIR__ . '/Entity',
        __DIR__ . '/Event',
        __DIR__ . '/Exception',
        __DIR__ . '/Resources',
        __DIR__ . '/Retry',
        __DIR__ . '/Twig',
        __DIR__ . '/View',
        __DIR__ . '/Tests',
    ])
    ->withSets([
//        \Rector\PHPUnit\Set\PHPUnitSetList::PHPUNIT_100,
        \Rector\Symfony\Set\SymfonySetList::SYMFONY_50,
        \Rector\Symfony\Set\SymfonySetList::SYMFONY_51,
        \Rector\Symfony\Set\SymfonySetList::SYMFONY_52,
        \Rector\Symfony\Set\SymfonySetList::SYMFONY_53,
        \Rector\Symfony\Set\SymfonySetList::SYMFONY_54,
//        \Rector\Symfony\Set\SymfonySetList::SYMFONY_60,
//        \Rector\Symfony\Set\SymfonySetList::SYMFONY_61,
//        \Rector\Symfony\Set\SymfonySetList::SYMFONY_62,
//        \Rector\Symfony\Set\SymfonySetList::SYMFONY_63,
//        \Rector\Symfony\Set\SymfonySetList::SYMFONY_64,
    ])
    ->withPreparedSets(
        codeQuality: true,
    );