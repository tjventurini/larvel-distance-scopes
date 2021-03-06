<?php

namespace Tjventurini\LaravelDistanceScopes\Tests;

use InvalidArgumentException;
use Illuminate\Foundation\Application;
use Mockery\Exception\NoMatchingExpectationException;
use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Tjventurini\LaravelDistanceScopes\ServiceProvider;
use Illuminate\Contracts\Container\BindingResolutionException;

class TestCase extends TestbenchTestCase
{
    /**
     * Setup service providers for the tests.
     *
     * @param  Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     *
     * @return void
     * @throws BindingResolutionException
     * @throws InvalidArgumentException
     * @throws NoMatchingExpectationException
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
    }
}
