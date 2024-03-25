<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "TEmployees";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;
    protected $fillable = [
        "EmployeeId",
        "Domain",
        "DisplayName",
        "PrintOnCheckName",
        "FamilyName",
        "SSN",
        "Sparse",
        "BillableTime",
        "GivenName",
        "Active"
    ];
}
