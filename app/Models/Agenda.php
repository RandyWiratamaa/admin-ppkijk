<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $dates = ['do_date'];
    protected $fillable = [
        'title', 'category', 'type', 'level', 'body', 'do_date'
    ];
}
