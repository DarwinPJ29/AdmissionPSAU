<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')  PSAU |{{ ucwords(Request::segment(1)) }}</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon" />
    @include('layout.link')
</head>

<body>

    @include('components.navbar')
    @yield('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top" ><i class="fa-solid fa-angles-up"></i></button>
    @include('layout.script')
</body>

</html>
