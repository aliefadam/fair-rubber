<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RubberCollectedDetail extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function rubberCollected()
    {
        return $this->belongsTo(rubberCollected::class);
    }

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }
}
