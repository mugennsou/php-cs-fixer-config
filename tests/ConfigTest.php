<?php

declare(strict_types=1);

namespace Mugennsou\CodeStyle\Tests;

use Mugennsou\CodeStyle\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function test_has_psr12_rule(): void
    {
        $config = new Config();

        expect($config->getRules())->toHaveKey('@PSR12');
        expect($config->getRules()['@PSR12'])->toBeTrue();
    }
}
