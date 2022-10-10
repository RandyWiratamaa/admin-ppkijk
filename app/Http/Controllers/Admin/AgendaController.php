<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function index()
    {
        $page_title = "Agenda";
        $page_type = "List";
        $categories = ['umum', 'khusus'];
        $types = ['pelatihan', 'seminar'];
        $levels = ['umum', 'dasar', 'menengah', 'lanjut'];
        $agenda = Agenda::all();
        return view('admin.agenda.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate($request,[
            'body' => 'required',
        ]);
        $agenda = new Agenda;
        $agenda->title = $request->title;
        $agenda->category = $request->category;
        $agenda->type = $request->type;
        $agenda->level = $request->level;
        $agenda->body = $request->body;
        $agenda->do_date = $request->do_date;
        $agenda->save();

        if ($agenda) {
            return redirect()
                ->route('agenda.index')
                ->with([
                    alert()->success('Success', 'Agenda Added Successfully')
                ]);
        } else {
            return redirect()
                ->back()
                ->with([
                    alert()->error('Error', 'Failed')
                ]);
        }
    }
}
