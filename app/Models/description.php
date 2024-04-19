<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class description extends Model
{
    use HasFactory;
    protected $fillable = [
        'descriptions',

    ];
    protected $table = "descriptions";
    protected $primaryKey = "d_id";
    public function country()
    {
        return $this->belongsTo(country::class, 'countryDescription_id');

    }
    public function video(): BelongsTo
    {
        return $this->belongsTo(video::class, 'v_id');
    }

    public function testDescription()
    {
        return $this->hasMany(testdescription::class, 't_id', 'd_id');
    }
    public function testimg()
    {
        return $this->hasMany(testimage::class, 'img_id');
    }

}
