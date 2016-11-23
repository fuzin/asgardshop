<!DOCTYPE html>
<html>
<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">
    {!! Theme::style('css/app.css') !!}
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    {{-- This is the token Laravel requires for non-GET requests --}}
    <meta id="_token" value="{{ csrf_token() }}">
</head>
<body>

@include('partials.navigation')

<div class="container">
    @yield('content')
</div>
@include('partials.footer')
{!! Theme::script('js/all.js') !!}
@yield('scripts')




<?php if (Setting::has('core::google-analytics')): ?>
{!! Setting::get('core::google-analytics') !!}
<?php endif; ?>
</body>
</html>
