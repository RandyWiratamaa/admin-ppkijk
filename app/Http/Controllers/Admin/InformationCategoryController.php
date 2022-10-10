<?php

namespace App\Http\Controllers\Admin;

use Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InformationCategory;
use App\Http\Controllers\Controller;

class InformationCategoryController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $page_title = "Information Category";
        $page_type = "List";
        $delete_msg = "Are you sure that you want to permanently delete the selected element ?";
        $data = InformationCategory::all();
        // if ($request->ajax()) {
        //     $data = InformationCategory::all();
        //     return Datatables::of($data)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){
        //                 $btn = '<a href="javascript:void(0)" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="modal" data-bs-target="#edit{{ $i->slug }}" title="Edit"><i class="fa fa-pencil-alt"></i></a>';
        //                 $btn. = '<a href="javascript:void(0)" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="modal" data-bs-target="#delete{{ $i->slug }}" title="Edit"><i class="fa fa-pencil-alt"></i></a>';

        //                 return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
        return view('admin.information_category.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate($request,[
            'name' => 'required|unique:information_categories|max:30',
        ]);
        $category = new InformationCategory;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();

        if ($category) {
            return redirect()
                ->route('information-category.index')
                ->with([
                    alert()->success('Success', 'Information Category Added Successfully')
                ]);
        } else {
            return redirect()
                ->back()
                ->with([
                    alert()->error('Error', 'Failed')
                ]);
        }
    }

    public function update(Request $request, $id)
    {
        $category = InformationCategory::firstWhere('id', $id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();

        return redirect()
            ->route('information-category.index')
            ->with([
                alert()->success('Success', 'Information Category Updated Successfully')
            ]);
    }

    public function destroy($id)
    {
        $category = InformationCategory::findOrFail($id);
        $category->delete();

        return redirect()
            ->route('information-category.index')
            ->with([
                alert()->success('Success', 'Information Category Deleted Successfully')
            ]);

    }
}
