<?php

namespace Tjventurini\LaravelDistanceScopes\Scopes;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

trait WithinDistance
{
    /**
     * Filter for entries that are within distance to the given lat lng coordinations.
     *
     * @param  Builder $query
     * @param  float   $lat
     * @param  float   $lng
     * @param  int     $distance
     * @param  bool    $miles
     * @return Builder
     */
    public function scopeWithinDistance(Builder $query, float $lat, float $lng, int $distance = 100, bool $miles = false): Builder
    {
        // use 3959 for miles
        // and 6371 for km
        $unit = $miles ? 3959 : 6371;

        /** @lang SQL */
        $distance_field = <<<QUERY
            (
                {$unit} *
                acos(cos(radians({$lat})) * 
                cos(radians(lat)) * 
                cos(radians(lng) - 
                radians({$lng})) + 
                sin(radians({$lat})) * 
                sin(radians(lat)))
            ) AS distance
        QUERY;

        return $query->select('*', DB::raw($distance_field))
            ->having('distance', '<', $distance);
    }
}
