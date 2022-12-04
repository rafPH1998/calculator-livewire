<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <livewire:styles />

    </head>
    <body class="bg-gray-800">

        <div class="flex space-x-5">
            <livewire:calculator />
        </div>

        <livewire:scripts />
    </body>
</html>


