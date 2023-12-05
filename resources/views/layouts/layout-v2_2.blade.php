<!DOCTYPE html>

<html lang="en">

<?php
$baseurl = 'https://omsetku.id/';
?>

<head>

  <title>Omsetku | @yield('title')</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <?php
  $arr_keywords = [
    'aplikasi sales',
    'omsetku',
    'omsetku goodeva',
    'omsetku apps',
    'omsetku sales',
    'sales order',
    'penjualan',
    'automatisasi sales',
    'aktivitas sales',
    'aktivitas penjualan',
    'aplikasi penjualan',
    'omsetku ribuan sales',
    'aplikasi penjualan jaman now',
    'aplikasi jaman now',
  ];
  $meta_keywords = implode(",", $arr_keywords);

  $meta_title = "omsetku";
  $meta_description = "Percepat penjualan dan layanan pelanggan dengan Omnichannel CRM terbaik";
  ?>

  <meta name="description" content="{{ $meta_description }}">
  <meta name="keywords" content="{{ $meta_keywords }}">
  <meta name="author" content="GOODEVA TECHNOLOGY">
  <meta name="google-site-verification" content="dgs_kEmsV7BacRvNxGDSWZ9k87AvyMi4HSMlRLlYPbM" />



  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ $baseurl }}public/assets/img/omsetku-logo-bg-blue.png">

  <link href="{{ $baseurl }}public/assets/img/omsetku-logo-bg-blue.png" rel="icon">

  <link href="{{ $baseurl }}public/assets/img/omsetku-logo-bg-blue.png" rel="apple-touch-icon">


  <!-- slick js -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!----- Google Fonts ----->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- font nunito -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!----- end Google Fonts ----->



  <!-- Vendor CSS Files -->
  <link href="{{ $baseurl }}public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/assets/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ $baseurl }}public/assets/css/main_layout.css?v=1.78" rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-R8YY326R33"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-R8YY326R33');
  </script>



  <!-- =======================================================
  * Template Name: Logis - v1.1.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  {{-- @include ('layouts.css-layout.main') --}}
  @yield('css-before')



  <style>
    div,
    p,

    h1,

    h2,

    h3,

    h4,

    h5,

    h6,

    b,
    a,
    strong {

      font-family: 'Nunito', sans-serif !important;

    }

    .navbar a,
    .navbar a:focus {
      font-family: var(--font-primary);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0px 10px 0px;
      font-size: 21px;
      font-weight: 400;
      color: rgba(255, 255, 255, 0.6);
      white-space: nowrap;
      transition: 0.3s;
    }

    .nav-button-img {
      width: 130px;
    }

    .logo {
      width: 75px;
      max-height: 100px !important;
    }


    .btn-header {

      width: 150px;

      height: 40px;

      border: none;

      color: #0e1d34;

      font-weight: 600px;

      border-radius: 5px;

    }



    .text-about {

      text-align: justify
    }



    .img-about {

      width: 500px;

      margin-top: 40px;

    }

    .sct-blue {

      background: #F9FBFF;

    }



    .btn-navbar {

      width: 227px;
      height: 45px;
      background: #F1953F;
      border-radius: 10px;
      border: none;
      margin-left: 100px;
      margin-top: -15px;

    }


    .text-navbar {

      margin-left: -88px;
      margin-top: -20px;
      font-size: 21px;
      color: #1F3A77;


    }

    .service-details img {
      width: 152px;
      height: 41px;
      /* margin-right: -80px; */
    }

    .btn-coba img {
      width: 129px;
      height: 41px;
      /* margin-right: -80px; */
    }

    .img-who {

      width: 351px;

      height: 364px;

      margin-left: 90px;

    }

    .img-phone {

      width: 380px;

      height: 530px;

    }



    .section-blue {

      background: #EBF1FF;

    }



    .img-clien {

      width: 151px;

      height: 178px;

      margin-left: 240px;

      margin-right: -500px;

    }

    .footer {
      padding: 50px 0 25px !important;
    }

    .footer-describe .footer-logo {

      width: 100px !important;

      height: auto !important;
      margin: 0px 0px 20px;

    }

    .footer .footer-describe p {
      font-size: 17px !important;
      font-family: 'Nunito', sans-serif !important;
    }

    .footer-describe {

      padding: 0px 150px 0px 0px;
    }


    .btn-nav {

      width: 200px;
      height: 40px;
      border: none;
      border-radius: 10px;
      background-color: #F1953F;
    }

    .text-nav {

      font-size: 17px;
      margin-top: 9px;
      color: #1F3A77;

    }

    .footer-info p a i {

      font-size: 20px;
      color: #fff;
      margin: 7px;
    }

    .btn-footer {

      width: 150px;
      margin-top: 10px;

    }

    .header.sticked {
      padding: 10px 0 !important;
    }

    #header div ul {
      margin: 5px 0px !important;
    }

    .back-to-top {
      position: fixed;
      visibility: visible;
      opacity: 1;
      right: 15px;
      bottom: 15px;
      z-index: 996;
      background: #25d366;
      width: 70px;
      height: 70px;
      border-radius: 100%;
      transition: all 0.4s;
    }

    .back-to-top i {
      font-size: 28px;
      color: #fff;
      line-height: 0;
    }

    .back-to-top:hover {
      background: #25d366;
      color: #fff !important;
    }

    .back-to-top.active {
      visibility: visible;
      opacity: 1;
    }

    .datepicker-dropdown {
      padding: 20px !important;
    }

    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 9999;
      overflow: hidden;
      background: #fff;
      display: block;
    }

    #preloader:before {
      content: "";
      position: fixed;
      top: calc(50% - 30px);
      left: calc(50% - 30px);
      border: 6px solid #1977cc;
      border-top-color: #d1e6f9;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      -webkit-animation: animate-preloader 1s linear infinite;
      animation: animate-preloader 1s linear infinite;
    }

    .padding-nav-desk {
      padding: 0px 4vw;
    }

    .px-vw1 {
      padding: 0vw 5vw;
    }

    .pr-vw1 {
      padding-right: 1vw;
    }

    .pr-vw2 {
      padding-right: 2vw;
    }

    .pr-vw3 {
      padding-right: 3vw;
    }

    .pr-vw4 {
      padding-right: 5vw;
    }

    .minh-vh1 {
      min-height: 1vh;
    }

    .height-prec1 {
      height: 100%;
    }

    @media screen and (min-width: 1400px) and (max-width: 1470px) {

      .navbar a,
      .navbar a:focus {
        padding: 10px 0px 10px 0px !important;
      }

    }


    @media screen and (max-width: 1515px) {}



    /* Zoom 150% */
    @media screen and (min-width: 1000px) and (max-width: 1098px) {}



    /* Zoom 125% */
    @media screen and (min-width: 1098px) and (max-width: 1300px) {

      .header {
        transition: all 0.5s;
        z-index: 997;
        padding: 30px 0;
      }

      _::-webkit-full-page-media,
      _:future,
      :root .header {
        transition: all 0.5s;
        z-index: 997;
        padding: 30px 0;
      }

      .logo {
        width: 55px;
        max-height: 100px !important;
      }

      .navbar a,
      .navbar a:focus {
        font-family: var(--font-primary);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0px 10px 0px;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.6);
        white-space: nowrap;
        transition: 0.3s;
        font-size: 17px;
      }

      .btn-navbar {

        width: 200px;
        height: 50px;
        margin-left: 50px;
      }

      .service-details img {
        width: 152px;
        height: 41px;
        /* margin-right: -49px !important; */
      }

      .btn-coba img {
        width: 129px;
        height: 41px;
        margin-right: -36px;
      }

      .text-navbar {
        font-size: 17px;
        margin-left: -45px;
        margin-bottom: -4px;
        margin-top: -24px;
        font-weight: 700;
      }
    }


    @media (max-width: 1249px) {

      .navbar ul {
        display: flex;
        list-style: none;
        align-items: center;
      }
    }

    /* Zoom 110% */
    @media screen and (min-width: 1300px) and (max-width: 1410px) {}

    /* Zoom 90% */
    @media screen and (min-width: 1556px) {}


    /* tablet mode 1 */
    @media screen and (min-width: 770px) and (max-width: 992px) {

      .fs-md-1 {

        font-size: 35px;
      }

      .omsetku-icon img {
        width: 35% !important;
      }

      .mobile-show {
        display: block !important;
      }

      .desktop-show {
        display: none !important;
      }

      .logo {
        width: 55px;
        max-height: 100px !important;
      }

      .navbar ul {
        position: absolute;
        inset: 0;
        padding: 50px 0 10px 0;
        margin: 0;
        background: rgba(14, 29, 52, 0.9);
        overflow-y: auto;
        transition: 0.3s;
        z-index: 9998;
        margin: 0;
        padding: 0;
      }

      .navbar a,
      .navbar a:focus {
        font-family: var(--font-primary);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0 10px 30px;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.6);
        white-space: nowrap;
        transition: 0.3s;
        font-size: 19px;
      }

      .footer .footer-contact p {
        line-height: 20px;
        opacity: 70%;
        text-align: center;
        font-size: 11px;
      }

      .footer-describe .footer-logo {
        width: 75px !important;
      }

      .footer .footer-describe p {
        text-align: justify;
      }

      .footer-describe {
        padding: 0px 15px;
      }

      .popup {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
      }

      .popup-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 95%;
        border-radius: 10px;
      }

      .gambar {
        width: 16%;
      }
    }


    /* tablet mode 2 */
    @media screen and (min-width: 499px) and (max-width: 769px) {

      .fs-md-1 {

        font-size: 35px;
      }

      .omsetku-icon img {
        width: 35% !important;
      }

      _::-webkit-full-page-media,
      _:future,
      :root .header.sticked {
        padding: 7px 0 !important;
      }

      .header.sticked {
        padding: 7px 0 !important;
      }

      _::-webkit-full-page-media,
      _:future,
      :root #header div ul {
        margin: 5px 0px !important;
      }

      #header div ul {
        margin: 5px 0px !important;
      }

      .popup {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
      }

      .popup-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 95%;
        border-radius: 10px;
      }
    }

    @media screen and (max-width: 475px) {
      .header {
        padding: 10px 0;
        min-height: 5.5vh !important;
        height: 11.5vh !important;
      }

      .popup {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
      }
    }


    /* phone mode 1 */
    @media screen and (max-width: 426px) {

      .footer-info p a i {
        font-size: 14px;
      }

      .text-nav {

        font-size: 15px !important;
      }


      .footer .footer-info p {
        font-size: 16 px;
      }

      .footer-describe .footer-logo {
        width: 75px !important;
      }

      .footer-describe {
        padding: 0px 15px;
      }
    }


    /* phone mode 2 */
    @media screen and (max-width: 376px) {}


    @media screen and (max-width: 475px) {
      .mobile-show {
        display: block !important;
      }

      .desktop-show {
        display: none !important;
      }

      .header {
        transition: all 0.5s;
        z-index: 997;
      }

      .header.sticked {
        background: rgba(14, 29, 52, 0.9) !important;
        padding: 10px 0 !important;
      }

      .popup {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
      }

      .popup-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 95%;
        border-radius: 10px;
      }

      button {
        padding: 10px 20px;
      }

      .gambar {
        width: 20%;
      }

    }


    /* phone mode 3 */
    @media screen and (max-width: 321px) {

      .footer-info p a i {
        font-size: 14px;
      }

      .text-nav {

        font-size: 15px !important;
      }


      .btn-nav {
        width: 162px;
      }


      .footer .footer-info p {
        font-size: 11px;
      }

      .footer .footer-contact p {
        line-height: 20px;
      }

      .footer-describe {
        padding: 0px 15px;
      }
    }

    @media screen and (max-width: 395px) {

      .text-nav {

        font-size: 15px !important;
      }

      .btn-nav {

        width: 200px !important;
      }

    }

    @-webkit-keyframes animate-preloader {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes animate-preloader {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>



  @yield('css-after')



</head>



<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top desktop-show">

    <div class="container d-flex align-items-center justify-content-between">


      <ul class="">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">

          <img class="logo" src="{{ $baseurl }}public/assets/img/logo omsetku rev.png" alt="">

        </a>
      </ul>

      <nav id="navbar" class="navbar">

        <ul class="list-menu">
          <li name-class="heros">
            <a href="{{url ('mengapa-omsetku')}}" class="heros">Mengapa Omsetku</a>
          </li>
          <li name-class="features" class="px-vw1">
            <a href="{{url ('partnership')}}" class="features">Partnership</a>
          </li>
          <li name-class="features" class="pr-vw4">
            <a href="{{url ('harga')}}" class="features">Harga</a>
          </li>
          <li name-class="btn-banner" class="pr-vw1">
            <a href="{{url ('contact')}}" class="service-details">
              <img src="{{ $baseurl }}/public/assets/img/{{ $banner['btn_banner'] }}" alt="">
            </a>
          </li>
          <li name-class="btn-coba">
            <a href="{{url ('login')}}" class="btn-coba nav-button-img">
              <img src="{{ $baseurl }}/public/assets/img/{{ $banner['btn_coba'] }}" alt="">
            </a>
          </li>
        </ul>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!--Second button-->


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top mobile-show">

    <div class="container">

      <div class="row">

        <div class="col-9 col-sm-9 col-md-10">
          <a href="{{ url('/') }}">
            <img src="{{ asset('public/assets/img/logo omsetku rev.png') }}" alt="" class="gambar">
          </a>
        </div>

        <div class="col-3 col-sm-3 col-md-2 d-flex align-items-center justify-content-center">
          <div onclick="openPopup()">

            <img src="{{asset ('public/asset-why/hamburger.svg')}}" class="" style="width: 225%;">

          </div>
        </div>
      </div>

      <div id="popup" class="popup">
        <div class="popup-content">
          <div class="row d-flex ">
            <div class="col-8 omsetku-icon">
              <img src="{{asset ('public/asset-why/logo-omsetku-biru.svg')}}" style="width: 70%;">
            </div>

            <div class="col-4 d-flex" style="justify-content: flex-end; align-items: center;">
              <i class="fa-solid fa-xmark fs-md-1" onclick="closePopup()" style="color: #f25058;"></i>
            </div>

          </div>
          <div class="mt-5">
            <div class="mb-4" style="font-size: 18px;">
              <a href="{{url('mengapa-omsetku')}}" style="color: #000;">Mengapa Omsetku</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="{{url('partnership')}}" style="color: #000;">Partnership</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="{{url('harga')}}" style="color: #000;">Harga</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="{{url('contact')}}" style="color: #000;">Hubungi Kami</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="{{url('login')}}" style="color: #000;">Coba Gratis</a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </header>
  <!-- End Header -->


  <!----- Main content ----->

  <main id="main">

    @yield('konten')

  </main>

  <!----- End #main ----->


  <!------- footer desktop ------->
  <footer id="footer" class="footer desktop-show">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 col-xl-6">
          <div class="row">
            <div class="col-lg-12 footer-describe">
              <a href="{{ url('/') }}">
                <img src="{{ asset('public/assets/img/logo omsetku rev.png') }}" alt="" class="footer-logo">
              </a>
              <p>Sales Software berbasis aplikasi yang membuat aktivitas penjualan jadi lebih mudah semudah pesan ojek online.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 footer-info">
          <div class="row">
            <div class="col-lg-6">
              <h4 class="text-white">Call us</h4>
              <p>
                <i class="fa fa-envelope" aria-hidden="true" style="margin-right: 10px;"></i>
                Sales@goodeva.id
              </p>
              <p>
                <i class="fa fa-phone" aria-hidden="true" style="margin-right: 10px;"></i>
                (021) 8273-8692
              </p>
            </div>
            <div class="col-lg-6">
              <h4 class="text-white">Follow Us On</h4>
              <p>
                <a href="https://www.instagram.com/omsetku/" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/Omsetku-100543845527563/" target="_blank"><i class="bi bi-facebook"></i></a>
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <a href="https://play.google.com/store/search?q=omsetku&c=apps" target="_blank">
                <img src="{{ asset('public/assets/img/googleplay.png') }}" alt="" class="btn-footer">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!------- end footer desktop ------->


  <!------- footer mobile ------->
  <footer id="footer" class="footer mobile-show">
    <div class="container">
      <div class="row gy-4">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="row">
            <div class="col-lg-12 footer-describe">
              <a href="{{ url('/') }}">
                <img src="{{ asset('public/assets/img/logo omsetku rev.png') }}" alt="" class="footer-logo">
              </a>
              <p>Sales Software berbasis aplikasi yang membuat aktivitas penjualan jadi lebih mudah semudah pesan ojek online.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 footer-info">
          <div class="row">
            <div class="col-6 col-sm-6 col-md-6">
              <h4 class="text-white">Call us</h4>
              <p>
                <i class="fa fa-envelope" aria-hidden="true" style="margin-right: 10px;"></i>
                Sales@goodeva.id
              </p>
              <p>
                <i class="fa fa-phone" aria-hidden="true" style="margin-right: 10px;"></i>
                (021) 8273-8692
              </p>
            </div>
            <div class="row">
              <div class="col-6 col-sm-6 col-md-6">
                <h4 class="text-white">Follow Us On</h4>
                <p>
                  <a href="https://www.instagram.com/omsetku/" target="_blank"><i class="bi bi-instagram" style="font-size: 25px;"></i></a>
                  <a href="https://www.facebook.com/Omsetku-100543845527563/" target="_blank"><i class="bi bi-facebook" style="font-size: 25px;"></i></a>
                </p>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-lg-6">
                <a href="https://play.google.com/store/search?q=omsetku&c=apps" target="_blank">
                  <img src="{{ asset('public/assets/img/googleplay.png') }}" alt="" class="btn-footer">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

  </footer>
  <!------- end footer mobile ------->

  <!-- ======= Footer ======= -->

  <!-- Chat Whatsapp -->
  <a href="//wa.me/+628818850663" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>



  @yield('script-before')

  <!-- cdn JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('public/assets/js/main.js') }}"></script>
  
  @yield('script-after')


  <script>
    $(document).ready(function() {

      // $('.heros').addClass('active');
    });

    var sections = document.querySelectorAll("section.desktop-show");

    var x = window.matchMedia("(max-width: 992px)");
    if (x.matches) {

      var sections = document.querySelectorAll("section.mobile-show");
      // console.log(sections);

      // alert('max-width: 920px');

      $('.list-menu').on('click', 'li', function() {

        $('li a').removeClass('active');

        var attr_class = $(this).attr('name-class');

        $('.' + attr_class).addClass('active');

        var get_section = document.querySelector("section#" + attr_class + ".mobile-show");

        window.scrollTo(0, get_section.offsetTop);
      })
    }

    const navLi = document.querySelectorAll("nav ul li a");

    // console.log(navLi);
    // console.log(sections);

    const selectHeader = document.querySelector('#header.mobile-show');
    if (selectHeader) {
      document.addEventListener('scroll', () => {
        window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
      });
    }
  </script>


  <script>
    $('.testimoni-h').slick({

      dots: true,
      infinite: true,
      autoplay: true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
    });


    $('.testimoni-h-res').slick({

      dots: true,
      infinite: true,
      autoplay: true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,

    });
  </script>

  <script>
    function openPopup() {
      var popup = document.getElementById('popup');
      popup.style.display = 'block';
    }

    function closePopup() {
      var popup = document.getElementById('popup');
      popup.style.display = 'none';
    }
  </script>
</body>

</html>