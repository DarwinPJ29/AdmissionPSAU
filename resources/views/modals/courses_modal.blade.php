<div class="modal fade" id="program" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Add Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-7">
                            <label for="course_title">Course Name <span class="text-danger">*</span></label>
                            <input type="text" name="course_title" id="course_title" class="form-control shadow"
                                placeholder="Enter Department Name:" value="{{ old('course_title') }}">
                            @error('course_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-5">
                            <label for="course_acronym">Acronym <span class="text-danger">*</span></label>
                            <input type="text" name="course_acronym" id="course_acronym" class="form-control shadow"
                                placeholder="Enter Code:" value="{{ old('course_acronym') }}">
                            @error('course_acronym')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="course_desc">Description <span class="text-danger">*</span></label>
                        <textarea name="course_desc" id="course_desc" class="form-control shadow" cols="" rows="3"
                        placeholder="Enter description:" value="{{ old('course_desc') }}">
                            @error('course_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </textarea>
                    </div>
                        <div class="mb-2">
                            <label for="course_img">Upload Video <span class="text-danger">*</span></label>
                            <input type="file" name="course_img" id="course_img" accept="video/*" class="form-control shadow">
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
