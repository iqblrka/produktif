<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Nice Admin') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('backend/assets/images/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend/assets/libs/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('backend/assets/css/style.min.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Main wrapper -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <!-- ============================================================== -->
        <!-- Topbar -->
        <!-- ============================================================== -->
        <header class="topbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('backend/assets/images/logo-icon.png') }}" alt="Logo" width="30">
                        <span class="ml-2">Nice Admin</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> Analytics</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://ui-avatars.com/api/?name=Jenifer+Smith&background=fff&color=333" alt="Jenifer Smith" width="30" class="rounded-circle">
                                    <span class="ml-2 d-none d-md-inline">Jenifer Smith</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <!-- ============================================================== -->
        <!-- Left Sidebar -->
        <!-- ============================================================== -->
        @include('backend.layouts.sidebar')

        <!-- ============================================================== -->
        <!-- Page wrapper -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- All Jquery -->
    <script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.min.js') }}"></script>
</body>
</html>