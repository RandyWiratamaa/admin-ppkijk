<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InformationCategory;
use Illuminate\Http\Request;

class InformationCategoryController extends Controller
{
    public function index()
    {
        $information_category = InformationCategory::all();
        return response()->json([
            'information_category' => $information_category
        ]);
    }
}
