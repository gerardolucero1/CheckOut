<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewPhoto extends Model
{
    protected $guarded = [];

    public function revision()
    {
        return $this->belongsTo(Revision::class, 'revision_id');
    }
}
