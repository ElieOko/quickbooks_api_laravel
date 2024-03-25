<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $table = "TDeposits";
    protected $primaryKey = "DepositId";
    public $timestamps = false;
    protected $fillable = [
        "DepositId",
        "SyncToken",
        "Domain",
        "TxnDate",
        "TotalAmt",
        "Sparse",
        "DiscountDays",
        "Type"
    ];
}
