<label class="text-uppercase mt-4">section b: program choice</label>
<div class="border border-dark p-2 rounded-top-1 main-bg">
    <div class="text-center  text-uppercase">program applied for</div>
</div>
<div class="border border-dark p-2 rounded-bottom-1">
    <h5 class="text-center"><b>A.Y {{ $school_year . ' (' . $semester . ')' }}</b></h5>
    <div class="row border-bottom border-dark m-0">
        <div class="col-4 border-end text-end d-flex flex-column justify-content-center"><label
                class="application_level">Application Level</label></div>
        <div class="col-8 p-2">
            <select name="application_level" id="applicant_type" class="form-select shadow text-uppercase"
                wire:model='applicant_level' wire:change='SecBSetData' required>
                <option value="" selected hidden>Select level:</option>
                <option value="1" @selected($application_level = 1)>Under Graduate</option>
                <option value="2" @selected($application_level = 2)>Graduate Level</option>
            </select>
        </div>
    </div>
    <div class="row border-bottom border-dark m-0">
        <div class="col-4 border-end text-end d-flex flex-column justify-content-center"><label
                class="application_type">Application type</label></div>
        <div class="col-8 p-2">
            <select name="application_type" id="applicant_type" class="form-select shadow text-uppercase"
                wire:model='applicant_type' wire:change='SecBSetData' required>
                <option value="" selected hidden>Select type</option>
                @if ($applicant_level == 2)
                    <option value="1" @selected($application_type = 1)>Doctoral</option>
                    <option value="2" @selected($application_type = 2)>Masteral</option>
                @endif
                <option value="3" @selected($application_type = 3)>Second Courser</option>
                <option value="4" @selected($application_type = 4)>Transferee</option>
                <option value="5" @selected($application_type = 5)>Freshmen</option>
            </select>
        </div>
    </div>
    <div class="row border-bottom border-dark m-0">
        <div class="col-4 border-end text-end d-flex flex-column justify-content-center"><label class="">First
                Choice</label></div>
        <div class="col-8 p-2">
            <select name="first_choice" id="first_choice" class="form-select shadow text-uppercase"
                wire:model='first_choice' wire:change='SecBSetData' required>
                <option value="" selected hidden>Select Choice 1:</option>
                @foreach ($courses_choice1 as $course)
                    <option value="{{ $course->id }}" @selected($first_choice == $course->id)>{{ $course->title }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="row border-bottom border-dark m-0">
        <div class="col-4 border-end text-end d-flex flex-column justify-content-center"><label class="">Second
                Choice</label></div>
        <div class="col-8 p-2">
            <select name="second_choice" id="second_choice" class="form-select shadow text-uppercase"
                wire:model='second_choice' wire:change='SecBSetData' required>
                <option value="" selected hidden>Select Choice 2:</option>
                @foreach ($courses_choice2 as $course)
                    <option value="{{ $course->id }}" @selected($second_choice == $course->id)>{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="my-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary" wire:click='SecBPrev'><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning" wire:click='SecBNext'>Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
