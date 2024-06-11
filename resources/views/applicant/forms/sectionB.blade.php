<label class="text-uppercase mt-4">section b: program choice</label>
<div class="border border-dark p-2 rounded-top-1 main-bg">
    <div class="text-center  text-uppercase">program applied for</div>
</div>
<div class="border border-dark p-2 rounded-bottom-1">
    <div class="row border-bottom border-dark m-0">
        <div class="col-4 border-end text-end"><label class="">First Choice</label></div>
        <div class="col-8 p-2">
            <select name="first_choice" id="first_choice"
                class="form-select shadow  @error('first_choice') is-invalid @enderror"
                value="{{ old('first_choice') }}">
                <option value="" selected hidden>Select Choice 1:</option>
                <option value="2024-2025" @selected(old('first_choice') == '2024-2025')>2024-2025</option>
            </select>
            @error('first_choice')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div class="row border-bottom border-dark m-0">
        <div class="col-4 border-end text-end"><label class="">Second Choice</label></div>
        <div class="col-8 p-2">
            <select name="second_choice" id="second_choice"
                class="form-select shadow @error('second_choice') is-invalid @enderror"
                value="{{ old('second_choice') }}">
                <option value="" selected hidden>Select Choice 2:</option>
                <option value="2024-2025" @selected(old('second_choice') == '2024-2025')>2024-2025</option>
            </select>
            @error('second_choice')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div class="row m-0">
        <div class="col-4 border-end text-end d-flex flex-column justify-content-center"><label
                class="">Prefered Date of Enrolment</label>
        </div>
        <div class="col-8">
            <div class="row m-0 p-0">
                <div class="col-md-6 p-2">
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
                <div class="col-md-6 p-2">
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

    </div>

</div>
<div class="mt-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary"><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning">Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
