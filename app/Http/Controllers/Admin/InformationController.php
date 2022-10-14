<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InformationCategory;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    public function __construct()
    {
        $this->path = public_path('asset/admin/information_thumbnail');
    }

    public function index()
    {
        $page_title = "Information";
        $page_type = "List";
        $information = Information::with(['information_category'])->paginate(4);
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

    public function manage()
    {
        $page_title = "Information";
        $page_type = "Manage";
        $category = InformationCategory::all();
        $information = Information::with(['information_category'])->paginate(4);
        return view('admin.information.manage', get_defined_vars());
    }

    public function detail($slug)
    {
        $page_title = "Information";
        $page_type = "Detail";
        $information = Information::where('slug', $slug)->first();
        return view('admin.information.detail', get_defined_vars());
    }

    public function update(Request $request, $slug)
    {
        $information = Information::firstWhere('slug', $slug);

        if($request->thumbnail != '' || $request->thumbnail != null) {
            if(File::exists($this->path .'/'. $information->thumbnail))
            {
                File::delete($this->path.'/'.$information->thumbnail);
            }
            if (!File::isDirectory($this->path)) {
                File::makeDirectory($this->path);
            }

            $file = $request->file('thumbnail');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $newName = $name .'.'. $extension;
            $path = $file->move('asset/admin/information_thumbnail');

            $information->category_id = $request->category_id;
            $information->title = $request->title;
            $information->slug = Str::slug($request->title, '-');
            $information->thumbnail = $newName;
            $information->body = $request->body;
            $information->save();
            if ($information) {
                return redirect()
                    ->route('information.index')
                    ->with([
                        alert()->success('Success', 'Information Updated Successfully')
                    ]);
            } else {
                return redirect()
                    ->back()
                    ->with([
                        alert()->error('Error', 'Failed')
                    ]);
            }
        } else {
            $information->category_id = $request->category_id;
            $information->title = $request->title;
            $information->slug = Str::slug($request->title, '-');
            $information->body = $request->body;
            $information->save();
            if ($information) {
                return redirect()
                    ->route('information.index')
                    ->with([
                        alert()->success('Success', 'Information Updated Successfully')
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
}
