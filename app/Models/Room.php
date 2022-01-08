<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    use HasFactory;

    public function hotel(): HasOne
    {
        return $this->hasOne(Hotel::class, 'id', 'hotel_id');
    }
}
