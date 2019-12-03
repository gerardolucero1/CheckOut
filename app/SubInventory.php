<?php

namespace App;

use App\Floor;
use App\Hotel;
use App\SubInventoryProduct;
use Illuminate\Database\Eloquent\Model;

class SubInventory extends Model
{
    protected $guarded = [];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function products()
    {
        return $this->hasMany(SubInventoryProduct::class, 'subInventory_id');
    }

    public function floors()
    {
        return $this->hasMany(Floor::class, 'subInventory_id');
    }

}
