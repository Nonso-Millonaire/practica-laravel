<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Práctica</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="font-sans antialiased bg-gray-100">
<div class="min-h-screen">
    <x-header />
    <x-nav />

    <main class="p-6">
        {{ $slot }}
    </main>

    <x-footer />
</div>
</body>
</html>
