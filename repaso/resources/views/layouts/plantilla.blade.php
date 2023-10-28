<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js']) <!-- SIRVE PARA TRAER DE LA CARPETA RESOURCES EN JS, APP -->

    <title> @yield('titulo') </title>

</head>
<body>
    @include('partials.navbar') 

    @yield('contenido')  

    @yield('ppagina')
</body>

<footer>
    @include('partials.footer')
</footer>

</html>