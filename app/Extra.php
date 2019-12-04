<?php

namespace App;

use App\Revision;
use App\SubInventoryProduct;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $guarded = [];

    public function revision()
    {
        return $this->belongsTo(Revision::class, 'revision_id');
    }

    public function product()
    {
        return $this->belongsTo(SubInventoryProduct::class, 'product_id');
    }
}
