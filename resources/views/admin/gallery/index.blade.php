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
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addGallery">
            <i class="fa fa-fw fa-add"></i> Add
        </button>
        <div class="row items-push js-gallery img-fluid-100 js-gallery-enabled mt-3">
            @foreach ($data as $i)
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                    <img src="{{ asset('asset/admin/gallery/'.$i->image) }}" alt="" class="img-fluid options-item">
                    <div class="options-overlay bg-black-75">
                        <div class="options-overlay-content">
                            <h3 class="h4 text-white mb-1">{{ $i->title }}</h3>
                            <a href="{{ asset('asset/admin/gallery/'.$i->image) }}" target="_blank" class="btn btn-sm btn-primary img-lightbox">
                                <i class="fa fa-search-plus opacity-50 me-1"></i> View
                            </a>
                            <button class="btn btn-sm btn-danger img-lightbox" data-bs-toggle="modal" data-bs-target="#hapus{{ $i->id }}">
                                <i class="fa fa-trash opacity-50 me-1"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('admin.gallery.modal')
@endsection
