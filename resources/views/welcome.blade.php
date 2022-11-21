<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Assets with S3 </title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased flex items-center justify-center h-screen bg-gradient-to-r from-gray-500 via-red-700 to-gray-800">
        <img src="{{ asset('geerling.jpeg') }}" class="block rounded-xl" alt="Logo">            
    </body>
</html>
