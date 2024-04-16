<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// class read extends Model
// {
//     use HasFactory;
//     protected $fillable = [
//         'r_link',
//     ];

//     public function read()
//     {
//         return $this->hasOne(description::class, 'r_id');
//     }
// }