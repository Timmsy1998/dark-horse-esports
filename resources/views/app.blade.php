<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Favicon / App Icons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/global/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/global/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/global/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/global/favicons/site.webmanifest">
    <link rel="mask-icon" href="/assets/global/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/global/favicons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Dark Horse Esports">
    <meta name="application-name" content="Dark Horse Esports">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="msapplication-TileImage" content="/assets/global/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/assets/global/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app"></div>
    @vite(['resources/js/app.js'])
</body>

</html>
