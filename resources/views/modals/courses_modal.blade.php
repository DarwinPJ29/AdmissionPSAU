{{-- add course --}}
<div class="modal fade" id="program" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Add Course</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('courses') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" row mb-2">
                        <div class="col-md-12">
                            <label for="college_id">College<span class="text-danger">*</span></label>
                            <select name="college_id" id="college_id" class="form-select shadow" required>
                                <option value="" selected>Select College:</option>
                                @foreach ($colleges as $col)
                                    <option value="{{ $col->id }}" @selected($col->level == 'Under Graduate')>
                                        {{ $col->title . ' (' . $col->acronym . ') - ' . $col->level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="img">Upload Image<span class="text-danger">*</span></label>
                        <input type="file" name="file" id="image" class="form-control shadow"
                            accept="image/*">
                    </div>
                    <div class="row mb-2">
                        <div class="col-7">
                            <label for="course_title">Course Name <span class="text-danger">*</span></label>
                            <input type="text" name="course_title" id="course_title" class="form-control shadow"
                                placeholder="Enter Course Name:" required>

                        </div>
                        <div class="col-5">
                            <label for="course_acronym">Acronym <span class="text-danger">*</span></label>
                            <input type="text" name="course_acronym" id="course_acronym" class="form-control shadow"
                                placeholder="Enter Code:" required>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="course_desc">Description <span class="text-danger">*</span></label>

                        <textarea name="course_desc" id="course_desc" cols="" rows="3" class="form-control shadow"
                            value="{{ old('course_desc') }}" required></textarea>

                        @error('course_desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- edit --}}
@if (isset($course))
    <div class="modal fade" id="programEdit{{ $course->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header main-bg">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">Edit Course</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border shadow">
                    <form action="{{ route('courses.update', $course->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="d-flex justify-content-center mb-2">
                            <img src="{{ url('/storage/courses/' . $course->file) }}" alt="" srcset=""
                                class="img-fluid uploaded rounded shadow mb-2">
                        </div>
                        <div class="col-md-12">
                            <label for="college_id">College<span class="text-danger">*</span></label>
                            <select name="college_id" id="college_id" class="form-select shadow" required>
                                <option value="" selected>Select College:</option>
                                @foreach ($colleges as $col)
                                    <option value="{{ $col->id }}" @selected($course->college_id == $col->id)>
                                        {{ $col->title . ' (' . $col->acronym . ') - ' . $col->level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="img">Upload Image <span class="text-danger">*</span></label>
                            <input type="file" name="file" id="image" class="form-control shadow"
                                accept="image/*">
                        </div>
                        <div class="row mb-2">
                            <div class="col-7">
                                <label for="course_title">Course Name <span class="text-danger">*</span></label>
                                <input type="text" name="course_title" id="course_title"
                                    class="form-control shadow" placeholder="Enter Course Name:"
                                    value="{{ $course->title }}" required>
                                @error('course_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-5">
                                <label for="course_acronym">Acronym <span class="text-danger">*</span></label>
                                <input type="text" name="course_acronym" id="course_acronym"
                                    class="form-control shadow" placeholder="Enter Code:"
                                    value="{{ $course->acronym }}" required>
                                @error('course_acronym')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="course_desc">Description <span class="text-danger">*</span></label>
                            <textarea name="course_desc" id="course_desc" class="form-control shadow" rows=""
                                placeholder="Enter description:" value="{{ $course->description }}" required>{{ $course->description }}</textarea>
                            @error('course_desc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

{{-- delete --}}
@if (isset($course))
    <div class="modal fade" id="programDelete{{ $course->id }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header main-bg">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">Delete Course</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border shadow">
                    <form action="{{ route('courses.delete', $course->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="mb-2 text-center fs-3">
                            Are you sure you want to Delete this <br>
                            <span class="fw-bold text-uppercase">{{ $course->title }} -
                                ({{ $course->acronym }})</span> <br> Course permanently ?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
