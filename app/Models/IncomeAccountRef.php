<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeAccountRef extends Model
{
    use HasFactory;
    protected $table = "TIncomeAccountRefs";
    protected $primaryKey = "IncomeAccountRefId";

    public $timestamps = false;
    protected $fillable = [
        'IncomeAccountRefId',
        'Name',
        'Value'
    ];
}
