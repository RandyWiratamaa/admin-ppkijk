{{-- Modal Edit --}}
@foreach ($information as $i)
<div class="modal fade" id="edit{{ $i->slug }}" tabindex="-1" aria-labelledby="edit{{ $i->slug }}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl modal-dialog-fromright modal-md modal-dialog-centered" role="document">
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
                    <form action="{{ url('admin/information/'.$i->slug) }}" class="mb-5" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row justify-content-center push">
                            <div class="col-md-10">
                                <div class="row mb-4">
                                    <div class="col-xl-8">
                                        <label>Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $i->title }}">
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
                                            @foreach ($category as $j)
                                            <option value="{{ $j->id }}" @if($j->id == $i->category_id) selected @endif>{{ $j->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label>Body</label>
                                    <textarea id="note" name="body" class="form-control">
                                        {{ $i->body }}
                                    </textarea>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-xl-4">
                                        <label>Do Date</label>
                                        <input type="date" class="form-control" name="do_date">
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <div class="text-end">
                                        <button class="btn btn-md btn-alt-danger">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
