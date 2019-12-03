<?php

namespace App;

use App\Inventory;
use App\SubInventory;
use Illuminate\Database\Eloquent\Model;

class SubInventoryProduct extends Model
{
    protected $guarded = [];

    public function subInventory()
    {
        return $this->belongsTo(SubInventory::class, 'subInventory_id');
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inventory_id');
    }
}
