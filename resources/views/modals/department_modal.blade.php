<div class="modal fade" id="department" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Add Department</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-7">
                            <label for="dep_title">Department Name <span class="text-danger">*</span></label>
                            <input type="text" name="dep_title" id="dep_title" class="form-control shadow"
                                placeholder="Enter Department Name:" value="{{ old('dep_title') }}">
                            @error('dep_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-5">
                            <label for="dep_code">Department Code/Abbreviation <span class="text-danger">*</span></label>
                            <input type="text" name="dep_code" id="dep_code" class="form-control shadow"
                                placeholder="Enter Code:" value="{{ old('dep_code') }}">
                            @error('dep_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="dep_desc">Description <span class="text-danger">*</span></label>
                        <textarea name="dep_desc" id="dep_desc" class="form-control shadow" cols="" rows="3"
                        placeholder="Enter description:" value="{{ old('dep_desc') }}">
                            @error('dep_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </textarea>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="img">Upload Image</label>
                            <input type="file" name="img" id="img" class="form-control shadow">
                        </div>
                        <div class="col-md-6">
                            <label for="video">Upload Short Video</label>
                            <input type="file" name="video" id="video" accept="video/*" class="form-control shadow">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
