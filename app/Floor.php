<?php

namespace App;

use App\Hotel;
use App\SubInventory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $guarded = [];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function subInventory()
    {
        return $this->belongsTo(SubInventory::class, 'subInventory_id');
    }
    public function rooms_floor()
    {
        return $this->hasMany(Room::class, 'floor_id');
    }
}
