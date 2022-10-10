<?php

namespace App\Http\Controllers\Api;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index()
    {
        $information = Information::orderBy('id', 'ASC')->with('information_category')->get();
        return response()->json([
            'data' => $information
        ]);
    }
}
