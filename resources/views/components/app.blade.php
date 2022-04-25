<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--- Tailwind -->
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <!--- Livewire -->
    @livewireStyles


    <title>Líder Soluções Tecnológicas</title>
</head>
<body>

    <!--- Header -->
    <x-header name="Header" />

    <!--- Sidebar -->
    <x-sidebar name="Sidebar" />

    <!--- Content -->
    {{ $slot }}

    <!--- Footer -->
    <x-footer name="Footer" />

    <!--- Livewire -->
    @livewireScripts
    <!--- WireUI -->
    @wireUiScripts
    <!--- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
