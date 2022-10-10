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
                    List {{ $page_title }}
                </h3>
                <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addAgenda">
                    <i class="fa fa-fw fa-add"></i> Add
                </a>
            </div>

            <div class="block-content">
                <div class="content content-full">
                    <div class="row items-push">
                        <table class="table table-sm table-bordered table-hover table-vcenter">
                            <thead class="bg-body-dark">
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Judul Agenda</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Level</th>
                                    <th class="text-center">Tanggal Pelaksanaan</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agenda as $key => $i)
                                <tr>
                                    <td class="text-center">{{ $key+1 }}</td>
                                    <td>{{ ucwords($i->title) }}</td>
                                    <td class="text-center">{{ ucwords($i->type) }}</td>
                                    <td class="text-center">{{ ucwords($i->category) }}</td>
                                    <td class="text-center">{{ ucwords($i->level) }}</td>
                                    <td class="text-center">{{ $i->do_date->format('d M Y') }}</td>
                                    <td class="text-center" style="width: 7%">
                                        <button class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="modal" data-bs-target="#editAgenda{{ $i->id }}" title="Edit">
                                            <i class="fa fa-pencil-alt text-primary"></i>
                                        </button>
                                        <button class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="modal" data-bs-target="#deleteAgenda{{ $i->id }}" title="Delete">
                                            <i class="fa fa-trash text-danger"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.agenda.modal')
@endsection
