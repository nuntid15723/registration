<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'mobile',
        'confirmed_mobile',
        'email',
        'confirmed_email',
        'organization',
        'organization_name',
        'receipt_name',
        'receipt_address',
    ];
}
