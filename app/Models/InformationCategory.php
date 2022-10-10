<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationCategory extends Model
{
    use HasFactory;

    protected $table = 'information_categories';

    protected $fillable = [
        'name', 'slug'
    ];

    public function information()
    {
        return $this->hasMany('App\Models\Information', 'category_id', 'id');
    }
}
