{{-- Modal Tambah --}}
<div class="modal fade" id="addGallery" tabindex="-1" aria-labelledby="addGallery" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-fromright modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3>Add {{ $page_title }}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{ route('gallery.store') }}" class="mb-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label class="col-sm-4">Title</label>
                        </div>
                        <div class="col-sm-12 mb-4">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Insert  Title" >
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-4">Image</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" id="image" name="image" placeholder="Choose Image">
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="text-end">
                                <button class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-sm btn-alt-primary">
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

{{-- Modal Hapus Photo --}}
@foreach ($data as $i)
<div class="modal fade" id="hapus{{ $i->id }}" tabindex="-1" aria-labelledby="hapus{{ $i->id }}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-fromright modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3>Hapus {{ $i->title }}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="{{ url('admin/gallery', $i->id) }}" class="mb-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <div class="row mb-2">
                            <div class="col-12">
                                Yakin untuk menghapus data ??
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="text-end">
                                <button class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-sm btn-alt-primary">
                                    Yes, Delete
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
