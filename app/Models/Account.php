<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = "TAccounts";
    protected $primaryKey = "AccountId";

    public $timestamps = false;
    protected $fillable = [
        'AccountId',
        'CurrencyFId',
        'FullyQualifiedName',
        'Domain',
        'Name',
        'Classification',
        'AccountSubType',
        'CurrentBalanceWithSubAccounts',
        'Sparse',
        'Active',
        'SubAccount',
        'CurrentBalance',
        'SyncToken',
        'AccountType',
    ];
}
