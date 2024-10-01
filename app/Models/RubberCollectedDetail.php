<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RubberCollectedDetail extends Model
{
    use HasFactory;

    public function rubberCollected()
    {
        return $this->belongsTo(rubberCollected::class);
    }
}