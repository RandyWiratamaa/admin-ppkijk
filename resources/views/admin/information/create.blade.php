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
            <form action="{{ route('information.store') }}" class="mb-5" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center push">
                    <div class="col-md-10">
                        <div class="row mb-4">
                            <div class="col-xl-8">
                                <label>Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title..">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-xl-6">
                                <label>Thumbnail</label>
                                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-xl-8">
                                <label>Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($category as $i)
                                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label>Body</label>
                            <textarea id="summernote" name="body" class="form-control"></textarea>
                        </div>
                        <div class="row mb-4">
                            <div class="col-xl-4">
                                <label>Do Date</label>
                                <input type="date" class="form-control" name="do_date">
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
