<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = "TInvoices";
    protected $primaryKey = "InvoiceId";

    public $timestamps = false;
    protected $fillable = [
        'InvoiceId', //
        'Deposit', //
        'Balance', //
        'DocNumber', //
        'ApplyTaxAfterDiscount', //
        'DueDate', //
        'TotalAmt', //
        'SalesTermRef',
        'PrintStatus', //
        'Domain', //
        'TxnDate', //
        'Sparse', //
        'SyncToken', //
        'EmailStatus', //
        'CustomerFId'
    ];
}
