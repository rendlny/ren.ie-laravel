<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>

        <div class="ms-site-container">
            @yield('content')
        </div>

        <script src="/web/assets/js/jquery.min.js"></script>
        <script src="/web/assets/js/plugins.min.js"></script>
        <script src="/web/assets/js/app.min.js"></script>
        <script src="/web/assets/js/ecommerce.js"></script>
        <script src="/web/assets/js/configurator.min.js"></script>
    </body>
</html>
