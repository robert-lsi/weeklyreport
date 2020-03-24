<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded = [];

    public function date()
    {
        return $this->belongsTo(Date::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
