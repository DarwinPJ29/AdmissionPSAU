@extends('layout.layoutAdmin')
@section('page-title', 'Courses')
@section('content')
    <div class="container">
        <div class="box-shadow p-3 top-border">
            <form action="{{ route('storeAccnt') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    {{-- roles --}}
                    <div class="col-md-6">
                        <label for="roles" class="m-1">Account User Level <span class="text-danger">*</span></label>
                        <select name="roles" id="roles" class="form-select shadow @error('roles') is-invalid @enderror"
                            value="{{ old('roles') }}">
                            <option value="" selected hidden>Select User Level:</option>
                            <option value="Student" @selected(old('roles') == 'Student')>Student</option>
                            <option value="Admin" @selected(old('roles') == 'Admin')>Admin</option>
                            <option value="Super Admin"@selected(old('roles') == 'Super Admin')>Super Admin</option>
                        </select>
                        @error('roles')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <label class="fw-bold fs-3">User Account Information</label>

                <hr class="border border-1 border-dark opacity-75">
                {{-- Name --}}
                <div class="row mb-2">
                    <div class="col-md-4">
                        <label for="firstName">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="first_name" id="firstName" class="form-control shadow"
                            placeholder="Enter First Name:" value="{{ old('first_name') }}">
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="col-md-4">
                        <label for="middleName">Middle Name</label>
                        <input type="text" name="middle_name" id="middleName" class="form-control shadow"
                            placeholder="Enter Middle Name:" value="{{ old('middle_name') }}"> @error('middle_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="lastName">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="last_name" id="lastName" class="form-control shadow"
                            placeholder="Enter Last Name:" value="{{ old('last_name') }}"> @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <label for="bday">Birth Date <span class="text-danger">*</span></label>
                        <input type="date" name="bday" id="bday" class="form-control shadow"
                            placeholder="Enter Last Name:" value="{{ old('bday') }}"> @error('bday')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="age">Age <span class="text-danger">*</span></label>
                        <input type="number" min="0" name="age" id="age" class="form-control shadow"
                            placeholder="Enter Age:" value="{{ old('age') }}"> @error('age')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- gender --}}
                    <div class="col-md-4">
                        <label for="gender">Gender <span class="text-danger">*</span></label>
                        <select name="gender" id="gender" class="form-select shadow @error('roles') is-invalid @enderror"
                            value="{{ old('roles') }}">
                            <option value="" selected hidden>Select Gender:</option>
                            <option value="Male" @selected(old('gender') == 'Male')>Male</option>
                            <option value="Female"@selected(old('gender') == 'Female')>Female</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="address">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control shadow"
                            placeholder="Enter Address:" value="{{ old('address') }}"> @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="contact">Contact # <span class="text-danger">*</span></label>
                        <input type="number" name="contact" id="contact" class="form-control shadow"
                            placeholder="Enter Contact #:" value="{{ old('contact') }}"> @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label for="application_type" class="m-1">Application Type <span class="text-danger">*</span></label>
                        <select name="application_type" id="application_type" class="form-select shadow @error('application_type') is-invalid @enderror"
                            value="{{ old('application_type') }}">
                            <option value="" selected hidden>Select Application Type:</option>
                            <option value="Masteral Level" @selected(old('application_type') == 'Masteral Level')>Masteral Level</option>
                            <option value="Doctoral Level" @selected(old('application_type') == 'Doctoral Level')>Doctoral Level</option>
                            <option value="New Student"@selected(old('application_type') == 'New Student')>New Student</option>
                            <option value="Transferee"@selected(old('application_type') == 'Transferee')>Transferee</option>
                            <option value="Second Courser"@selected(old('application_type') == 'Second Courser')>Second Courser</option>
                        </select>
                        @error('application_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="course" class="m-1">Course <span class="text-danger">*</span></label>
                        <select name="course" id="course" class="form-select shadow @error('course') is-invalid @enderror"
                            value="{{ old('course') }}">
                            <option value="" selected hidden>Select Course:</option>
                            <option value="sample course" @selected(old('course') == 'sample course')>sample course</option>

                        </select>
                        @error('course')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
            </div>



                <div class="row mb-2 mt-4">
                    <label class="fw-semibold ">Father's Name</label>
                    <hr>
                    <div class="col-md-4">
                        <label for="father_name">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="father_name" id="father_name" class="form-control shadow"
                            placeholder="Enter First Name:" value="{{ old('father_name') }}"> @error('father_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="father_middle">Middle Name</label>
                        <input type="text" name="father_middle" id="father_middle" class="form-control shadow"
                            placeholder="Enter Middle Name:" value="{{ old('father_middle') }}"> @error('father_middle')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="father_last">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="father_last" id="father_last" class="form-control shadow"
                            placeholder="Enter Last Name:" value="{{ old('father_last') }}"> @error('father_last')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-4 mt-4">
                    <label class="fw-semibold ">Mother's Maiden Name</label>
                    <hr>
                    <div class="col-md-4">
                        <label for="mother_name">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="mother_name" id="mother_name" class="form-control shadow"
                            placeholder="Enter Name:" value="{{ old('mother_name') }}"> @error('mother_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="mother_middle">Middle Name</label>
                        <input type="text" name="mother_middle" id="mother_middle" class="form-control shadow"
                            placeholder="Enter Middle Name:" value="{{ old('mother_middle') }}"> @error('mother_middle')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="mother_last">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="mother_last" id="mother_last" class="form-control shadow"
                            placeholder="Enter Last Name:" value="{{ old('mother_last') }}"> @error('mother_last')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                {{-- Email --}}
                <div class="mb-2">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control shadow"
                        placeholder="Enter Email:" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="mb-2">
                    <label for="password">Password <span class="text-danger">*</span></label>
                    <input type="password" name="password" id="password" class="form-control shadow"
                        placeholder="Enter Password:">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="text-center mt-4 mx-auto">
                    <button class="btn btn-warning ">Submit</button>
                </div>
            </form>

        </div>
    </div>
@endsection
