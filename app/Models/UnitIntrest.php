<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitIntrest extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'email',
        'phone_code',
        'phone_number',
        'massage',
        'unit_url'
    ];

}
