<?php

namespace Tjventurini\LaravelDistanceScopes\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Tjventurini\LaravelDistanceScopes\ServiceProvider;

class TestCase extends TestbenchTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
