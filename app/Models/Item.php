<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = "TItems";
    protected $primaryKey = "ItemId";
    public $timestamps = false;
    protected $fillable = [
        'ItemId',
        'FullyQualifiedName',
        'Domain',
        'Name',
        'SyncToken',
        'Type',
        'Active',
        'Sparse',
        'TrackQtyOnHand',
        'UnitPrice',
        'PurchaseCost',
        'QtyOnHand',
        'Taxable',
        'InvStartDate',
    ];
}
