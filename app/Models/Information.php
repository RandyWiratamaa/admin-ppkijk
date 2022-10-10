<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'slug', 'thumbnail'
    ];

    public function information_category()
    {
        return $this->belongsTo('App\Models\InformationCategory', 'category_id', 'id');
    }
}
