<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRef extends Model
{
    use HasFactory;
    protected $table = "TCustomerRefs";
    protected $primaryKey = "CustomerRefId";
    public $timestamps = false;
    protected $fillable = [
        'CustomerRefId',
        'Name',
        'Value',
    ];
}
