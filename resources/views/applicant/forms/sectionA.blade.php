@if (session()->has('failed'))
    <span class="text-danger">{{ session('failed') }}"</span><br>
@endif
<label class="text-uppercase mt-4">section a: general information</label>
<div class="border border-dark p-2 rounded-1">
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" class="form-control shadow" value="{{ $first_name }}" disabled>
        </div>
        <div class="col-md-4">
            <label for="middle_name">Middle Name</label>
            <input type="text" id="middle_name" class="form-control shadow" value="{{ $middle_name }}" disabled>
        </div>
        <div class="col-md-4">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" class="form-control shadow" value="{{ $last_name }}" disabled>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-1">
            <label for="gender">Sex</label>
            <select name="gender" id="gender" class="form-select shadow @error('gender') is-invalid @enderror"
                wire:model='gender' wire:change='SecASetData'>
                <option value="" selected hidden>Select</option>
                <option value="Male" @selected($gender == 'Male')>Male</option>
                <option value="Female" @selected($gender == 'Female')>Female</option>
            </select>
            @error('gender')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="birth_date">Date of Birth <span class="text-danger">*</span></label>
            <input type="date" name="birth_date" id="birth_date" class="form-control shadow" wire:model='birth_date'
                wire:change='SecASetData' value="{{ $birth_date }}">
            @error('birth_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-1">
            <label for="age">Age <span class="text-danger">*</span></label>
            <input type="number" name="age" id="age" min="0" class="form-control shadow"
                value="{{ $age }}">
            @error('age')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="place_birth">Place of Birth <span class="text-danger">*</span></label>
            <input type="text" name="place_birth" id="place_birth" class="form-control shadow"
                value="{{ $place_birth }}">
            @error('place_birth')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="citizenship">Citizenship<span class="text-danger">*</span></label>
            <input type="text" name="citizenship" id="citizenship" class="form-control shadow"
                value="{{ $citizenship }}">
            @error('citizenship')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="religion">Religion<span class="text-danger">*</span></label>
            <input type="text" name="religion" id="religion" class="form-control shadow"
                value="{{ $religion }}">
            @error('religion')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-4">
            <label for="address">Home Address</label>
            <input type="text" name="address" id="address" class="form-control shadow"
                value="{{ $address }}">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="civil_status">Civil Status</label>
            <select name="civil_status" id="civil_status"
                class="form-select shadow @error('civil_status') is-invalid @enderror">
                <option value="" selected hidden>Select</option>
                <option value="Single" @selected($civil_status == 'Single')>Single</option>
                <option value="Married" @selected($civil_status == 'Married')>Married</option>
                <option value="Legally Separated" @selected($civil_status == 'Legally Separated')>Legally Separated</option>
                <option value="Widow" @selected($civil_status == 'Widow')>Widow</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control shadow"
                value="{{ $email }}" disabled>
        </div>
    </div>
</div>
<div class="mt-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-warning" wire:click="SecANext">Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
