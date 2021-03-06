<?php

namespace Tjventurini\LaravelDistanceScopes\Tests\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tjventurini\LaravelDistanceScopes\Scopes\WithinDistance;
use Tjventurini\LaravelDistanceScopes\Tests\Database\Factories\LocationFactory;

class Location extends Model
{
    use HasFactory;
    use WithinDistance;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return new LocationFactory();
    }
}
