<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function farmers()
    {
        return $this->hasMany(Farmer::class);
    }
}
