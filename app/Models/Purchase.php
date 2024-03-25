<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table = "TPurchases";
    protected $primaryKey = "PurchaseId";
    public $timestamps = false;
    protected $fillable = [
        "PurchaseId",
        "CustomerFId",
        "SyncToken",
        "Domain",
        "TxnDate",
        "TotalAmt",
        "PaymentType",
        "Sparse"
    ];
}
