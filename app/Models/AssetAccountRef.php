<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetAccountRef extends Model
{
    use HasFactory;
    protected $table = "TAssetAccountRefs";
    protected $primaryKey = "AssetAccountRefId";

    public $timestamps = false;
    protected $fillable = [
        'AssetAccountRefId',
        'Name',
        'Value'
    ];
}
