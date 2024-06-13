<label class="text-uppercase mt-4">section c: educational history</label>
<div class="border border-dark p-2 rounded-top-1">
    <div class="">Accademic Background: List of schools attended. For transferees, list the last school attended.
    </div>
</div>
<div class="container m-0 p-0 overflow-x-scroll  rounded-bottom-1">
    <table class="table table-bordered text-center border-dark rounded-bottom-1">
        <thead class="main-bg border border-dark">
            <tr>
                <th class="col-2 text-uppercase">School Attended</th>
                <th class="col-4 text-uppercase">name</th>
                <th class="col-4 text-uppercase">address</th>
                <th class="col-2 text-uppercase">inclusive date</th>
            </tr>
        </thead>
        <tbody>
            {{-- elementary --}}
            <tr>
                <td class="">Elementary <span class="text-danger">*</span></td>
                <td>
                    <div class=" p-1 ">
                        <input type="text" name="elementry_name" id="elementry_name" class="form-control shadow "
                            placeholder="Enter School Name:" value="{{ old('elementry_name') }}" wire:model='' wire:keyup='' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="elementary_address" id="elementary_address" class="form-control shadow "
                            placeholder="Enter School Address:" value="{{ old('elementary_address') }}" wire:model='' wire:keyup='' required>
                    </div>
                </td>
                <td>
                    <div class="p-1 ">
                        <input type="text" name="elementary_date" id="elementary_date" class="form-control shadow "
                            placeholder="Enter Date:" value="{{ old('elementary_date') }}" wire:model='' wire:keyup='' required>
                    </div>
                </td>

            </tr>
            {{-- high school --}}
            <tr>
                <td>Senior High<span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="sr_high_name" id="sr_high_name" class="form-control shadow "
                            placeholder="Enter School Name:" value="{{ old('sr_high_name') }}" wire:model='' wire:keyup='' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="sr_high_address" id="sr_high_address" class="form-control shadow "
                            placeholder="Enter School Address:" value="{{ old('sr_high_address') }}" wire:model='' wire:keyup='' required>
                    </div>

                </td>
                <td>
                    <div class="p-1 ">
                        <input type="text" name="sr_high_date" id="sr_high_date" class="form-control shadow "
                            placeholder="Enter Date:" value="{{ old('sr_high_date') }}" wire:model='' wire:keyup='' required>
                    </div>
                </td>
            </tr>
            {{-- last School --}}
            <tr>
                <td>Last School Attended <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="last_school_name" id="last_school_name" class="form-control shadow "
                            placeholder="Enter School Name:" value="{{ old('last_school_name') }}" wire:model='' wire:keyup='' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="last_school_address" id="last_school_address" class="form-control shadow "
                            placeholder="Enter School Address:" value="{{ old('last_school_address') }}" wire:model='' wire:keyup='' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="last_school_date" id="last_school_date" class="form-control shadow "
                            placeholder="Enter Date:" value="{{ old('last_school_date') }}" wire:model='' wire:keyup='' required>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="border border-dark mt-4 rounded-top-1">
    <div class="row p-1">
        <div class="col-md-8 p-3 border-end border-dark">
            <label for="type_graduated">Type of SHS Graduated from:</label>
            <input type="text" name="type_graduated" id="type_graduated" class="form-control shadow"
                placeholder="Enter Type of SHS Graduated from:" value="{{ old('type_graduated') }}" wire:model='' wire:keyup='' required>
        </div>
        <div class="col-md-4 p-3">
            <label for="date_graduation">Date of Graduation</label>
            <input type="text" name="date_graduation" id="date_graduation" class="form-control shadow"
                placeholder="Enter Date of Graduation:" value="{{ old('date_graduation') }}" wire:model='' wire:keyup='' required>
        </div>
    </div>
</div>
<div class="border border-dark rounded-bottom-1">
    <div class="row p-1">
        <div class="col-md-4 p-3 border-end border-dark">
            <label for="shs_average">SHS Average Grade:</label>
            <input type="text" name="shs_average" id="shs_average" class="form-control shadow"
                placeholder="Enter SHS Average Grade:" value="{{ old('shs_average') }}" wire:model='' wire:keyup='' required>
        </div>
        <div class="col-md-4 p-3 border-end border-dark">
            <label for="lrn">LRN</label>
            <input type="number" name="lrn" id="lrn" min="0" class="form-control shadow"
                placeholder="Enter LRN:" value="{{ old('lrn') }}" wire:model='' wire:keyup='' required>
        </div>
        <div class="col-md-4 p-3">
            <label for="first_time_college">First Time to Enter College:</label>
            <input type="text" name="first_time_college" id="first_time_college" class="form-control shadow"
                placeholder="Enter:" value="{{ old('first_time_college') }}" wire:model='' wire:keyup='' required>
        </div>
    </div>
</div>

<div class="mt-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary"><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning">Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
