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
            <a class="btn btn-sm btn-primary" href="{{ route('information.create') }}">
                <i class="fa fa-fw fa-add"></i> Add
            </a>
        </div>


        <div class="block-content">
            <div class="content content-boxed">
                <div class="row items-push">
                    @foreach ($information as $i)
                    <div class="col-md-6">
                        <a href="#" class="block block-rounded block-transparent d-md-flex align-items-md-stretch bg-image h-100 mb-0" style="background-image: url('{{ asset('asset/admin/information_thumbnail/'.$i->thumbnail) }}'); width:500px;" href="#" data-toggle="click-ripple">
                            <div class="block-content block-content-full bg-black-50">
                                <span class="d-inline-block py-1 px-2 rounded bg-black-75 fs-sm fw-bold text-uppercase text-white">
                                    {{ $i->information_category->name }}
                                </span>
                                <div class="py-6">
                                    <h3 class="fw-bold text-white mb-1">{{ $i->title }}</h3>
                                </div>
                                <span class="fs-sm fw-bold text-uppercase text-white-75">
                                    Date
                                    @if ($i->data != null)
                                    <p class="fs-sm">
                                        Date
                                    </p>
                                    @endif
                                </span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center push">
                        {{ $information->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
  </div>
@endsection
