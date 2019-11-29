<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'hotel_id');
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'hotel_id');
    }
}
