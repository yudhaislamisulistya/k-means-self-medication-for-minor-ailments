

<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 02:50:13 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login Panel - K-MEANS</title>
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
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <h2 class="text-white">K-MEANS</h2>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <p>Aplikasi Pemilihan Obat Secara Swamedikasi Untuk Penyakit Ringan Menggunakan Metode K-Means Clustering Berbasis Web</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Daftar</h1>
                            <p>Silahkan Daftar Untuk Dapat Mengakses Admin Panel</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="name">{{ __('Name') }}</label>

                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="password">{{ __('Password') }}</label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="d-inline-block w-100">
                                    <button type="submit" class="btn btn-primary float-right">Daftar</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Sudah Memiliki Akun? <a href="{{ route('login') }}">Masuk</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
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
      <!-- Chart Custom JavaScript -->
      <script src="{{asset('js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('js/custom.js')}}"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Dec 2020 02:50:17 GMT -->
</html>
