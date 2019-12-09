<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany(TicketPhoto::class, 'ticket_id');
    }
}
