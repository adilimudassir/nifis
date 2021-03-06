<?php

namespace Modules\Profile\Entities;

use Illuminate\Database\Eloquent\Model;

class ProfileDetail extends Model
{
    protected $guarded = [];

    public function profile()
    {
    	return $this->belongsTo(Profile::class);
    }

}
