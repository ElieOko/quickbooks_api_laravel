<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAdresse extends Model
{
    use HasFactory;
    protected $table = "TWebAdresses";
    protected $primaryKey = "WebAdresseId";
    public $timestamps = false;
    protected $fillable = [
        "Uri",
        "VendorFId"
    ];
}
