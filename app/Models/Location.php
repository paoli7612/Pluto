<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getRouteAttribute()
    {
        return route('location.show', $this);
    }

    public function getRouteKeyName()
    {
        return $this->slug;
    }
}
