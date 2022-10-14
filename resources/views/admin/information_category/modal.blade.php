{{-- Modal Tambah --}}
<div class="modal fade" id="addInformationCategory" tabindex="-1" aria-labelledby="addInformationCategory" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-fromright modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h3>Add {{ $page_title }}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{ route('information-category.store') }}" class="mb-5" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-sm-4">Category</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Information Category" aria-describedby="val-username-error" aria-invalid="true">
                            @if ($errors->any())
                                <div id="val-username-error" class="invalid-feedback animated fadeIn">Please enter Information Category</div>
                            @endif
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="text-end">
                                <button class="btn btn-sm btn-alt-danger">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Edit --}}
@foreach ($data as $i)
<div class="modal fade" id="edit{{ $i->slug }}" tabindex="-1" aria-labelledby="edit{{ $i->slug }}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-fromright modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h4>Update {{ $page_title }}</h4>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{ url('admin/information-category', $i->id) }}" class="mb-5" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row mb-4">
                            <label class="col-sm-4">Category</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Information Category" aria-describedby="val-username-error" aria-invalid="true" value="{{ $i->name }}">
                            @if ($errors->any())
                            <div id="val-username-error" class="invalid-feedback animated fadeIn">Please enter Information Category</div>
                            @endif
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="text-end">
                                <button class="btn btn-sm btn-alt-danger">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- Modal Hapus --}}
@foreach ($data as $i)
<div class="modal fade" id="delete{{ $i->slug }}" tabindex="-1" aria-labelledby="delete{{ $i->slug }}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-fromright modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h4>Delete {{ $page_title }}</h4>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{ url('admin/information-category', $i->id) }}" class="mb-5" method="POST">
                        @csrf
                        @method('delete')
                        <div class="col-sm-12">
                            {{ $delete_msg }}
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="text-end">
                                <button class="btn btn-sm btn-alt-danger">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
