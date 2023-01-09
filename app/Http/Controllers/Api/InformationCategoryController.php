<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\InformationCategory;
use Illuminate\Http\Request;

class InformationCategoryController extends ApiController
{
    public function index()
    {
        $information_category = InformationCategory::all();
        return $this->showAll($information_category);
    }
}
