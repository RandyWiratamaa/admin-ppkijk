{{-- Modal Tambah --}}
<div class="modal fade" id="addPartner" tabindex="-1" aria-labelledby="addPartner" aria-hidden="true" style="display: none;">
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
                    <form action="{{ route('partner.store') }}" class="mb-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label class="col-sm-4">Partner</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Partner" aria-describedby="val-username-error" aria-invalid="true">
                        </div>
                        <div class="row mb-2 mt-3">
                            <label class="col-sm-4">Logo</label>
                        </div>
                        <div class="col-sm-12">
                            <div id="previewImage"></div>
                            <input type="file" class="form-control image" id="logo" name="logo" placeholder="Logo">
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="text-end">
                                <button class="btn btn-md btn-alt-danger">
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
