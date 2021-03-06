<?php

namespace Tjventurini\LaravelDistanceScopes\Tests\Scopes;

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

    public function test_we_can_search_for_locations_within_distance(): void
    {
        // run migrations
        $this->artisan('migrate');

        // assert that we did not have an error
        $this->assertTrue(true);

        // create a location
        $lat      = 40.00000;
        $lng      = 10.00000;
        $Location = Location::factory()->create([
            'lat' => $lat,
            'lng' => $lng
        ]);

        // now let's see if we can use the scope
        $locations = Location::withinDistance($lat, $lng, 10, false)->get();
    }
}
