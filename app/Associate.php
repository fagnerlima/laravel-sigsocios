<?php

namespace FlAssociates;

use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    public $timestamps = false;

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
