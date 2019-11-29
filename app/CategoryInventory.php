<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryInventory extends Model
{
    protected $guarded = [];

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'category_id');
    }
}
