<?php

namespace Tjventurini\LaravelDistanceScopes\Tests\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tjventurini\LaravelDistanceScopes\Tests\Database\Models\Location;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->address,
            'lat'               => $this->faker->randomFloat(6, 40, 41),
            'lng'               => $this->faker->randomFloat(6, 10, 11),
        ];
    }
}
