<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalCollectorDetails extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    function withdrawalCollectorRubberCollectedDetail()
    {
        return $this->hasMany(WithdrawalCollectorRubberCollectedDetails::class);
    }

    function collector()
    {
        return $this->belongsTo(Collector::class);
    }
    
}
