<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalFarmerDetails extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    function withdrawalFarmerRubberCollectedDetail()
    {
        return $this->hasMany(WithdrawalFarmerRubberCollectedDetails::class);
    }

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }
}
