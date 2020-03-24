<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $guarded = [];
    // protected $with = ['reports'];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
