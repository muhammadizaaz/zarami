    <!--Navbar Start-->
    @guest
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="nav-sticky">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="#">
                <img src="{{ asset('landing') }}/images/logo-dark-img.png" alt="" class="logo-light"
                    height="72" />
                <img src="{{ asset('landing') }}/images/logo-img.png" alt="" class="logo-dark"
                    height="72" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="mySidenav">
                    <li class="nav-item">
                        <a href="#about" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#activity" class="nav-link">Our Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimoni" class="nav-link">Information</a>
                    </li>
                    <li class="nav-item">
                        <a href="#faq" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-custom me-4">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endguest
    @auth
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="nav-sticky">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="#">
                <img src="{{ asset('landing') }}/images/logo-img.png" alt="" class="logo-light"
                    height="36" />
                <img src="{{ asset('landing') }}/images/logo-dark-img.png" alt="" class="logo-dark"
                    height="36" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="mySidenav">
                    <li class="nav-item">
                        <a href="#about" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#activity" class="nav-link">Our Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimoni" class="nav-link">Information</a>
                    </li>
                    <li class="nav-item">
                        <a href="#faq" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                        @auth
                        @role('admin')
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-custom me-4">{{ auth()->user()->name }}</a>
                        @endrole
                        @role('manager')
                        <a href="{{ route('manager.dashboard') }}" class="btn btn-custom me-4">{{ auth()->user()->name }}</a>
                        @endrole
                        @role('staff')
                        <a href="{{ route('staff.dashboard') }}" class="btn btn-custom me-4">{{ auth()->user()->name }}</a>
                        @endrole
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endauth
    <!-- Navbar End -->