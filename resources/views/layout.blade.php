<html>
    <head>
        <title>
            @yield('title')
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('components.links')
        @include('components.scripts')
    </head>
    <body>
        @component('components.header')
        @endcomponent
        @section('content')
        @show
        @component('components.footer')
        @endcomponent
    </body>
</html>