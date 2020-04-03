<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
