{{-- Modal Tambah --}}
<div class="modal fade" id="addAgenda" tabindex="-1" aria-labelledby="addInformationCategory" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl modal-dialog-fromright modal-md modal-dialog-centered" role="document">
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
                    <form action="{{ route('agenda.store') }}" class="mb-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label class="col-sm-4">Judul</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="title" class="form-control" placeholder="Judul Agenda..">
                        </div>
                        <div class="row mb-2 mt-3">
                            <label class="col-sm-4">Tipe</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="type" id="type" class="form-control">
                                @foreach ($types as $type)
                                <option value="{{ $type }}">{{ strtoupper($type) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mb-2 mt-3">
                            <label class="col-sm-4">Kategori</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="category" id="category" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category }}">{{ strtoupper($category) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mb-2 mt-3">
                            <label class="col-sm-4">Level</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="level" id="level" class="form-control">
                                @foreach ($levels as $level)
                                <option value="{{ $level }}">{{ strtoupper($level) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mb-2 mt-3">
                            <label>Isi</label>
                        </div>
                        <div class="col-sm-12">
                            <textarea id="summernote" name="body" class="form-control"></textarea>
                        </div>
                        <div class="row mb-2 mt-3">
                            <label>Tanggal Pelaksanaan</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" name="do_date">
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


{{-- Modal Edit --}}
@foreach ($agenda as $i)
<div class="modal fade" id="editAgenda{{ $i->id }}" tabindex="-1" aria-labelledby="editAgenda{{ $i->id }}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl modal-dialog-fromright modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-danger">
                    <h3>Edit {{ $page_title }}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="#" class="mb-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <label class="col-sm-4">Judul</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="title" class="form-control" value="{{ $i->title }}">
                        </div>
                        <div class="row mb-2 mt-3">
                            <label class="col-sm-4">Tipe</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="type" id="type" class="form-control">
                                @foreach ($types as $type)
                                <option value="{{ $type }}">{{ strtoupper($type) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mb-2 mt-3">
                            <label class="col-sm-4">Kategori</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="category" id="category" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category }}">{{ strtoupper($category) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mb-2 mt-3">
                            <label class="col-sm-4">Level</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="level" id="level" class="form-control">
                                @foreach ($levels as $level)
                                <option value="{{ $level }}">{{ strtoupper($level) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row mb-2 mt-3">
                            <label>Isi</label>
                        </div>
                        <div class="col-sm-12">
                            <textarea id="note" name="body" class="form-control">
                                {{ $i->body }}
                            </textarea>
                        </div>
                        <div class="row mb-2 mt-3">
                            <label>Tanggal Pelaksanaan</label>
                        </div>
                        <div class="col-sm-12">
                            <input type="date" class="form-control" name="do_date" value="{{ $i->do_date->isoFormat('Y-M-D') }}">
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
@endforeach
