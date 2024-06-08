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

    @include('components.navbar')
    @yield('content')

    @include('layout.script')
</body>

</html>
