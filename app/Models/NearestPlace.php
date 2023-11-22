<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearestPlace extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the building that owns the NearestPlace
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function building()
    {
        return $this->belongsTo(Building::class, 'building_id', 'id');
    }
}
