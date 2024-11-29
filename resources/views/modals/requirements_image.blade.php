{{-- add --}}
<div class="modal fade" id="upload{{ $req->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">{{ $req->title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('applicant.requirement') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="image">Upload File</label>
                    <input type="file" name="file" id="image" class="form-control shadow"
                        accept="image/*,.pdf" required>
                    <input type="text" name="id" value="{{ $req->id }}" hidden>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- edit --}}
<div class="modal fade" id="edit{{ $req->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Edit {{ $req->title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('applicant.edit') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-center mb-2">
                        @if (str_contains($req->file_name, '.pdf'))
                            <h5><span class="text-muted">File Upload: </span> <br>{{ $req->file_name }}</h5>
                        @else
                            <img src="{{ url('/storage/applicant_requirements/' . $req->file) }}" alt=""
                                srcset="" class="img-fluid uploaded rounded shadow mb-2">
                        @endif
                    </div>
                    <label for="new_img">Upload new file:</label>
                    <input type="file" name="file" id="image" class="form-control shadow"
                        accept="image/*,.pdf" required>
                    <input type="text" name="id" value="{{ $req->id }}" hidden>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
