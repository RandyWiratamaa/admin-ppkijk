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
            Table {{ $page_title }}
            </h3>
            <button class="btn btn-sm btn-alt-danger" data-bs-toggle="modal" data-bs-target="#addPartner">
                <i class="fa fa-fw fa-add"></i> Add
            </button>
        </div>

        <div class="block-content">
            <table class="table table-sm table-bordered table-hover table-vcenter">
                <thead class="bg-body-dark">
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Partner</th>
                        <th class="text-center">Logo</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partner as $i)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $i->name }}</td>
                        <td class="text-center">
                            <img src="{{ asset('asset/admin/partner/'.$i->logo) }}" alt="" width="100px">
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="modal" data-bs-target="#edit{{ $i->slug }}" title="Edit">
                                <i class="fa fa-pencil-alt text-primary"></i>
                            </button>
                            <button class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="modal" data-bs-target="#delete{{ $i->slug }}" title="Delete">
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
  @include('admin.partner.modal')
@endsection
