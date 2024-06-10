<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    @include('layout.link')
</head>

<body>
    <div class="container  vh-100">
        <div class="row h-100  justify-content-center">
            <div class="container my-auto login-page p-2">
                <div class="container border border rounded-top fs-4 p-1 shadow main-bg">
                    <div class="d-flex justify-content-between">
                        <span class="ms-2">Log in</span>
                        <a href="{{ route('index') }}" class="nav-link text-end">
                            <div class="btn"><i class="fa-solid fa-times"></i></div>
                        </a>

                    </div>

                </div>
                <div class="border text-dark  p-3 shadow ">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="container">
                            <div class="mt-3 mb-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="form-control shadow" placeholder="Enter your email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <label for="password">Password</label>
                            <div class="input-group mb-2">
                                <input type="password" id="password" name="password" class="form-control shadow"
                                    placeholder="Enter your password">
                                <button class="btn btn-outline-primary " type="button" id="view"
                                    onclick="showpassword()">
                                    <i class="fa fa-eye-slash text-dark" id="eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <a href="" class="nav-link text-primary">forget
                                password?</a>
                            <hr class="border bordr-2 opacity-75 border-secondary">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm btn-warning shadow"> Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layout.script')
</body>

</html>
