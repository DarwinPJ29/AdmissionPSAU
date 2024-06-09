<div class="modal fade" id="program" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Add Program</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-7">
                            <label for="program_title">Program Name <span class="text-danger">*</span></label>
                            <input type="text" name="program_title" id="program_title" class="form-control shadow"
                                placeholder="Enter Department Name:" value="{{ old('program_title') }}">
                            @error('program_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-5">
                            <label for="program_code">Program Code/Abbreviation <span class="text-danger">*</span></label>
                            <input type="text" name="program_code" id="program_code" class="form-control shadow"
                                placeholder="Enter Code:" value="{{ old('program_code') }}">
                            @error('program_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="program_desc">Description <span class="text-danger">*</span></label>
                        <textarea name="program_desc" id="program_desc" class="form-control shadow" cols="" rows="3"
                        placeholder="Enter description:" value="{{ old('program_desc') }}">
                            @error('program_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </textarea>
                    </div>
                        <div class="mb-2">
                            <label for="program_img">Upload Image</label>
                            <input type="file" name="program_img" id="program_img" class="form-control shadow">
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
