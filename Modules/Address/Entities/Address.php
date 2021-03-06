<?php

namespace Modules\Address\Entities;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    public function leave()
    {
        return $this->hasOne(LivesIn::class);
    }

    public function work()
    {
        return $this->hasOne(WorkIn::class);
    }

     public function office()
    {
        return $this->belongsTo(Office::class);
    }

     public function house()
    {
        return $this->belongsTo(House::class);
    }
}
