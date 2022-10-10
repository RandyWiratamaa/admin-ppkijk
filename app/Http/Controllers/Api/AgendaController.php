<?php

namespace App\Http\Controllers\Api;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::all();
        return response()->json([
            'agenda' => $agenda
        ]);
    }
}
