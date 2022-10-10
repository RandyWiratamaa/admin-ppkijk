<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InformationCategory;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function index()
    {
        $page_title = "Information";
        $page_type = "List";
        $information = Information::paginate(4);
        return view('admin.information.index', get_defined_vars());
    }

    public function create()
    {
        $page_title = "Information";
        $page_type = "Add New";
        $category = InformationCategory::all();
        return view("admin.information.create", get_defined_vars());
    }

    public function store(Request $req)
    {
        $file = $req->file('thumbnail');
        $name = time();
        $ext = $file->getClientOriginalExtension();
        $newName = $name . '.' . $ext;
        $path = $file->move('asset/admin/information_thumbnail', $newName);

        $information = new Information;
        $information->category_id = $req->category_id;
        $information->title = $req->title;
        $information->slug = Str::slug($req->title, '-');
        $information->thumbnail = $newName;
        $information->body = $req->body;
        $information->save();

        if ($information) {
            return redirect()
                ->route('information.index')
                ->with([
                    alert()->success('Success', 'Information Added Successfully')
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
