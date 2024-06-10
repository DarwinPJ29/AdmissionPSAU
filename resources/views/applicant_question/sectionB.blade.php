<label class="text-uppercase mt-4">section b: program choice</label>
<div class="border border-dark p-2 rounded-top-1 main-bg">
    <div class="text-center  text-uppercase">program applied for</div>
</div>
<div class="border border-dark p-2 rounded-bottom-1">
    <div class="row border-bottom border-dark p-1 m-1 h-100">
        <div class="col-md-4 border-end text-end"><label class="">First Choice</label></div>
        <div class="col-md-8">
            <input type="text" class="form-control shadow m-1" disabled>
        </div>
    </div>
    <div class="row border-bottom border-dark p-1 m-1 h-100">
        <div class="col-md-4 border-end text-end"><label class="">Second Choice</label></div>
        <div class="col-md-8">
            <input type="text" class="form-control shadow m-1" disabled>
        </div>
    </div>
    <div class="row p-1 m-1 h-100">
        <div class="col-md-4 border-end text-end d-flex flex-column justify-content-center"><label
                class="">Prefered Date of Enrolment</label></div>
        <div class="col-md-4">
            <label for="">School Year:</label>
            <select name="school_year" id="school_year"
                class="form-select shadow @error('school_year') is-invalid @enderror" value="{{ old('school_year') }}">
                <option value="" selected hidden>Select:</option>
                <option value="2024-2025" @selected(old('school_year') == '2024-2025')>2024-2025</option>
            </select>
            @error('school_year')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label class="">Semester:</label>
            <select name="semester" id="semester" class="form-select shadow @error('semester') is-invalid @enderror"
                value="{{ old('semester') }}">
                <option value="" selected hidden>Select:</option>
                <option value="1st Semester" @selected(old('semester') == '1st Semester')>1st Semester</option>
                <option value="2nd Semester" @selected(old('semester') == '2nd Semester')>2nd Semester</option>
                <option value="3rd Semester" @selected(old('semester') == '3rd Semester')>3rd Semester</option>
                <option value="4th Semester" @selected(old('semester') == '4th Semester')>4th Semester</option>
            </select>
            @error('semester')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>

</div>
<div class="mt-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary"><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning">Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
