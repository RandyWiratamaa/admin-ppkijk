@extends('layouts.backend')

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">{{ $page_title }}</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">{{ $page_title }}</li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page_type }}</li>
            </ol>
            </nav>
        </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                Add {{ $page_title }}
                </h3>
            </div>
            <div class="block-content">
                <form action="{{ route('profile.store') }}" class="mb-5" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center push">
                        <div class="col-md-10">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label>Nama Website</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Website..">
                                </div>
                                <div class="col-md-4">
                                    <label>Singkatan</label>
                                    <input type="text" class="form-control" id="short_name" name="short_name" placeholder="Singkatan..">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                </div>
                                <div class="col-md-4">
                                    <label>No.Telephone</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="No. Telephone...">
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email...">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-9">
                                    <label>Deskripsi</label>
                                    <textarea id="summernote" name="desc" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label>Visi</label>
                                    <textarea id="summernote_visi" name="visi" class="form-control"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label>Misi</label>
                                    <textarea id="summernote_misi" name="misi" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label>Alamat</label>
                                    <textarea id="summernote_address" name="address" class="form-control"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label>Nama Jalan</label>
                                            <input type="text" class="form-control" id="street_address" name="street_address" placeholder="Nama Jalan...">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label>Kota</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Kota...">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <label>Kode Pos</label>
                                            <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Kode Pos...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <div class="text-end">
                                    <button class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-alt-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
