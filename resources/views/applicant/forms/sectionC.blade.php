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
                        <input type="text" name="elementary_name" id="elementary_name"
                            class="form-control shadow text-uppercase" placeholder="Enter School Name:" type="text"
                            name="elementary_name" id="elementary_name" class="form-control shadow text-uppercase"
                            placeholder="Enter School Name:" wire:model='elementary_name' wire:keyup='SecCSetData'
                            required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="elementary_address" id="elementary_address"
                            class="form-control shadow text-uppercase" placeholder="Enter School Address:"
                            wire:model='elementary_address' wire:keyup='SecCSetData'
                            class="form-control shadow text-uppercase" placeholder="Enter School Address:"
                            wire:model='elementary_address' wire:keyup='SecCSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1 ">
                        <input type="text" name="elementary_date" id="elementary_date" class="form-control shadow"
                            placeholder="Ex: 2000-2006" wire:model='elementary_date' wire:keyup='SecCSetData' required>
                    </div>
                </td>

            </tr>
            {{-- high school --}}
            <tr>
                <td>Senior High<span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="sr_high_name" id="sr_high_name"
                            class="form-control shadow text-uppercase" placeholder="Enter School Name:"
                            wire:model='sr_high_name' wire:keyup='SecCSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="sr_high_address" id="sr_high_address"
                            class="form-control shadow text-uppercase" placeholder="Enter School Address:"
                            wire:model='sr_high_address' wire:keyup='SecCSetData' required>
                    </div>

                </td>
                <td>
                    <div class="p-1 ">
                        <input type="text" name="sr_high_date" id="sr_high_date" class="form-control shadow"
                            placeholder="Ex: 2000-2006" wire:model='sr_high_date' wire:keyup='SecCSetData' required>
                    </div>
                </td>
            </tr>
            {{-- last School --}}
            <tr>
                <td>Last School <br> Attended <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="last_school_name" id="last_school_name"
                            class="form-control shadow text-uppercase" placeholder="Enter School Name:"
                            wire:model='last_school_name' wire:keyup='SecCSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="last_school_address" id="last_school_address"
                            class="form-control shadow text-uppercase" placeholder="Enter School Address:"
                            wire:model='last_school_address' wire:keyup='SecCSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="last_school_date" id="last_school_date" class="form-control shadow"
                            placeholder="Ex: 2000-2006" wire:model='last_school_date' wire:keyup='SecCSetData' required>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@if ($applicant_level != 1 || $applicant_level != 2)
    <div class="border border-dark mt-4 rounded-top-1">
        <div class="row p-1">
            <div class="col-md-8 p-3 border-end border-dark">
                <label for="type_graduated">Type of SHS Graduated from:</label>
                <select name="graduated_from" id="graduated_from"
                    class="form-select form-control shadow text-uppercase" wire:model='graduated_from'
                    wire:change='SecBSetData'>
                    <option value="" selected hidden>Select:</option>
                    <option value="1" @selected($graduated_from == 1)>Private</option>
                    <option value="2" @selected($graduated_from == 2)>Public</option>
                </select>
            </div>

            <div class="col-md-4 p-3">
                <label for="date_graduation">Date of Graduation</label>
                <input type="date" name="date_graduation" id="date_graduation" class="form-control shadow"
                    placeholder="" wire:model='date_graduation' wire:keyup='SecCSetData'>
            </div>
        </div>
    </div>
    <div class="border border-dark rounded-bottom-1">
        <div class="row p-1">
            <div class="col-md-4 p-3 border-end border-dark">
                <label for="shs_average">SHS Average Grade:</label>
                <input type="text" name="shs_average" wire:model='shs_average'id="shs_average"
                    class="form-control shadow" placeholder="Enter SHS Average Grade:" wire:keyup='SecCSetData'
                    required>
            </div>
            <div class="col-md-4 p-3 border-end border-dark">
                <label for="lrn">Learner Reference Number (LRN)</label>
                <input type="number" name="lrn" id="lrn" min="0" class="form-control shadow"
                    placeholder="Enter LRN:" wire:model='lrn' wire:keyup='SecCSetData'>
            </div>
            <div class="col-md-4 p-3">
                <label for="first_time_college">First Time to Enter College:</label>
                <div class="d-flex justify-content-evenly mt-2">
                    <div>
                        <input type="radio" id="yes" name="first_time_college" value="yes"
                            wire:model="first_time_college" wire:click='SecCSetData' />
                        <label for="yes">Yes</label>
                    </div>
                    <div>
                        <input type="radio" id="no" name="first_time_college" value="no"
                            wire:model="first_time_college" wire:click='SecCSetData' />
                        <label for="no">No</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="my-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary" wire:click='SecCPrev'><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning"wire:click='SecCNext'>Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
