<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    private const DEPOSIT_FEE_PERCENTAGE = 0.02;

    public function getDepositFee(){
        return self::DEPOSIT_FEE_PERCENTAGE;
    }
}
