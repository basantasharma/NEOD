<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testdescription extends Model
{
    use HasFactory;
    public function testDescription()
    {
        return $this->belongsTo(description::class, 't_id', 'd_id');
    }
    // public function testimg()
    // {
    //     return $this->hasMany(testimage::class, 't_id');
    // }
}
