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
        @if ($check)
        <div class="block block-rounded">
            <div class="block-content">
                <div class="content content-full">
                    <div class="row items-push">
                        <div class="col-md-10 offset-md-1">
                            <div class="block block-rounded h-100 mb-0">
                                <div class="block-header">
                                    <div class="flex-grow-1 text-muted fs-sm fw-semibold">
                                        <i class="fa fa-book me-1"></i> Setting Profile Website
                                    </div>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content bg-body-light">
                                    <h4 class="fs-4 text-center">
                                        <img src="{{ asset('asset/admin/logo/'.$data->logo) }}" style="width:150px" alt="">
                                    </h4>
                                    <small>Nama Situs :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {{ $data->short_name }} - {{ $data->name }}
                                    </h4>
                                    <hr>
                                    <small>Deskripsi :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {!! $data->desc !!}
                                    </h4>
                                    <hr>
                                    <small>Visi :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {!! $data->visi !!}
                                    </h4>
                                    <hr>
                                    <small>Misi :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {!! $data->misi !!}
                                    </h4>
                                    <hr>
                                    <small>Telephone :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {{ $data->phone_number }}
                                    </h4>
                                    <hr>
                                    <small>Email :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {{ $data->email }}
                                    </h4>
                                    <hr>
                                    <small>Alamat :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {!! $data->address !!}
                                    </h4>
                                    <hr>
                                    <small>Jalan :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {{ $data->street_address }}
                                    </h4>
                                    <hr>
                                    <small>Kota :</small>
                                    <h4 class="fs-4 fw-semibold mb-1">
                                        {{ $data->city }}
                                    </h4>
                                    <hr>
                                    <small>Kode POS :</small>
                                    <p class="fs-4 fw-semibold mb-1">
                                        {{ $data->postal_code }}
                                    </h4>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="block block-rounded">
                <div class="alert alert-warning text-center" role="alert">
                    <p class="mb-0">
                        {{ strtoupper($warning_message) }}
                    </p>
                    <a class="alert-link" href="{{ route('profile.create') }}" style="color:blue;">Konfigurasi Profile</a>
                </div>

        </div>
        @endif
    </div>
@endsection
