<?php

namespace App;

use App\SubInventory;
use Illuminate\Database\Eloquent\Model;

class SubInventoryProduct extends Model
{
    protected $guarded = [];

    public function subInventory()
    {
        return $this->belongsTo(SubInventory::class, 'subInventory_id');
    }
}
