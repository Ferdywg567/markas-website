<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        "photos"     => "json",
        "facilities" => "json",
    ];

    /**
     * Get all of the rooms for the Building
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany(Room::class, 'building_id', 'id');
    }

    /**
     * Get all of the nearestPlaces for the Building
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nearestPlaces()
    {
        return $this->hasMany(NearestPlace::class, 'building_id', 'id');
    }
}
