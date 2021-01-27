<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/xray/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 02:47:58 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Full calendar -->
    <link href='{{asset('fullcalendar/core/main.css')}}' rel='stylesheet' />
    <link href='{{asset('fullcalendar/daygrid/main.css')}}' rel='stylesheet' />
    <link href='{{asset('fullcalendar/timegrid/main.css')}}' rel='stylesheet' />
    <link href='{{asset('fullcalendar/list/main.css')}}' rel='stylesheet' />

    <link rel="stylesheet" href="{{asset('css/flatpickr.min.css')}}">

    @yield('css')


</head>

<body class="sidebar-main-menu">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">

        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="index-2.html">
                    <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="">
                    <span>K-MEANS</span>
                </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-more-fill"></i></div>
                            <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                        <li>
                            <a href="{{route('getDashboard')}}" class="iq-waves-effect"><i
                                    class="ri-home-8-fill"></i><span>Halaman Utama</span></a>
                        </li>
                        <li>
                            <a href="{{route('getPemilihanObat')}}" class="iq-waves-effect"><i
                                    class="ri-briefcase-4-fill"></i><span>Pemilihan Obat</span></a>
                        </li>
                        <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Data</span></li>
                        <li>
                            <a href="{{route('getDataPengguna')}}" class="iq-waves-effect"><i
                                    class="ri-group-fill"></i><span>Data Pengguna</span></a>
                        </li>
                        <li>
                            <a href="{{route('getDataRiwayat')}}" class="iq-waves-effect"><i
                                    class="lab la-mendeley"></i><span>Data Riwayat</span></a>
                        </li>
                        <li>
                            <a href="{{route('getDataTransormasiNilai')}}" class="iq-waves-effect"><i
                                    class="ri-home-8-fill"></i><span>Data Transormasi Nilai</span></a>
                        </li>
                        <li>
                            <a href="{{route('getDataObat')}}" class="iq-waves-effect"><i
                                    class="ri-home-8-fill"></i><span>Data Obat</span></a>
                        </li>
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>

        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
            <div class="iq-top-navbar header-top-sticky">
                <div class="iq-navbar-custom">
                    <div class="iq-sidebar-logo">
                        <div class="top-logo">
                            <a href="index-2.html" class="logo">
                                <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="">
                                <span>K-MEANS CLUSTERING</span>
                            </a>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="iq-search-bar">
                            <form action="#" class="searchbox">
                                <input type="text" class="text search-input" placeholder="Type here to search...">
                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            </form>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="iq-menu-bt align-self-center">
                            <div class="wrapper-menu">
                                <div class="main-circle"><i class="ri-more-fill"></i></div>
                                <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list">
                                <li class="nav-item iq-full-screen">
                                    <a href="#" class="iq-waves-effect" id="btnFullscreen"><i
                                            class="ri-fullscreen-line"></i></a>
                                </li>
                            </ul>
                        </div>
                        <ul class="navbar-list">
                            <li>
                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                    <img src="{{asset('images/user/1.jpg')}}" class="img-fluid rounded mr-3" alt="user">
                                    <div class="caption">
                                        <h6 class="mb-0 line-height">Hello {{Auth::user()->name}}</h6>
                                        <span class="font-size-12">Available</span>
                                    </div>
                                </a>
                                <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white line-height">Hello {{Auth::user()->name}}</h5>
                                                <span class="text-white font-size-12">Available</span>
                                            </div>
                                            <div class="d-inline-block w-100 text-center p-3">
                                                <a class="bg-primary iq-sign-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" role="button">Sign
                                                    out<i class="ri-login-box-line ml-2"></i></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

            @yield('content')

            <footer class="bg-white iq-footer">
                <div class="container-fluid">
                   <div class="row">
                      <div class="col-lg-6">
                         <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                         </ul>
                      </div>
                      <div class="col-lg-6 text-right">
                         Copyright 2020 <a href="#">Musdalifah A.</a> All Rights Reserved.
                      </div>
                   </div>
                </div>
             </footer>
             <!-- Footer END -->
                </div>
             </div>
             <!-- Wrapper END -->

             <!-- Optional JavaScript -->
             <!-- jQuery first, then Popper.js, then Bootstrap JS -->
             <script src="{{asset('js/jquery.min.js')}}"></script>
             <script src="{{asset('js/popper.min.js')}}"></script>
             <script src="{{asset('js/bootstrap.min.js')}}"></script>
             <!-- Appear JavaScript -->
             <script src="{{asset('js/jquery.appear.js')}}"></script>
             <!-- Countdown JavaScript -->
             <script src="{{asset('js/countdown.min.js')}}"></script>
             <!-- Counterup JavaScript -->
             <script src="{{asset('js/waypoints.min.js')}}"></script>
             <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
             <!-- Wow JavaScript -->
             <script src="{{asset('js/wow.min.js')}}"></script>
             <!-- Apexcharts JavaScript -->
             <script src="{{asset('js/apexcharts.js')}}"></script>
             <!-- Slick JavaScript -->
             <script src="{{asset('js/slick.min.js')}}"></script>
             <!-- Select2 JavaScript -->
             <script src="{{asset('js/select2.min.js')}}"></script>
             <!-- Owl Carousel JavaScript -->
             <script src="{{asset('js/owl.carousel.min.js')}}"></script>
             <!-- Magnific Popup JavaScript -->
             <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
             <!-- Smooth Scrollbar JavaScript -->
             <script src="{{asset('js/smooth-scrollbar.js')}}"></script>
             <!-- lottie JavaScript -->
             <script src="{{asset('js/lottie.js')}}"></script>
             <!-- am core JavaScript -->
             <script src="{{asset('js/core.js')}}"></script>
             <!-- am charts JavaScript -->
             <script src="{{asset('js/charts.js')}}"></script>
             <!-- am animated JavaScript -->
             <script src="{{asset('js/animated.js')}}"></script>
             <!-- am kelly JavaScript -->
             <script src="{{asset('js/kelly.js')}}"></script>
             <!-- Flatpicker Js -->
             <script src="{{asset('js/flatpickr.js')}}"></script>
             <!-- Chart Custom JavaScript -->
             <script src="{{asset('js/chart-custom.js')}}"></script>
             <!-- Custom JavaScript -->
             <script src="{{asset('js/custom.js')}}"></script>
             @yield('javascript')
          </body>

       </html>
