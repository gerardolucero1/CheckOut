<?php

namespace App;

use App\SubInventoryProduct;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $guarded = [];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryInventory::class, 'category_id');
    }

    public function subProducts()
    {
        return $this->hasMany(SubInventoryProduct::class, 'inventory_id');
    }
}
