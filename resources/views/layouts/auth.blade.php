<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Login</title>
    <!-- Bootstrap CSS-->
    <link href=" {{ asset ('assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href=" {{ asset ('assets/css/theme.css') }} " rel="stylesheet" media="all">

    @yield('style')
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">

                @yield('content')

            </div>
        </div>
    </div>


    <!-- Jquery JS -->
    <script src=" {{ asset ('assets/vendor/jquery-3.2.1.min.js') }} "></script>
    <!-- Bootstrap JS -->
    <script src=" {{ asset ('assets/vendor/bootstrap-4.1/popper.min.js') }} "></script>
    <script src=" {{ asset ('assets/vendor/bootstrap-4.1/bootstrap.min.js') }} "></script>
    <!-- Vendor JS -->
    <script src=" {{ asset ('assets/vendor/animsition/animsition.min.js') }} "></script>
    <!-- Main JS-->
    <script src=" {{ asset ('assets/js/main.js') }} "></script>

    <!-- Customs -->
    @yield('script')
</body>
</html>
