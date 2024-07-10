{{-- college Area --}}
<div class="modal fade" id="college" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header main-bg">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Add College</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border shadow">
                <form action="{{ route('college') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-12 mb-2">
                            <label for="level">Application type<span class="text-danger">*</span> </label>
                            <select name="level" id="level" class="form-select shadow" required>
                                <option value="" selected hidden>Select Application type:</option>
                                <option value="1" @selected(old('level') == 1)>Under Graduate</option>
                                <option value="2" @selected(old('level') == 2)>Masteral</option>
                                <option value="3" @selected(old('level') == 3)>Doctoral</option>
                                {{-- <option value="4" @selected(old('level') == 4)>Second Courser</option>
                                <option value="5" @selected(old('level') == 5)>Freshmen</option>
                                <option value="6" @selected(old('level') == 6)>Transferee</option> --}}
                            </select>
                        </div>
                        <div class="col-7">
                            <label for="college_title">College Name <span class="text-danger">*</span></label>
                            <input type="text" name="college_title" id="department_college_title"
                                class="form-control shadow" placeholder="Enter College Name:" required>
                        </div>
                        <div class="col-5">
                            <label for="college_acronym">Acronym <span class="text-danger">*</span></label>
                            <input type="text" name="college_acronym" id="college_acronym"
                                class="form-control shadow" placeholder="Enter Acronym:" required>

                        </div>
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


{{-- college edit --}}
@if (@isset($college))
    <div class="modal fade" id="collegeEdit{{ $college->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header main-bg">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">Edit College</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border shadow">
                    <form action="{{ route('college.update', $college->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-12 mb-2">
                                <label for="level">Application type<span class="text-danger">*</span> </label>
                                <select name="level" id="level" class="form-select shadow" required>
                                    <option value="" selected hidden>Select Application type:</option>
                                    <option value="1" @selected(old('level') == 1)>Under Graduate</option>
                                    <option value="2" @selected(old('level') == 2)>Masteral</option>
                                    <option value="3" @selected(old('level') == 3)>Doctoral</option>
                                </select>
                            </div>
                            <div class="col-7">
                                <label for="college_title">College Name <span class="text-danger">*</span></label>
                                <input type="text" name="college_title" id="department_college_title"
                                    class="form-control shadow" placeholder="Enter College Name:" value="{{ $college->title }}" required>
                            </div>
                            <div class="col-5">
                                <label for="college_acronym">Acronym <span class="text-danger">*</span></label>
                                <input type="text" name="college_acronym" id="college_acronym"
                                    class="form-control shadow" placeholder="Enter Acronym:" value="{{ $college->acronym }}" required>

                            </div>
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
@if (isset($college))
    <div class="modal fade" id="collegeDelete{{ $college->id }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header main-bg">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">Delete College</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border shadow">
                    <form action="{{ route('college.delete', $college->id) }}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="mb-2 text-center fs-3">
                            Are you sure you want to Delete this <br>
                            <span class="fw-bold text-uppercase">{{ $college->title }} - ({{ $college->acronym }}) </span> <br> College permanently ?
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
