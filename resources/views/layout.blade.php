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
        <script>
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}',
                    showConfirmButton: true,
                });
            @endif
        </script>
        @component('components.header')
        @endcomponent
        @section('content')
        @show
        @component('components.footer')
        @endcomponent
    </body>
</html>