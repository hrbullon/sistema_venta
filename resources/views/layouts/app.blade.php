<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Ventas Laravel Vue Js - Hbullon">
    <meta name="author" content="hbullon">
    <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="img/favicon.png">
    <title>Sistema Ventas - Laravel and Vue.js</title>
    <!-- Icons -->

    <link href="css/template.css" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div id="app">
    <!--Header-->
    @component('layouts.header')
    @endcomponent
        <div class="app-body">

            <!--Sidebar-->
            @component('layouts.sidebar')
            @endcomponent

            @show
            <!-- Contenido Principal -->
            <main class="main">
                @yield('content')
            </main>
            <!-- /Fin del contenido principal -->
        </div>
    </div>
    <!--Footer-->
    @component('layouts.footer')
    @endcomponent

    <!-- GenesisUI main scripts -->
    <script src="js/app.js"></script>
    <script src="js/template.js"></script>
</body>

</html>
