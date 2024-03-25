<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    protected $table = "TCurrencies";
    protected $primaryKey = "CurrencyId";
    public $timestamps = false;
    protected $fillable = [
        'CurrencyId',
        'Name',
        'Value',
    ];
}
