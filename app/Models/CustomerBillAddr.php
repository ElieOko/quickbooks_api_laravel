<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBillAddr extends Model
{
    use HasFactory;
    protected $table = "TCustomerBillAddrs";
    protected $primaryKey = "CustomerBillAddrId";

    public $timestamps = false;
    protected $fillable = [
        'CustomerBillAddrId',
        'CustomerFId',
        'EmployeeFId',
        'VendorFId',
        'CompanyFId',
        'City',
        'Lines',
        'PostalCode',
        'Latitude',
        'Longitude',
        'CountrySubDivisionCode'
    ];
}
