<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function country()
    {
        return $this->hasOne(description::class, 'countryDescription_id');
    }
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

}
