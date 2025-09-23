<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__  . '/src')
    ->exclude('.github/workflows');

return (new Config())
    ->setFinder($finder)
    ->setRules([
        '@PSR12' => true,
        'no_unused_imports' => true,
    ])
    ->setRiskyAllowed(true);
