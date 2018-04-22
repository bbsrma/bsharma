<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        @component('alert')
        @slot('title')
            Forbidden
        @endslot

        You are not allowed to access this resource!
        @endcomponent

    </body>
</html>