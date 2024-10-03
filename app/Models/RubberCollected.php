<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RubberCollected extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    function rubberCollectedDetail()
    {
        return $this->hasMany(RubberCollectedDetail::class);
    }

    function collector()
    {
        return $this->belongsTo(Collector::class);
    }
}
