<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title') | Admission {{ ucwords(Request::segment(1)) }}</title>
    <link rel="icon" href="{{ URL::asset('assets/images/fav.jpg') }}" type="image/x-icon" />
    @include('layout.link')
</head>

<body>

    @include('components.adminNav')
    @include('components.sidebar')

    <!-- main content start -->
    <main id="main-content">
        @yield('content')
    </main>
    <!-- main content end -->

    @include('layout.script')
    <script>
        {{-- admin setting --}}
            <
            script >
            document.getElementById('showPassword').addEventListener('change', function() {
                var passwordField = document.getElementById('admin_password');
                var passwordField1 = document.getElementById('admin_password1');
                if (this.checked) {
                    passwordField.type = 'text';
                    passwordField1.type = 'text';
                } else {
                    passwordField.type = 'password';
                    passwordField1.type = 'password';
                }
            }); <
        />
    </script>
    @livewireScripts()

</body>

</html>
