<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopSession extends Model
{
    use HasFactory;
    protected $fillable = [
        'session_date',
        'session_name',
        'fee_member',
        'fee_non_member',
        'fee_student',
    ];
}
