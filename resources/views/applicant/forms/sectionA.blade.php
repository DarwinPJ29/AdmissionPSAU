<div class="d-flex justify-content-between">
    <div class="text-uppercase mt-4 d-flex flex-column justify-content-end">section a: general information</div>
    @if (session()->has('failed'))
        <div class="alert alert-warning alert-dismissible fade show mt-4 w-50 " role="alert">
            <div class="text-center">
                {{ session('failed') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
<div class="border border-dark p-2 rounded-1">
    <div class="d-flex my-3 fw-bold">
        <div class="text-uppercase me-3">Your Application ID:</div>
        <div class="text-uppercase border-bottom border-dark">{{ $applicant_no->applicant_no }}</div>
    </div>
    <div class="row mb-2">
        <div class="col-md-1 col-sm-4">
            <label for="prefix">Prefix</label>
            <input type="text" id="prefix" class="form-control text-uppercase shadow" value="{{ $prefix }}"
                disabled>
        </div>
        <div class="col-md-3 col-sm-8">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" class="form-control text-uppercase shadow"
                value="{{ $first_name }}">
        </div>
        <div class="col-md-4 col-sm-12">
            <label for="middle_name">Middle Name</label>
            <input type="text" id="middle_name" class="form-control text-uppercase shadow"
                value="{{ $middle_name }}">
        </div>
        <div class="col-md-3 col-sm-8">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" class="form-control text-uppercase shadow" value="{{ $last_name }}">
        </div>
        <div class="col-md-1 col-sm-4">
            <label for="suffix">Suffix</label>
            <input type="text" id="suffix" class="form-control text-uppercase shadow" value="{{ $suffix }}"
                disabled>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-2 col-sm-6">
            <label for="gender">Sex<span class="text-danger">*</span></label>
            <select name="gender" id="gender" class="form-select text-uppercase shadow" wire:model='gender'
                wire:change='SecASetData' required>
                <option value="" selected hidden>Select</option>
                <option value="Male" @selected($gender == 'Male')>Male</option>
                <option value="Female" @selected($gender == 'Female')>Female</option>
            </select>
        </div>

        <div class="col-md-2 col-sm-6">
            <label for="age">Age <span class="text-danger">*</span></label>
            <input type="number" name="age" id="age" min="0"
                class="form-control text-uppercase shadow" value="{{ $age }}" wire:model='age'
                wire:keyup='SecASetData' required disabled>
        </div>
        <div class="col-md-4 col-sm-12">
            <label for="place_birth">Place of Birth <span class="text-danger">*</span></label>
            <input type="text" name="place_birth" id="place_birth" class="form-control text-uppercase shadow"
                value="{{ $place_birth }}" wire:model='place_birth' wire:keyup='SecASetData'
                placeholder="Place of Birth:" required>

        </div>
        <div class="col-md-4 col-sm-6">
            <label for="birth_date">Date of Birth <span class="text-danger">*</span></label>
            <input type="date" name="birth_date" max="{{ $minDate }}" id="birth_date"
                class="form-control text-uppercase shadow" wire:model='birth_date' wire:change='SecASetData'
                value="{{ $birth_date }}" required onkeydown="return false;" onpaste="return false;">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="citizenship">Citizenship<span class="text-danger">*</span></label>
            <input type="text" name="citizenship" id="citizenship" class="form-control text-uppercase shadow"
                value="{{ $citizenship }}" wire:model='citizenship' wire:keyup='SecASetData'
                placeholder="Citizenship:" required>
        </div>
        <div class="col-md-4">
            <label for="religion">Religion<span class="text-danger">*</span></label>
            <input type="text" name="religion" id="religion" class="form-control text-uppercase shadow"
                value="{{ $religion }}" wire:model='religion' wire:keyup='SecASetData' required>
        </div>

        <div class="col-md-4">
            <label for="civil_status">Civil Status<span class="text-danger">*</span></label>
            <select name="civil_status" id="civil_status" class="form-select text-uppercase shadow"
                wire:model='civil_status' wire:change='SecASetData' required>
                <option value="" selected hidden>Select</option>
                <option value="Single" @selected($civil_status == 'Single')>Single</option>
                <option value="Married" @selected($civil_status == 'Married')>Married</option>
                <option value="Legally Separated" @selected($civil_status == 'Legally Separated')>Legally Separated</option>
                <option value="Widow" @selected($civil_status == 'Widow')>Widow</option>
            </select>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="province">Province<span class="text-danger">*</span></label>
            <select name="province" id="province" class="form-select text-uppercase shadow" wire:model='province'
                wire:change='SecASetData' required>
                <option value="" selected hidden>Select</option>
                @foreach ($provinces as $value)
                    <option value="{{ $value['id'] }}" @selected($province == $value['id'])>{{ $value['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="municipality">Municipality<span class="text-danger">*</span></label>
            <select name="municipality" id="municipality" class="form-select text-uppercase shadow"
                wire:model='municipality' wire:change='SecASetData' required>
                <option value="" selected hidden>Select</option>
                @foreach ($municipalities as $value)
                    <option value="{{ $value['id'] }}" @selected($municipality == $value['id'])>{{ $value['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="barangay">Barangay<span class="text-danger">*</span></label>
            <select name="barangay" id="barangay" class="form-select text-uppercase shadow" wire:model='barangay'
                wire:change='SecASetData' required>
                <option value="" selected hidden>Select</option>
                @foreach ($barangays as $value)
                    <option value="{{ $value['id'] }}" @selected($barangay == $value['id'])>{{ $value['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6 col-sm-7">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control text-lowercase shadow"
                value="{{ $email }}" disabled>
        </div>
        <div class="col-md-6 col-sm-5">
            <label for="number">Contact No.</label>
            <input type="number" name="number" id="number" class="form-control text-uppercase shadow"
                value="{{ $number }}" disabled>
        </div>
    </div>
</div>



<div class="my-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-warning" wire:click="SecANext">Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
