<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $table = "TTerms";
    protected $primaryKey = "TermId";
    public $timestamps = false;
    protected $fillable = [
        "TermId",
        "SyncToken",
        "Domain",
        "Name",
        "DiscountPercent",
        "DiscountDays",
        "Type",
        "Sparse",
        "Active",
        "DueDays",
    ];
}
