<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "TCompanies";
    protected $primaryKey = "CompanyId";
    public $timestamps = false;
    protected $fillable = [
        'CompanyId',
        'SyncToken',
        'Domain',
        'SupportedLanguages',
        'CompanyName',
        'Country',
        'FiscalYearStartMonth',
        'LegalName',
        'CompanyStartDate',
        'Sparse'
    ];
}
