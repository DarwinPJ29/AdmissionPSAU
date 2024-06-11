<label class="text-uppercase mt-4">section b: program choice</label>
<div class="border border-dark p-2 rounded-top-1 main-bg">
    <div class="text-center  text-uppercase">program applied for</div>
</div>
<div class="border border-dark p-2 rounded-bottom-1">
    <div class="row border-bottom border-dark m-0">
        <div class="col-4 border-end text-end"><label class="">First Choice</label></div>
        <div class="col-8 p-2">
            <select name="first_choice" id="first_choice"
                class="form-select shadow  @error('first_choice') is-invalid @enderror" wire:model='first_choice'
                wire:change='SecBSetData'>
                <option value="" selected hidden>Select Choice 1:</option>
                @foreach ($courses_choice1 as $course)
                    <option value="{{ $course->id }}" @selected($first_choice == $course->id)>{{ $course->title }}</option>
                @endforeach
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
                class="form-select shadow @error('second_choice') is-invalid @enderror" wire:model='second_choice'
                wire:change='SecBSetData'>
                <option value="" selected hidden>Select Choice 2:</option>
                @foreach ($courses_choice2 as $course)
                    <option value="{{ $course->id }}" @selected($second_choice == $course->id)>{{ $course->title }}</option>
                @endforeach
            </select>
            @error('second_choice')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div class="row m-0">
        <div class="col-4 border-end text-end d-flex flex-column justify-content-center"><label class="">Prefered
                Date of Enrolment</label>
        </div>
        <div class="col-8">
            <div class="row m-0 p-0">
                <div class="col-md-6 p-2">
                    <label for="">School Year:</label>
                    <input type="text" id="middle_name" class="form-control shadow" wire:model='school_year'
                        disabled>
                    @error('school_year')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 p-2">
                    <label class="">Semester:</label>
                    <select name="semester" id="semester"
                        class="form-select shadow @error('semester') is-invalid @enderror" wire:model='semester'
                        wire:change='SecBSetData'>
                        <option value="" selected hidden>Select:</option>
                        <option value="1" @selected($semester == 1)>1st Semester</option>
                        <option value="2" @selected($semester == 2)>2nd Semester</option>
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
    <div class="btn btn-secondary" wire:click='SecBPrev'><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning" wire:click='SecBNext'>Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
