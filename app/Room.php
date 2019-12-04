<?php

namespace App;

use App\Revision;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];

    public function floor()
    {
        return $this->belongsTo(Floor::class, 'floor_id');
    }

    public function assigned()
    {
        return $this->hasOne(AssignedRoom::class, 'room_id');
    }

    public function revisions()
    {
        return $this->hasMany(Revision::class, 'room_id');
    }
}
