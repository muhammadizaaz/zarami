<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Volunfis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('landing') }}/images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('landing') }}/css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/css/materialdesignicons.min.css" />

    <!--pe-7 Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/css/pe-icon-7-stroke.css" />

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/css/style.css" />

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="58" class="scrollspy-example">

    <!--Navbar Start-->
    @include('layouts.landing.navbar')
    <!-- Navbar End -->

    <!-- Content start -->
    <main>
        @yield('content')
    </main>
    <!-- Content end -->

    <!-- footer start -->
    @include('layouts.landing.footer')
    <!-- footer end -->

    <!-- Back to top -->
    <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

    <!-- javascript -->
    <script src="{{ asset('landing') }}/js/bootstrap.bundle.min.js"></script>
    <!-- counter js -->
    <script src="{{ asset('landing') }}/js/counter.int.js"></script>
    <!-- custom js -->
    <script src="{{ asset('landing') }}/js/app.js"></script>
</body>

</html>
