<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PSAU | {{ ucwords(Request::segment(1) ?? 'Home') }}</title>
    <link rel="icon" href="{{ URL::asset('images/PSAU_logo.png') }}" type="image/x-icon">
    @include('layout.link')
    @livewireStyles
</head>

<body>
    @yield('content')

    @include('layout.script')
    @livewireScripts
</body>

</html>
