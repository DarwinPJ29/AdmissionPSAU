<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PSAU | @yield('page-title')</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon" />
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
    @livewireScripts()

</body>

</html>
