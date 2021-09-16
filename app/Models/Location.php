<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'picture',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
        $this->attributes['address'] = Str::slug($value);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function getRouteAttribute()
    {
        return route('location', $this);
    }

    public function getLinkPictureAttribute()
    {
        return url('/img/' . $this->picture);
    }
}
