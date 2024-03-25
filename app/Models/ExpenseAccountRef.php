<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseAccountRef extends Model
{
    use HasFactory;
    protected $table = "TExpenseAccountRefs";
    protected $primaryKey = "ExpenseAccountRefId";

    public $timestamps = false;
    protected $fillable = [
        'ExpenseAccountRefId',
        'Name',
        'Value'
    ];
}
