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
                        <input type="text" name="father_fullname" id="father_fullname"
                            class="form-control shadow text-uppercase " placeholder="FN, MI, LN"
                            wire:model='father_fullname' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_fullname" id="mother_fullname"
                            class="form-control shadow text-uppercase" placeholder="FN, MI, LN"
                            wire:model='mother_fullname' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_fullname" id="guardian_fullname"
                            class="form-control shadow text-uppercase" placeholder="FN, MI, LN"
                            wire:model='guardian_fullname' wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- date of birth --}}
            <tr>
                <td>Date of Birth <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="date" name="father_date_birth" id="father_date_birth"
                            class="form-control shadow text-uppercase" placeholder="Enter Date of Birth"
                            wire:model='father_date_birth' wire:change='SecDSetData' required>

                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="date" name="mother_date_birth" id="mother_date_birth"
                            class="form-control shadow text-uppercase" placeholder="Enter Date of Birth"
                            wire:model='mother_date_birth' wire:change='SecDSetData' required>

                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="date" name="guardian_date_birth" id="guardian_date_birth"
                            class="form-control shadow text-uppercase" placeholder="Enter Date of Birth"
                            wire:model='guardian_date_birth' wire:change='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Educational Attainment --}}
            <tr>
                <td>Highest Educational Attainment <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_education" id="father_education"
                            class="form-control shadow text-uppercase" placeholder="Educational Attainment"
                            wire:model='father_education' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_education" id="mother_education"
                            class="form-control shadow text-uppercase" placeholder="Educational Attainment"
                            wire:model='mother_education' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_education" id="guardian_education"
                            class="form-control shadow text-uppercase" placeholder="Educational Attainment"
                            wire:model='guardian_education' wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Occupation --}}
            <tr>
                <td>Occupation / Employment <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_occupation" id="father_occupation"
                            class="form-control shadow text-uppercase"
                            placeholder="Enter Father's Occupation/Employment" wire:model='father_occupation'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_occupation" id="mother_occupation"
                            class="form-control shadow text-uppercase"
                            placeholder="Enter Mother's Occupation/Employment" wire:model='mother_occupation'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1 ">
                        <input type="text" name="gua p-2rdian_occupation" id="guardian_occupation"
                            class="form-control shadow text-uppercase"
                            placeholder="Enter Guardian's Occupation/Employment" wire:model='guardian_occupation'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Company --}}
            <tr>
                <td>Company Name / Address <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_company" id="father_company"
                            class="form-control shadow text-uppercase"
                            placeholder="Enter Father's Company Name/Address" wire:model='father_company'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_company" id="mother_company"
                            class="form-control shadow text-uppercase"
                            placeholder="Enter Mother's Company Name/Address" wire:model='mother_company'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_company" id="guardian_company"
                            class="form-control shadow text-uppercase"
                            placeholder="Enter Guardian's Company Name/Address" wire:model='guardian_company'
                            wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Income --}}
            <tr>
                <td>Monthly Income</td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_income" id="father_income"
                            class="form-control shadow text-uppercase" placeholder="Enter Father's Income"
                            wire:model='father_income' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_income" id="mother_income"
                            class="form-control shadow text-uppercase" placeholder="Enter Mother's Income"
                            wire:model='mother_income' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_income" id="guardian_income"
                            class="form-control shadow text-uppercase" placeholder="Enter Guardian's Income"
                            wire:model='guardian_income' wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
            {{-- Contact --}}
            <tr>
                <td>Contact No. <span class="text-danger">*</span></td>
                <td>
                    <div class="p-1">
                        <input type="text" name="father_contact" id="father_contact"
                            class="form-control shadow text-uppercase" placeholder="Enter Father's Contact No."
                            wire:model='father_contact' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="mother_contact" id="mother_contact"
                            class="form-control shadow text-uppercase" placeholder="Enter Mother's Contact No."
                            wire:model='mother_contact' wire:keyup='SecDSetData' required>
                    </div>
                </td>
                <td>
                    <div class="p-1">
                        <input type="text" name="guardian_contact" id="guardian_contact"
                            class="form-control shadow text-uppercase" placeholder="Enter Guardian's Contact No."
                            wire:model='guardian_contact' wire:keyup='SecDSetData' required>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
</div>

<div class="my-3 gap-2 d-flex justify-content-end">
    <div class="btn btn-secondary" wire:click='SecDPrev'><i class="fa-solid fa-angles-left me-2"></i>Back</div>
    <div class="btn btn-warning" wire:click='SecDNext'>Next<i class="fa-solid fa-angles-right ms-2"></i></div>
</div>
