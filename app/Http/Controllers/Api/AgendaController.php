<?php

namespace App\Http\Controllers\Api;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class AgendaController extends ApiController
{
    public function index()
    {
        $agenda = Agenda::all();
        return $this->showAll($agenda);
    }
}
