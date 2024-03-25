<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "TCustomers";
    protected $primaryKey = "CustomerId";

    public $timestamps = false;
    protected $fillable = [
        "CustomerId",
        'SyncToken',
        'Domain',
        'DisplayName',
        'GivenName',
        'FullyQualifiedName',
        'CompanyName',
        'FamilyName',
        'PreferredDeliveryMethod',
        'Taxable',
        'Sparse',
        'Active',
        'Job',
        'BillWithParent',
        'BalanceWithJobs',
        'PrintOnCheckName',
        'Balance',
    ];
}
