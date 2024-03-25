<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAdresseEmail extends Model
{
    use HasFactory;
    protected $table = "TCustomerAdresseEmails";
    protected $primarykey = "CustomerAdresseEmailId";

    public $timestamps = false;
    protected $fillable = [
        'CustomerAdresseEmailId',
        'CustomerFId',
        'VendorFId',
        'EmployeeFId',
        'Adresse',
    ];
}
