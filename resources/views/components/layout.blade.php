<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    {{ $head ?? '' }}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.9/tailwind.min.css"
        integrity="sha512-SvJR34InARUfJb279ipE/gjQqX11MDKaly9MNb0vevuWQJmZ23UH7F/65ScEsvLI+myKGbdfA1En82wVSCHQ8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.x.x/dist/alpine.min.js" defer></script>
    
    @stack('scripts')

    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body>
    @include('partials/header')
    {{ $slot }}
</body>

</html>