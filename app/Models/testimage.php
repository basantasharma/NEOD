<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimage extends Model
{
    use HasFactory;
    protected $fillable = [
        'images',
    ];
    public function testimg()
    {
        return $this->belongsTo(testdescription::class, 'img_id');
    }
    // protected static function boot()
    // {
    //     parent::boot();

    // static::creating(function ($testimages) {
    //         if (self::count() >= 2) {
    //             return false;
    //         }
    //     });
    // }
}
