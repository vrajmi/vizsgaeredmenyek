<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vizsgaeredmények</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <nav class="bg-gray-800">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="text-white font-bold">Vizsgaeredmények</div>
                <div class="hidden sm:flex space-x-4">
                    <a href="{{ route('welcome') }}" class="text-gray-300 hover:text-white">Kezdőlap</a>
                    <a href="{{ route('examinee.create') }}" class="text-gray-300 hover:text-white">Új vizsgázó
                        rögzítés</a>
                    <a href="{{ route('examinee.index') }}" class="text-gray-300 hover:text-white">Összes vizsgázó</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold">Vizsgaeredmények</h1>
        </header>

        <div class="bg-white p-6 rounded-lg shadow-md">
            @yield('content')
        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center py-4">
        <p>Copyright by Vodenicsár Rajmund</p>
    </footer>
</body>

</html>
