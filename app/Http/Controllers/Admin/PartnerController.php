<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function index()
    {
        $page_title = "Partner";
        $page_type = "List";
        $partner = Partner::all();
        return view('admin.partner.index', get_defined_vars());
    }

    public function store(Request $req)
    {
        $file = $req->file('logo');
        $name = time();
        $ext = $file->getClientOriginalExtension();
        $newName = $name . '.' . $ext;
        $path = $file->move('asset/admin/partner', $newName);

        $partner = New Partner;
        $partner->name = $req->name;
        $partner->logo = $newName;
        $partner->save();

        if ($partner) {
            return redirect()
                ->route('partner.index')
                ->with([
                    alert()->success('Success', 'Partner Added Successfully')
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
