<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasePlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'plan',
        'price',
        'credit',
        'phoneNumber',
        'dataFilter',
        'csvExport',
        'start',
        'end',
    ];
}
