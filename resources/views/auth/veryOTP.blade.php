<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify OTP</title>
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
                        <a href="{{ route('login') }}" class="nav-link text-end">
                            <div class="btn"><i class="fa-solid fa-times"></i></div>
                        </a>

                    </div>

                </div>
                <div class="border text-dark  p-3 shadow ">
                    <form action="{{ route('validateOTP', $id) }}" method="post">
                        @csrf
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-3">
                                    <hr class="border border-1 border-success opacity-75">
                                </div>
                                <div class="col-6 d-flex justify-content-center">
                                    <span class="fs-style fw-bold fs-3">Verify OTP</span>
                                </div>
                                <div class="col-3">
                                    <hr class="border border-1 border-success opacity-75">
                                </div>
                            </div>
                            <div class="mt-3 mb-3">
                                <div class="input-group d-flex flex-direction-column">
                                    <span class="input-group-text bg-success" id="inputGroupPrepend">
                                        <i class="fa-solid fa-key text-warning"></i>
                                    </span>
                                    <input type="otp" class="form-control" id="otp" name="otp"
                                        placeholder="Enter your OTP here..." value="{{ old('otp') }}" required>
                                </div>
                                @error('otp')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3 mb-3">
                                <div class="input-group d-flex flex-direction-column">
                                    <span class="input-group-text bg-success" id="inputGroupPrepend">
                                        <i class="fa-solid fa-lock text-warning"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter your password here..." value="{{ old('password') }}"
                                        required>
                                </div>
                                @error('password')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-3 mb-3">
                                <div class="input-group d-flex flex-direction-column">
                                    <span class="input-group-text bg-success" id="inputGroupPrepend">
                                        <i class="fa-solid fa-lock text-warning"></i>
                                    </span>
                                    <input type="password" class="form-control" id="confirm" name="confirm"
                                        placeholder="Confirm your password here..." value="{{ old('confirm') }}"
                                        required>
                                </div>
                                @error('confirm')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr class="border bordr-2 opacity-75 border-success">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-md btn-warning shadow">Verify / Save
                                    Changes</button>
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
            var passwordField = document.getElementById('login_password');
            if (this.checked) {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>
</body>

</html>
