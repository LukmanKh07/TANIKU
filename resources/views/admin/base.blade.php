<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TANIKU.COM_ADMIN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{ URL::asset('admin/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet') }}">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ URL::asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><h2 style="color: white">TANIKU.COM</h2> </b>
                    <span class="logo-compact"><h2  style="color: white">TANIKU.COM</h2></span>
                    <span class="brand-title">
                        <h2  style="color: white">TANIKU.COM</h2>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        
                       
                        <li class="icons dropdown d-none d-md-flex"><ul>
                            
                        
                             @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="" href="{{ route('admin.admin') }}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="" href="{{ route('admin.pengguna') }}" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Manajemen Users</span>
                        </a>
                       
                    </li>

                    <li class="mega-menu mega-menu-sm">
                        <a class="" href="{{ route('kategori.index') }}" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Kategori</span>
                        </a>
                       
                    </li>
                   
                    <li>
                        <a class="" href="{{ route('admin.produk') }}" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Produk</span>
                        </a>
                       
                    </li>
                    <li>
                        <a class="" href="{{ route('admin.order') }}"  aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Order</span>
                        </a>
                       
                    </li>
                    <li>
                        <a class="" href="{{ route('admin.penjualan') }}" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Penjualan</span>
                        </a>
                        
                    </li>
                   
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!-- konten -->

        @yield('isi')


                <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
     <script src="{{ URL::asset('admin/plugins/common/common.min.js') }}"></script>
    <script src="{{ URL::asset('admin/js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('admin/js/settings.js') }}"></script>
    <script src="{{ URL::asset('admin/js/gleek.js') }}"></script>
    <script src="{{ URL::asset('admin/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ URL::asset('admin/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ URL::asset('admin/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ URL::asset('admin/plugins/d3v3/index.js') }}"></script>
    <script src="{{ URL::asset('admin/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ URL::asset('admin//plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ URL::asset('admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('admin/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ URL::asset('admin/./plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ URL::asset('admin/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ URL::asset('admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



    <script src="{{ URL::asset('admin/js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>