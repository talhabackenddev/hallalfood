<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChefRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'certificate',
        'refCode',
        'refBy',
        'cuisine',     
        'long',
        'lat',
        'postCode',
        'street',
        'city',
        'phone',
        'status',
        'reject_reason',
    ];
}
