<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create();

$config = new PhpCsFixer\Config();

// https://cs.symfony.com/doc/ruleSets/index.html
// https://cs.symfony.com/doc/rules/

return $config->setRules([
    '@Symfony' => true,
    'declare_strict_types' => false,
    'global_namespace_import' => true,
    'concat_space' => ['spacing' => 'one'],
])->setFinder($finder)
    ->setRiskyAllowed(true);
