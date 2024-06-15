<label class="text-uppercase mt-4">section d: parents'/guardian's background information</label>
<div class="container m-0 p-0 overflow-x-scroll">
    <table class="table table-bordered border-dark text-center">
        <thead class="main-bg border border-dark">
            <tr>
                <th class="col-3 text-uppercase"></th>
                <th class="col-3 text-uppercase">father</th>
                <th class="col-3 text-uppercase">mother</th>
                <th class="col-3 text-uppercase">guardian</th>
            </tr>
        </thead>
        <tbody>
            {{-- fullname --}}
            <tr>
                <td>Full Name <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_fullname" id="father_fullname" class="form-control shadow"
                            placeholder="Enter Father's Name" value="{{ old('father_fullname') }}"
                            wire:model='father_fullname' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_fullname" id="mother_fullname" class="form-control shadow"
                            placeholder="Enter Mother's Name" value="{{ old('mother_fullname') }}"
                            wire:model='mother_fullname' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_fullname" id="guardian_fullname"
                            class="form-control shadow" placeholder="Enter Guardian's Name"
                            value="{{ old('guardian_fullname') }}" wire:model='guardian_fullname'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- date of birth --}}
            <tr>
                <td>Date of Birth <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="date" name="father_date_birth" id="father_date_birth"
                            class="form-control shadow" placeholder="Enter Date of Birth"
                            value="{{ old('father_date_birth') }}" wire:model='father_date_birth'
                            wire:change='SecDSetData' required>

                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="date" name="mother_date_birth" id="mother_date_birth"
                            class="form-control shadow" placeholder="Enter Date of Birth"
                            value="{{ old('mother_date_birth') }}" wire:model='mother_date_birth'
                            wire:change='SecDSetData' required>

                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="date" name="guardian_date_birth" id="guardian_date_birth"
                            class="form-control shadow" placeholder="Enter Date of Birth"
                            value="{{ old('guardian_date_birth') }}" wire:model='guardian_date_birth'
                            wire:change='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Educational Attainment --}}
            <tr>
                <td>Highest Educational Attainment <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_education" id="father_education" class="form-control shadow"
                            placeholder="Educational Attainment" value="{{ old('father_education') }}"
                            wire:model='father_education' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_education" id="mother_education" class="form-control shadow"
                            placeholder="Educational Attainment" value="{{ old('mother_education') }}"
                            wire:model='mother_education' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_education" id="guardian_education"
                            class="form-control shadow" placeholder="Educational Attainment"
                            value="{{ old('guardian_education') }}" wire:model='guardian_education'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Occupation --}}
            <tr>
                <td>Occupation / Employment <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_occupation" id="father_occupation"
                            class="form-control shadow" placeholder="Enter Father's Occupation/Employment"
                            value="{{ old('father_occupation') }}" wire:model='father_occupation'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_occupation" id="mother_occupation"
                            class="form-control shadow" placeholder="Enter Mother's Occupation/Employment"
                            value="{{ old('mother_occupation') }}" wire:model='mother_occupation'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1 ">
                        <input type="text" name="gua p-2rdian_occupation" id="guardian_occupation"
                            class="form-control shadow" placeholder="Enter Guardian's Occupation/Employment"
                            value="{{ old('guardian_occupation') }}" wire:model='guardian_occupation'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Company --}}
            <tr>
                <td>Company Name / Address <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_company" id="father_company" class="form-control shadow"
                            placeholder="Enter Father's Company Name/Address" value="{{ old('father_company') }}"
                            wire:model='father_company' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_company" id="mother_company" class="form-control shadow"
                            placeholder="Enter Mother's Company Name/Address" value="{{ old('mother_company') }}"
                            wire:model='mother_company' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_company" id="guardian_company"
                            class="form-control shadow" placeholder="Enter Guardian's Company Name/Address"
                            value="{{ old('guardian_company') }}" wire:model='guardian_company'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Income --}}
            <tr>
                <td>Monthly Income</td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_income" id="father_income" class="form-control shadow"
                            placeholder="Enter Father's Income" value="{{ old('father_income') }}"
                            wire:model='father_income' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_income" id="mother_income" class="form-control shadow"
                            placeholder="Enter Mother's Income" value="{{ old('mother_income') }}"
                            wire:model='mother_income' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_income" id="guardian_income"
                            class="form-control shadow" placeholder="Enter Guardian's Income"
                            value="{{ old('guardian_income') }}" wire:model='guardian_income'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Contact --}}
            <tr>
                <td>Contact No. <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_contact" id="father_contact" class="form-control shadow"
                            placeholder="Enter Father's Contact No." value="{{ old('father_contact') }}"
                            wire:model='father_contact' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_contact" id="mother_contact" class="form-control shadow"
                            placeholder="Enter Mother's Contact No." value="{{ old('mother_contact') }}"
                            wire:model='mother_contact' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_contact" id="guardian_contact"
                            class="form-control shadow" placeholder="Enter Guardian's Contact No."
                            value="{{ old('guardian_contact') }}" wire:model='guardian_contact'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
</div>

<div class="mt-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary" wire:click='SecDPrev'><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning" wire:click='SecDNext'>Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
