<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? ''}}</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="https://img.icons8.com/?size=100&id=v7D348xxPOBS&format=png&color=000000">
    <!-- icons bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <main class="d-flex flex-column min-vh-100">
        <div class="sticky-top">
            <x-navigation.navbar />
        </div>

        <div>
            {{ $slot }}
        </div>

        <div class="mt-auto">
            <x-ui.footer />
        </div>
    </main>


    <script src="https://kit.fontawesome.com/747222a0ae.js" crossorigin="anonymous"></script>
    @livewireScripts
</body>

</html>