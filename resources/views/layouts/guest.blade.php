<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        @yield('title')
        @include('components.links')
        @include('components.scripts')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans text-gray-900 antialiased">
        <script>
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            @endif

            @if($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "{!! implode('\n', $errors->all()) !!}",
                    showConfirmButton: true,
                });
            @endif
        </script>

        @component('components.header')
        @endcomponent

        <div class="dashboard__section">
            @section('content')
            @show
        </div>
        
        @component('components.footer')
        @endcomponent
    </body>
</html>