<?php

namespace Tyondo\Testimonial\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(config('ttestimonial.namespace').'User');
    }
}
