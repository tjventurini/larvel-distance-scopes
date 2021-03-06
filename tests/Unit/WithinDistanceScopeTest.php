<?php

namespace Tests\Feature;

use PHPUnit\Framework\ExpectationFailedException;
use Tjventurini\LaravelDistanceScopes\Tests\TestCase;
use SebastianBergmann\RecursionContext\InvalidArgumentException;
use Tjventurini\LaravelDistanceScopes\Tests\Database\Models\Location;

class WithinDistanceScopeTest extends TestCase
{
    /**
     * Assert that the model can have the trait assigned.
     *
     * @return void
     * @throws InvalidArgumentException
     * @throws ExpectationFailedException
     */
    public function test_we_can_apply_the_trait(): void
    {
        $Model = new Location();

        $this->assertTrue(true);

        $this->assertTrue(in_array('Tjventurini\LaravelDistanceScopes\Scopes\WithinDistance', class_uses($Model)));
    }
}
