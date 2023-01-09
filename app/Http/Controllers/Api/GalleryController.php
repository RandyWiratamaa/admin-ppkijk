<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class GalleryController extends ApiController
{
    public function index()
    {
        $gallery = Gallery::all();
        return $this->showAll($gallery);
    }
}
