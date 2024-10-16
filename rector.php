<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    // Define the paths to refactor
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    // Apply PHP-specific sets
    $rectorConfig->import(LevelSetList::UP_TO_PHP_81);

    // Add the rule to import fully qualified names
    $rectorConfig->importNames();
};
