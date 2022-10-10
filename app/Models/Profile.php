<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'short_name', 'desc', 'visi', 'misi', 'phone_number', 'email', 'address', 'street_address', 'city', 'postal_code'
    ];
}
