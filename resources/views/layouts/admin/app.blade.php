<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.admin.head')
</head>

<body>
    @include('layouts.admin.sidebar')
    <header class="nxl-header">
        <div class="header-wrapper">
            @include('layouts.admin.navbar')
            @include('layouts.admin.header')
        </div>
    </header>
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                @yield('content')
            </div>
        </div>
        @include('layouts.admin.footer')
    </main>
    @include('layouts.admin.scripts')
</body>

</html>
