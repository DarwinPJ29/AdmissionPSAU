<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    @include('layout.link')
</head>

<body>
    <div class="container-fluid p-3">
        <div class="box-shadow p-3 top-border">
            <h3 class="text-start mt-2">Create Account</h3>
            <hr>
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
                            placeholder="Enter Last Name:" value="{{ old('age') }}"> @error('age')
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

    @include('layout.script')
</body>

</html>
