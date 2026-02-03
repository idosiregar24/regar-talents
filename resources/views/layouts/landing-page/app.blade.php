<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regar Talents</title>
    @include('layouts.landing-page.head')
</head>

<body>
    @include('layouts.landing-page.header')
    @yield('content')

    @include('layouts.landing-page.footer')
    @include('layouts.landing-page.script')
</body>
</html>
