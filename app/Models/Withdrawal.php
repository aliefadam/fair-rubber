<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    function withdrawalCollectorDetail()
    {
        return $this->hasMany(WithdrawalCollectorDetails::class);
    }

    function withdrawalFarmerDetail()
    {
        return $this->hasMany(WithdrawalFarmerDetails::class);
    }
}
