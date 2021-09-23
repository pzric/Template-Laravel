<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <style>
        @importurl('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');.font-family-karla {
            font-family: karla;
        }

        .bg-sidebar {
            background: #252525;
        }

        .active-nav-link {
            background: #4B7447;
        }

        .nav-item:hover {
            background: #4B7447;
        }

        .account-link:hover {
            background: #4B7447;
        }
        .toggle-checkbox:checked {
          apply: right-0 border-green-400;
          right: 0;
          border-color: #68D391;
        }
        .toggle-checkbox:checked + .toggle-label {
          apply: bg-green-400;
          background-color: #68D391;
        }
    </style>

    <livewire:styles />

</head>

<body class="bg-gray-300 font-family-karla flex">
    @yield('content')

    <livewire:scripts />
</body>
</html>
