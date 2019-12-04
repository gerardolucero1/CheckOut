<?php

namespace App;

use App\Extra;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $guarded = [];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function photos()
    {
        return $this->hasMany(ReviewPhoto::class, 'revision_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function extras()
    {
        return $this->hasMany(Extra::class, 'revision_id');
    }
}
