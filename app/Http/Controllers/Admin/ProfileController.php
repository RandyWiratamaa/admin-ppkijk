<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $page_title = "Profile";
        $page_type = "index";
        $warning_message = "Anda belum melakukan konfigurasi profile website, silahkan lakukan konfigurasi terlebih dahulu !";
        $data = Profile::orderBy('id', 'ASC')->first();
        $check = Profile::all()->count() > 0;
        return view('admin.profile.index', get_defined_vars());
    }

    public function create()
    {
        $page_title = "Profile";
        $page_type = "create";
        $check = Profile::all()->count() == 1;
        return view('admin.profile.create', get_defined_vars());
    }

    public function store(Request $req)
    {
        $file = $req->file('logo');
        $name = time();
        $ext = $file->getClientOriginalExtension();
        $newName = $name . '.' . $ext;
        $path = $file->move('asset/admin/logo', $newName);

        $profile = new Profile();
        $profile->logo = $newName;
        $profile->name = $req->name;
        $profile->short_name = $req->short_name;
        $profile->desc = $req->desc;
        $profile->visi = $req->visi;
        $profile->misi = $req->misi;
        $profile->phone_number = $req->phone_number;
        $profile->email = $req->email;
        $profile->address = $req->address;
        $profile->street_address = $req->street_address;
        $profile->city = $req->city;
        $profile->postal_code = $req->postal_code;
        $profile->save();

        if($profile) {
            return redirect()
                ->route('profile.index')
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
