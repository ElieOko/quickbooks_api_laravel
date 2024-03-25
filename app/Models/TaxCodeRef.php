<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxCodeRef extends Model
{
    use HasFactory;
    protected $table = "TTaxCodeRefs";
    protected $primaryKey = "TaxCodeRefId";
    public $timestamps = false;
    protected $fillable = [
        'TaxCodeRefId',
        'Name',
        'Value',
    ];
}
