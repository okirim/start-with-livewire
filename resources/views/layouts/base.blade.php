<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

        <title>@yield('title') - {{ config('index.name') }}</title>
    @else
        <title>{{ config('index.name') }}</title>
@endif

<!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        progress {
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            box-shadow: 1px 1px 4px rgba( 0, 0, 0, 0.2 );
        }
        progress::-webkit-progress-bar {
            background-color: #C084FC;
            border-radius: 7px;
        }
        progress::-webkit-progress-value {
            background-color: #7E22CE;
            border-radius: 7px;

        }
        progress::-moz-progress-bar {
            /* style rules */
        }
    </style>
</head>

<body>

@yield('body')


@livewireScripts
@yield('alpine')
</body>

</html>
