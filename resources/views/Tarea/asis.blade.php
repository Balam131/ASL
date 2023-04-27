<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Asistencia</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white-100 ">
        <header>
            <div class="caja">
                <h1><img src="{{ asset('Sources/ASL.png') }}" alt="ASS"></h1>

            </div>
        </header>
        <main>
            <div class="formulario">
                <form>
                    <label for="Nocuenta">Número de cuenta</label>
                    <input type="text" id="Nocuenta" class="input-padron" required>

                    <label for="Contraseña"> Contraseña</label>
                    <input type="password" id="Contraseña" class="input-padron" required placeholder="***************">

                    <input type="submit" value="Enviar Asistencia" class="enviar">
                </form>

            </div>
        </main>
        
    </div>
    <footer>
        <p class="copyright">
            &copy Copyright JK - 2023</p>
    </footer>
</body>

</html>
