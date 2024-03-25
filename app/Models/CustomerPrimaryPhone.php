<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPrimaryPhone extends Model
{
    use HasFactory;
    protected $table = "TPrimaryPhones";
    protected $primarykey = "PrimaryPhoneId";

    public $timestamps = false;
    protected $fillable = [
        'PrimaryPhoneId',
        'CustomerFId',
        'EmployeeFId',
        'VendorFId',
        'FreeFormNumber',
    ];
}
