<?php

namespace App;

use App\User;
use App\SubInventory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'hotel_id');
    }

    public function subInventories()
    {
        return $this->hasMany(SubInventory::class, 'hotel_id');
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'hotel_id');
    }
}
