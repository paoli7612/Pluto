<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'note',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPositiveAttribute()
    {
        return $this->value>0;
    }

    public function getMarkAttribute()
    {
        return $this->positive ? '+' : '';
    }

    public function getCountAttribute()
    {
        return $this->mark . $this->value;
    }

    public function getColorAttribute()
    {
        if ($this->value == 0) {
            return 'warning';
        }
        return $this->positive ? 'success': 'danger';
    }
}
