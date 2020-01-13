<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('include.head')
</head>
<body>
    <div id="app">
        <div class="header">
            @yield('navbar')
        </div>
        <div class="aside">
            @yield('sidebar')
        </div>
        <div class="content">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </div>
    @include('include.foot')
</body>
</html>
