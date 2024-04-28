<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testdescription extends Model
{
    use HasFactory;
    public function testDescription()
    {
        return $this->belongsTo(description::class, 't_id');
    }
    protected $fillable = [
        'description',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['description'] = ucwords($value);
    }
}
