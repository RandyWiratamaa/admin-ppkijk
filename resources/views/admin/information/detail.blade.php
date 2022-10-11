@extends('layouts.backend')

@section('content')
<div class="bg-image" style="background-image: url('{{ asset('asset/admin/information_thumbnail/'.$information->thumbnail) }}');">
    <div class="hero bg-black-50">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-4 fw-bold text-white mb-3">
                    {{ $information->title }}
                </h1>
                {{-- <p>
                    <span class="badge rounded-pill bg-dark fs-base px-3 py-2 me-2 m-1">
                    <i class="fa fa-user-circle me-1"></i> by John Doe
                    </span>
                    <span class="badge rounded-pill bg-dark fs-base px-3 py-2 m-1">
                    <i class="fa fa-clock me-1"></i> 15 min read
                    </span>
                </p> --}}
                <div>
                    <a class="btn btn-primary" href="#example-blog-post">
                    <i class="fa fa-fw fa-arrow-down opacity-50 me-1"></i> Lanjutkan Membaca..
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

  <!-- Page Content -->
<div id="example-blog-post" class="content content-full">
    <div class="row justify-content-center">
        <div class="col-sm-8 py-5">
            <!-- Story -->
            <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
            <article class="js-gallery story">
                {!! $information->body !!}
            </article>
        </div>
    </div>
</div>
@endsection
