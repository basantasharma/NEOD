<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use app\Models\description;

class video extends Model
{
    use HasFactory;
    protected $fillable = [
        'v_link',
    ];

    public function video()
    {
        return $this->hasOne(description::class, 'v_id');
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
}
