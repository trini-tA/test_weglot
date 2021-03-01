<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @if( env('APP_ENV') != 'local')
            <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        @endif
        <!-- CSRF Token -->
        @if( !empty($print) && $print )
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @else
            <meta name="csrf-token" content="{{ csrf_token() }}">
        @endif
        @if( !empty($title) && $title )
            <title>{{ config('app.name', 'Laravel') }}&nbsp;|&nbsp;{{ $title }}</title>
        @else
            <title>{{ config('app.name', 'Laravel') }}</title>
        @endif

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@8.3.2/dist/css/autoComplete.min.css">

        @stack('css')

        <script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
        <script>
            Weglot.initialize({
                api_key: 'wg_16717fb158b5c28608278ba33e1821d97'
            });
        </script>

    </head>
    <body class="antialiased">
        
        <div class="container">
            @yield('main')
        </div>
        <!-- Scripts -->
        {{-- <script>
            window._locale = '{{ app()->getLocale() }}';
            window.translations = {!! Cache::get('translations') !!};
        </script> --}}
        <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@8.3.2/dist/js/autoComplete.min.js"></script>
        <script src="{{ asset('js/app.js') }}" ></script>
        @stack('js')
    </body>
</html>
