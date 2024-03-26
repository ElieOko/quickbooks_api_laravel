<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountBasedExpenseLineDetail extends Model
{
    use HasFactory;
    protected $table = "TAccountBasedExpenseLineDetails";
    public $timestamps = false;
    protected $primaryKey = "AccountBasedExpenseLineDetailId";
    protected $fillable = [
        "AccountBasedExpenseLineDetailId",
        "TaxCodeRefFId",
        "AccountFId",
        "CustomerFId",
        "BillableStatus",
        "LineNum",
        "DetailType",
        "Description",
    ];
}
