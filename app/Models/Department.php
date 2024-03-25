<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "TDepartments";
    public $timestamps = false;
    protected $primaryKey = "DepartementId";
    protected $fillable = [
        'DepartementId',
        'FullyQualifiedName',
        'Domain',
        'Name',
        'SyncToken',
        'SubDepartment',
        'Sparse',
        'Active'
    ];
}
