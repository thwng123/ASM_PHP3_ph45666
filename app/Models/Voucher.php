<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'description',
        'max_uses',
        'max_uses_user',
        'type',
        'discount',
        'min_amount',
        'status',
        'starts_at',
        'expires_at',
    ];
}
