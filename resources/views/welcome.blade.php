<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello from Laravel</title>

        {{-- tailwind --}}
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="min-h-screen bg-gradient-to-br from-pink-500 to-pink-700 flex flex-col items-center justify-center">
        <h2 class="text-white text-5xl font-bold mb-3">Hello from Laravel!</h2>
        <h3 class="text-pink-300 text-2xl">Deployed to DigitalOcean</h3>
    </body>
</html>
