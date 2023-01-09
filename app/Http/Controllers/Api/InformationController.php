<?php

namespace App\Http\Controllers\Api;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class InformationController extends ApiController
{
    public function index()
    {
        $information = Information::orderBy('id', 'ASC')->with('information_category')->get();
        return $this->showAll($information);
    }

    public function detail($slug)
    {
        $information = Information::orderBy('id', 'ASC')->with('information_category')->where('slug', $slug)->first();
        return $this->showOne($information);
    }
}
