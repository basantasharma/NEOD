<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimage extends Model
{
    use HasFactory;
    protected $fillable = [
        'images',
        'title',
    ];
    public function testimg()
    {
        return $this->belongsTo(description::class, 'img_id');
    }
    public function setNameAttribute($value)
    {
        $this->attributes['title'] = ucwords($value);
    }
}
