<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $page_title = "Gallery";
        $page_type = "List";
        $data = Gallery::all();
        return view('admin.gallery.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();
        $file = $request->file('image');
        $name = time();
        $ext = $file->getClientOriginalExtension();
        $newName = $name . '.' . $ext;
        $path = $file->move('asset/admin/gallery', $newName);

        $gallery = new Gallery;
        $gallery->title = $request->title;
        $gallery->image = $newName;
        $gallery->save();

        if($gallery) {
            return redirect()
                ->route('gallery.index')
                ->with([
                    alert()->success('Success', 'Gallery Added Successfully')
                ]);
        } else {
            return redirect()
                ->back()
                ->with([
                    alert()->error('Error', 'Failed')
                ]);
        }
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        if($gallery) {
            return redirect()
                ->route('gallery.index')
                ->with([
                    alert()->success('Success', 'Gallery Deleted Successfully')
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
