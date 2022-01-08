<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hotel extends Model
{
    use HasFactory;

    public function city(): HasOne
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}
