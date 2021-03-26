<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda de Contatos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/contact-list.png')}}" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Entrar</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Cadastrar</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            @auth
            <h1>Que bom ver voce novamente! para entrar em sua agenda click no link "dashboard" acima.</h1>
            @else
            <h1>Seja bem vindo, e conheça nossa agenda de contatos digital!</h1>
            @endauth
            <br>
            <center>
                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_9wjm14ni.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
            </center>
        </div>
    </div>
</body>

</html>