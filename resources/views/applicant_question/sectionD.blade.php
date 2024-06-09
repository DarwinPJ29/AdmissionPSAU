
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Section A</title>
    @include('layout.link')
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            @include('applicant_question.header')

            <label class="text-uppercase mt-4">section d: parents'/guardian's background information</label>
            <div class="border border-dark main-bg rounded-top-1">
                <div class="row">
                    <div class="col-md-3 border-end border-dark">
                        <div class=" text-uppercase fw-bold text-center"></div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <div class=" text-uppercase fw-bold text-center">father</div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <div class=" text-uppercase fw-bold text-center">mother</div>
                    </div>
                    <div class="col-md-3 ">
                        <div class=" text-uppercase fw-bold text-center">guardian</div>
                    </div>
                </div>
            </div>
            {{-- Fullname --}}
            <div class="border border-dark">
                <div class="row">
                    <div class="col-md-3 border-end border-dark">
                        <div class="text-start p-1">Full Name</div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="father_fullname" id="father_fullname" class="form-control shadow m-1" placeholder="Enter Father's Name"  value="{{ old('father_fullname') }}">
                        @error('father_fullname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="mother_fullname" id="mother_fullname" class="form-control shadow m-1" placeholder="Enter Mother's Name"  value="{{ old('mother_fullname') }}">
                        @error('mother_fullname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" name="guardian_fullname" id="guardian_fullname" class="form-control shadow m-1" placeholder="Enter Guardian's Name"  value="{{ old('guardian_fullname') }}">
                        @error('guardian_fullname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- Date of Birth --}}
            <div class="border border-dark">
                <div class="row">
                    <div class="col-md-3 border-end border-dark">
                        <div class="text-start p-1">Date of Birth</div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="date" name="father_date_birth" id="father_date_birth" class="form-control shadow m-1" placeholder="Enter Date of Birth"  value="{{ old('father_date_birth') }}">
                        @error('father_date_birth')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="date" name="mother_date_birth" id="mother_date_birth" class="form-control shadow m-1" placeholder="Enter Date of Birth"  value="{{ old('mother_date_birth') }}">
                        @error('mother_date_birth')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 ">
                        <input type="date" name="guardian_date_birth" id="guardian_date_birth" class="form-control shadow m-1" placeholder="Enter Date of Birth"  value="{{ old('guardian_date_birth') }}">
                        @error('guardian_date_birth')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
             {{-- Educational Attainment --}}
             <div class="border border-dark">
                <div class="row">
                    <div class="col-md-3 border-end border-dark">
                        <div class="text-start p-1">Highest Educational Attainment</div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="father_education" id="father_education" class="form-control shadow m-1" placeholder="Enter Father's Educational Attainment"  value="{{ old('father_education') }}">
                        @error('father_education')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="mother_education" id="mother_education" class="form-control shadow m-1" placeholder="Enter Mother's Educational Attainment"  value="{{ old('mother_education') }}">
                        @error('mother_education')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" name="guardian_education" id="guardian_education" class="form-control shadow m-1" placeholder="Enter Guardian's Educational Attainment"  value="{{ old('guardian_education') }}">
                        @error('guardian_education')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
             {{-- Occupation --}}
             <div class="border border-dark">
                <div class="row">
                    <div class="col-md-3 border-end border-dark">
                        <div class="text-start p-1">Occupation/Employment</div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="father_occupation" id="father_occupation" class="form-control shadow m-1" placeholder="Enter Father's Occupation/Employment"  value="{{ old('father_occupation') }}">
                        @error('father_occupation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="mother_occupation" id="mother_occupation" class="form-control shadow m-1" placeholder="Enter Mother's Occupation/Employment"  value="{{ old('mother_occupation') }}">
                        @error('mother_occupation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" name="guardian_occupation" id="guardian_occupation" class="form-control shadow m-1" placeholder="Enter Guardian's Occupation/Employment"  value="{{ old('guardian_occupation') }}">
                        @error('guardian_occupation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
             {{-- Company --}}
             <div class="border border-dark">
                <div class="row">
                    <div class="col-md-3 border-end border-dark">
                        <div class="text-start p-1">Company Name/Address</div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="father_company" id="father_company" class="form-control shadow m-1" placeholder="Enter Father's Company Name/Address"  value="{{ old('father_company') }}">
                        @error('father_company')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="mother_company" id="mother_company" class="form-control shadow m-1" placeholder="Enter Mother's Company Name/Address"  value="{{ old('mother_company') }}">
                        @error('mother_company')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" name="guardian_company" id="guardian_company" class="form-control shadow m-1" placeholder="Enter Guardian's Company Name/Address"  value="{{ old('guardian_company') }}">
                        @error('guardian_company')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
              {{-- Income --}}
              <div class="border border-dark">
                <div class="row">
                    <div class="col-md-3 border-end border-dark">
                        <div class="text-start p-1">Monthly Income</div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="father_income" id="father_income" class="form-control shadow m-1" placeholder="Enter Father's Income"  value="{{ old('father_income') }}">
                        @error('father_income')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="mother_income" id="mother_income" class="form-control shadow m-1" placeholder="Enter Mother's Income"  value="{{ old('mother_income') }}">
                        @error('mother_income')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" name="guardian_income" id="guardian_income" class="form-control shadow m-1" placeholder="Enter Guardian's Income"  value="{{ old('guardian_income') }}">
                        @error('guardian_income')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
             {{-- Contact --}}
             <div class="border border-dark">
                <div class="row">
                    <div class="col-md-3 border-end border-dark">
                        <div class="text-start p-1">Contact No.</div>
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="father_contact" id="father_contact" class="form-control shadow m-1" placeholder="Enter Father's Contact No."  value="{{ old('father_contact') }}">
                        @error('father_contact')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 border-end border-dark">
                        <input type="text" name="mother_contact" id="mother_contact" class="form-control shadow m-1" placeholder="Enter Mother's Contact No."  value="{{ old('mother_contact') }}">
                        @error('mother_contact')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 ">
                        <input type="text" name="guardian_contact" id="guardian_contact" class="form-control shadow m-1" placeholder="Enter Guardian's Contact No."  value="{{ old('guardian_contact') }}">
                        @error('guardian_contact')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-3 gap-2 d-flex justify-content-end">
                <div class="btn btn-secondary"><i class="fa-solid fa-angles-left me-2"></i>Back</div>
                <div class="btn btn-warning">Next<i class="fa-solid fa-angles-right ms-2"></i></div>
            </div>

        </div>

    </div>
</body>
</html>

