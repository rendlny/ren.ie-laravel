<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-700">

        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <div>
            <header class="bg-black">
                <div class="container container-full pr-4 pl-4 mr-auto ml-auto">
                    <div class="ms-title text-white align-middle">
                        <a href="/home">
                            <img class="inline-block w-16 h-16 mt-5 mr-2" src="{{ asset('storage/images/WEB-ICON-white.png') }}" alt="Website Icon">
                            <h1 class="inline-block mt-35 text-3xl">Ren Delaney</h1>
                        </a>
                    </div>
                    <div class="mt-6 float-right">
                        <a class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left"><i class="fas fa-bars text-white"></i></a>
                    </div>
                </div>
            </header>

            @yield('content')
        </div>

        <script src="/web/assets/js/jquery.min.js"></script>
        <script src="/web/assets/js/plugins.min.js"></script>
        <script src="/web/assets/js/app.min.js"></script>
        <script src="/web/assets/js/ecommerce.js"></script>
        <script src="/web/assets/js/configurator.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
