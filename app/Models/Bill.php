<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = "TBills";
    protected $primaryKey = "BillId";
    public $timestamps = false;
    protected $fillable = [
        'BillId',
        'Domain',
        'TxnDate',
        'SyncToken',
        'DueDate',
        'Balance',
        'TotalAmt',
        'CurrencyFId',
        'VendorFId',
        'APAccountFId',
    ];
}
