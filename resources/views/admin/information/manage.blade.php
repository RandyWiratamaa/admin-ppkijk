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
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addInformationCategory">
            <i class="fa fa-fw fa-add"></i> Add
        </button>
      </div>


      <div class="block-content">
        <table class="table table-sm table-bordered table-hover table-vcenter">
            <thead class="bg-body-dark">
                <tr>
                    <th class="text-center" style="width: 5%">No.</th>
                    <th class="text-center">Judul</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Isi</th>
                    <th class="text-center">Do Date</th>
                    <th class="text-center" style="width: 7%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($information as $key => $i)
                <tr>
                    <td class="text-center">{{ $key+1 }}</td>
                    <td>{{ $i->title }}</td>
                    <td>{{ $i->information_category->name }}</td>
                    <td>
                        {!! substr(strip_tags($i->body),0, 100) !!}
                        @if (strlen(strip_tags($i->body)) > 100)
                        . . . . .
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($i->do_date == NULL)
                            -
                        @else
                        {{ $i->do_date->isoFormat('D M Y') }}
                        @endif
                    </td>
                    <td class="text-center" style="width: 10%">
                        <a href="{{ url('admin/information/detail/'.$i->slug) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" title="View">
                            <i class="fa fa-eye text-success"></i>
                        </a>
                        <button class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="modal" data-bs-target="#edit{{ $i->slug }}" title="Edit">
                            <i class="fa fa-pencil-alt text-primary"></i>
                        </button>
                        <button class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="modal" data-bs-target="#delete{{ $i->slug }}" title="Delete">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
  @include('admin.information.modal')
@endsection
