<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon" />
    @include('layout.link')
</head>

<body class="bg-secondary-subtle">
    <div class="container  vh-100">
        <div class="row h-100  justify-content-center">
            <div class="container my-auto login-page p-2">

                <div class="container border border rounded-top fs-4 p-1 shadow main-bg">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex justify-content-center">
                            <div class=" d-flex flex-column justify-content-center">
                                <img src="{{ asset('images/PSAU_logo.png') }}" alt=""
                                    class="img-fluid side-icon ms-2">
                            </div>
                            <div class="d-flex flex-column justify-content-center ms-2 fs-style">Pampanga State
                                Agricultural University</div>
                        </div>
                        <a href="{{ route('index') }}" class="nav-link text-end">
                            <div class="btn"><i class="fa-solid fa-times"></i></div>
                        </a>

                    </div>

                </div>
                <div class="border text-dark  p-3 shadow ">
                    <form action="{{ route('changeDefaultPassword') }}" method="post">
                        @csrf
                        <div class="container">

                            <div class="row mb-3 ">
                                <div class="col-2">
                                    <hr class="border border-1 border-success opacity-75">
                                </div>
                                <div class="col-8 d-flex justify-content-center">
                                    <span class="fs-style fw-bold fs-5">Change Password</span>
                                </div>
                                <div class="col-2">
                                    <hr class="border border-1 border-success opacity-75">
                                </div>
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text bg-success" id="inputGroupPrepend">
                                    <i class="fa-solid fa-key text-warning"></i> </span>
                                <input type="password" id="new_password" name="new_password" class="form-control shadow"
                                    placeholder="Enter your New Password" required>
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="input-group mb-2">
                                <span class="input-group-text bg-success" id="inputGroupPrepend">
                                    <i class="fa-solid fa-key text-warning"></i> </span>
                                <input type="password" id="confirm_password" name="confirm_password"
                                    class="form-control shadow" placeholder="Confirm your New Password" required>
                                @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="checkbox" name="showPassword" id="showPassword" class="mt-3"> Show Password
                            <hr class="border bordr-2 opacity-75 border-success">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm btn-warning shadow"> Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layout.script')
    <script>
        document.getElementById('showPassword').addEventListener('change', function() {
            var passwordField = document.getElementById('new_password');
            var passwordField2 = document.getElementById('confirm_password');
            if (this.checked) {
                passwordField.type = 'text';
                passwordField2.type = 'text';
            } else {
                passwordField.type = 'password';
                passwordField2.type = 'password';
            }
        });
    </script>
</body>

</html>
