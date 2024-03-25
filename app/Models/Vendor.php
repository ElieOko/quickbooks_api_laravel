<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table = "TVendors";
    protected $primaryKey = "VendorId";

    public $timestamps = false;
    protected $fillable = [
        "VendorId",
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
        'AcctNum',
    ];
}
