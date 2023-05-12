<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/popup.css') }}" rel="stylesheet" type="text/css" />

    <title>Asistencia</title>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white-100 ">
        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">

                            <x-application-logo
                                class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />

                        </div>
                    </div>
        </header>
        <main>
            <div class="formulario">
                <form action="{{ route('Alumnos.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <label for="Nocuenta">Número de cuenta</label>
                        <input type="number" name="nocuenta" id="Nocuenta" class="form-control" placeholder="...">
                        <label for="Contraseña"> Contraseña</label>
                        <input type="password" name="password" id="Contraseña" class="form-control" placeholder="...">
                        <input type="hidden" name="fecha_asis" id="Fecha asistencia" class="form-control" >
                        <label for="Fecha asistencia"> Fecha de asistencia</label>
                        <button type='submit' ,
                            class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>
                            Enviar
                        </button>
                    </div>

                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </main>

    </div>

</body>
<footer>
    <p class="copyright">
        &copy Copyright JK - 2023</p>
</footer>

</html>
