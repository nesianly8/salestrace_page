@inject('request', 'Illuminate\Http\Request')

<!doctype html>

<?php
$baseurl = 'https://omsetku.id/';
?>

{{-- @php
    $tipe_page = '';
    $check_company = Helper::listCompany();
@endphp --}}

<html lang="{{ config('app.locale') }}" class="no-focus">


<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">



    <title>Dashboard Omsetku - @yield('title')</title>

    {{-- @if (Session::has('download.in.the.next.request')) --}}
    {{-- <meta http-equiv="refresh" content="1;url={{ Session::get('download.in.the.next.request') }}"> --}}
    {{-- @endif --}}
    {{-- @if (Session::has('download.in.the.next.request_export_2')) --}}
    {{-- <meta http-equiv="refresh" content="1;url={{ Session::get('download.in.the.next.request_export_2') }}"> --}}
    {{-- @endif --}}

    {{-- @if (Session::has('export1')) --}}
    {{-- <meta http-equiv="refresh" content="1;url={{ Session::get('export1') }}"> --}}
    {{-- <meta http-equiv="refresh" content="1;url={{ Session::get('export2') }}"> --}}

    {{-- @php --}}
    {{-- Session::flash('download.in.the.next.request_export_2', $path_2); --}}
    {{-- @endphp --}}

    {{-- @endif --}}


    <meta name="description" content="Omsetku - Goodeva Smart Sales">

    <meta name="author" content="Goodeva">

    <meta name="keywords" content="Omsetku - Goodeva Smart Sales">

    <meta name="robots" content="noindex, nofollow">



    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Icons -->

    <link rel="shortcut icon" href="{{ $baseurl }}public/assets/img/logo omsetku rev.png">

    <link rel="icon" sizes="192x192" type="image/png"
        href="{{ $baseurl }}public/assets/img/logo omsetku rev.png">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ $baseurl }}public/assets/img/logo omsetku rev.png">



    <!-- Fonts and Styles -->

    @yield('css_before')

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700"> --}}

    <noscript>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    </noscript>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" id="css-main" href="{{ $baseurl }}public/backend-asset/css/codebase.css">


    <link href="{{ $baseurl }}public/backend-asset/backend-asset/sweetalert2/dist/sweetalert2.min.css"
        rel="stylesheet" />

    <link href="{{ $baseurl }}public/backend-asset/select2js/css/select2.min.css " rel="stylesheet" />
    <link href="{{ $baseurl }}public/backend-asset/chosen-js/chosen.min.css" rel="stylesheet" />
    <link href="{{ $baseurl }}public/backend-asset/selectbs2/select2-bootstrap.min.css" rel="stylesheet" />
    <link href="{{ $baseurl }}public/backend-asset/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css"
        rel="stylesheet">
    <link href="{{ $baseurl }}public/backend-asset/fonts/themify/css/themify-icons.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/backend-asset/datepicker3/datepicker3.css" rel="stylesheet">
    <link href="{{ $baseurl }}public/backend-asset/css/inline-style.css" rel="stylesheet">

    <!-- cdn css fontawesome -->

    <!-- end cdn css fontawesome -->



    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->

    <!-- <link rel="stylesheet" id="css-theme" href="{{ $baseurl }}/css/themes/corporate.css"> -->

    <style>
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        div,
        a,
        strong,
        li,
        ol {
            /* font-family: 'Mulish', sans-serif !important; */
            font-family: 'Inter', sans-serif !important;
        }

        .status-expired {
            background: #EF64641A !important;
            color: #EF6464 !important;
            font-size: 13px;
            padding: 7px 20px;
            border-radius: 5px;
        }

        .status-delivered {
            background: #4b7de81a !important;
            color: #2b84e9 !important;
            font-size: 13px;
            padding: 7px 20px;
            border-radius: 5px;
        }

        .status-green {
            background: #5fde961a !important;
            color: #2bc14a !important;
            font-size: 13px;
            padding: 7px 20px;
            border-radius: 5px;
        }

        .status-blue-young {
            background: #4e9bda21 !important;
            color: #3f9ce8 !important;
            font-size: 13px;
            padding: 7px 17px;
            border-radius: 5px;
        }

        .status-gray {
            background: #A7A7A71F !important;
            color: #A7A7A7 !important;
            font-size: 13px;
            padding: 7px 29px;
            border-radius: 5px;
        }

        #sidebar {
            background-color: #1E3168 !important;
        }

        .sidebar-icon {
            width: 25px;
        }

        .w-20 {
            width: 20% !important;
        }

        .w-30 {
            width: 30% !important;
        }

        .nav-main a {
            color: #FFFFFF;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 5px 10px;
            clear: both;
            font-weight: 400;
            color: #1D2F5F;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }

        .nav-main li {
            border-bottom: 0px solid #f7f8f9;
            padding: 5px 1px;
            padding-bottom: 0px;
        }

        .nav-main a:hover,
        .nav-main a:focus,
        .nav-main a.active {
            color: #ffff;
            background: #ffffff1c;
            border-left: 5px solid #FFB14A;
            transition: .25s ease-in-out;
        }

        .nav-main .submenu a:hover,
        .nav-main .submenu a:focus,
        .nav-main .submenu a.active {
            color: #ffff;
            background: #ffffff1c;
            border-left: 0px !important;
            transition: .25s ease-in-out;
            /* padding-left: 40px; */
        }

        /* .nav-main .submenu li:hover */
        /* .nav-main .submenu li:focus */
        /* .nav-main .submenu li.active { */
        /* width: 125%; */
        /* margin-left: -40px; */
        /* } */

        .text-logo {

            font-family: 'Mulish';
            font-size: 24px;
            font-weight: 800;
            padding: 10px 10px 10px 10px;
        }

        .p-6 {
            padding: 3rem !important;
        }

        .nav-main a {
            padding: 9px 16px 9px 30px;
        }

        .btn-primary-omsetku {
            background: #1E3168;
            color: #ffffff;
        }

        .btn-primary-omsetku:hover {
            opacity: .8;
        }

        .nav-main a>img {
            position: absolute;
            top: 49%;
            right: auto;
            left: 10px;
            transform: translateX(0) translateY(-50%);
            width: 20px;
            height: 20px;
        }

        .sidebar-mini-hide,
        .sidebar-mini-show {
            padding-left: 7%;
        }

        .logo-web {
            width: 130px;
        }

        .name-account-info {
            font-size: 18px;
            font-weight: 400;
            line-height: 25px;
            letter-spacing: 0em;
            text-align: left;
            margin-left: -10px;
        }

        .role-account-info {
            font-family: Nunito;
            font-size: 16px;
            font-weight: 300;
            line-height: 25px;
            letter-spacing: 0em;
            color: #C7C7C7;
            text-align: left;
            margin-left: -10px;
        }

        .circle-ava {
            /* background: #d9d9d900; */
            color: #ffffff00;
            border-radius: 50%;
            width: 64px;
            height: 64px;
            overflow: hidden;
            display: flex;
            align-items:baseline;
            justify-content: center;
            border: 1px solid #ffac2f;
            background: whitesmoke;
            font-size: 30px;
            text-align: center;
            line-height: 55px;
            margin-left: -15px;
        }

        .circle-ava span {
            display: inline-block;
            vertical-align: middle;
            line-height: normal;
        }

        .content-header-section .navicon {
            width: 25px;
            margin-top: -5px;
        }

        .content-header-section .logotext {
            margin-left: 10px;
            width: 100px;
        }

        .btn-primary-dark {
            background: #1E3168;
            color: #ffffff;
        }

        .pt-5 {
            padding-top: 2.5rem !important;
        }

        .txt-blue-primary,
        .blue-primary {
            color: #1E3168;
        }

        .txt-blue-secondary,
        .blue-secondary {
            color: #7BABF1;
        }

        .txt-red-primary,
        .red-primary {
            color: #FF2D55;
        }

        .bg-blue-secondary-progress {
            background: #588EBE !important;
        }

        .bg-red-primary-progress {
            background: #FF2D55 !important;
        }

        .bg-blue-primary {
            background: #1E3168 !important;
            color: #ffffff
        }

        .bg-abu-dropdown {
            background: #F2F1F1;
            width: 411px;
            padding: 20px 20px 20px 20px;
            /* height: fit-content; */
        }

        .txt-green,
        .green {
            color: #34B768;
        }

        .txt-red {
            color: #FF0000;
        }

        .txt-yellow-primary {
            color: #FFB14A;
        }

        .txt-black {
            color: #121212;
        }

        .btn-primary-dark:hover {
            opacity: .8;
        }

        .modal-header {
            padding-top: 10px;
            padding-bottom: 0px;
        }

        .toast-success,
        .toast-success .toast-header {
            background: #59CB86;
            color: #ffffff;
        }

        .toast-failed,
        .toast-failed .toast-header {
            background: #FF2D55;
            color: #ffffff;
        }

        .toast-notif-icon i {
            font-size: 60px;
            color: #ffffff;
        }

        .toast .toast-header {
            border-bottom: none !important;
        }

        .toast .toast-header button span {
            color: #ffffff !important;
        }

        .toast .toast-notif-title {
            font-size: 18px;
            font-weight: 700;
            color: #ffffff
        }

        .toast .toast-notif-desc {
            font-size: 13px;
            font-weight: 400;
            color: #ffffff
        }

        .font-w800 {
            font-weight: 800 !important;
        }

        .font-w700 {
            font-weight: 700 !important;
        }

        .toast .toast-body {
            padding: 0 !important;
        }

        .toast .toast-header {
            padding: .25rem 0 !important;
        }

        .alert-popup .icon-img-alert {
            width: 100%;
        }

        .alert-popup .modal-header {
            /*padding: 50px 50px 20px;*/
            padding: 20px 80px 5px;
        }

        .alert-popup .modal-body {
            padding-top: 0 !important;
        }

        .alert-popup .modal-title {
            text-align: center;
            font-size: 20px;
            font-weight: 700;
            line-height: 33px;
            letter-spacing: 0em;
            color: #1E3168;
        }

        .alert-popup .modal-footer {
            justify-content: center;
            padding: 0 28px 28px;
            border-top: none;
        }

        .alert-popup .btn-outline-done {
            width: 100%;
        }

        .alert-popup .modal-desc {
            text-align: center;
            font-size: 15px;
            font-weight: 400;
            line-height: 25px;
            letter-spacing: 0em;
            color: #37474F;
            margin-bottom: 0;
        }

        .form-popup-sm .modal-header {
            padding: 15px;
            border-top-right-radius: 0px;
            border-top-left-radius: 0px;
        }

        .form-popup-sm .modal-footer {
            border-top: none;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 1100px;
                margin: 1.75rem auto;
            }

            .alert-popup .modal-sm {
                width: 340px;
                max-width: 350px;
            }

            .form-popup-sm .modal-sm {
                width: 455px;
                max-width: 475px;
            }

        }

        .alert-popup .confirm-button {
            display: inherit;
        }

        .btn-outline-done {
            border: 1px solid #1E3168;
            background: #ffffff;
            color: #1E3168;
        }

        .btn-outline-done:hover {
            border: 1px solid #1E3168;
            background: #1E3168;
            color: #ffffff;
        }

        .welcome-popup .modal-header {
            border-bottom: 1px solid #707070;
        }

        .welcome-popup .modal-header,
        .welcome-popup .modal-header .close.pop-up-welcome,
        .form-popup-sm .modal-header .close.pop-up-form {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-popup-sm .modal-header .close.pop-up-form img {
            width: 24px;
        }

        .modal-data-analytic .modal-header {
            display: block !important;
        }

        .modal-data-analytic .modal-content {
            background: #DADADA
        }

        .modal-data-analytic .card-header-content {
            background: #ffffff !important;
            padding: 10px;
        }

        .modal-data-analytic .card-header-content .desc-data-analytic label {
            font-weight: 800;
            color: #000000;
        }

        .modal-data-analytic .card-header-content .desc-data-analytic {
            font-size: 16px;
        }

        .modal-data-analytic .dataTableModal tr td,
        .modal-data-analytic .dataTableModal tr th {
            font-weight: 700 !important;
        }

        .modal-data-analytic.modal-data-analytic-target .accordion-header {
            background: #F7F7F7;
            color: #1E3168;
            border-bottom: 1px solid #C7C7C7 !important;
            font-size: 16px;
            font-weight: 700 !important;
        }

        .modal-data-analytic.modal-data-analytic-target .accordion-header div div {
            padding: 10px;
        }

        .modal-data-analytic.modal-data-analytic-target .dataTableModal tbody tr td {
            background: #FBFBFB !important;
        }

        .modal-data-analytic.modal-data-analytic-target .dataTableModal thead tr th {
            background: #f7f7f7 !important;
        }

        .bg-third-gray {
            background: #F7F7F7 !important
        }

        .bg-alt-danger {
            color: #FF0000;
            background: #FFBECA;
        }

        .bg-alt-success {
            color: #7BABF1;
            background: #EBF2FD;
        }

        .bg-alt-go {
            color: #019557;
            background: #C2E9D2;
        }

        .bg-go {
            color: #ffffff;
            background: #34B768;
        }

        .txt-go {
            color: #34B768;

        }

        .bg-pref {
            background: #F7F7F7;
            height: 50px;
        }

        .badge {
            padding: 5px 20px;
        }

        .bg-alt-doubt {
            color: #707070;
            background: #e2e2e2;
        }

        .bg-grey-secondary {
            background: #d9d9d9;
            border: 1px solid #ADADAD;
        }

        .txt-grey-secondary {
            color: #6A707E
        }

        .btn-back-page {
            color: #FF2D55;
            font-weight: bold;
        }

        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }

        .txt-hidden {
            display: none;
        }

        .bg-transparent {
            background: transparent !important;
        }

        .h-100 {
            height: 100%;
        }

        .welcome-popup .modal-header .modal-title {
            font-weight: 700;
        }

        .myText {
            cursor: pointer;
        }

        .myText.active {
            background: #F9F9FB;
            border-width: 0.5px 0px;
            border-style: solid;
            border-color: #DADADA;
            width: 405px;
            height: 75px;
            margin: auto;
        }


        .checkIcon {
            display: block;
            width: 10px;
            height: 10px;
        }

        .myText.active+.checkIcon {
            display: inline-block;

        }

        .welcome-popup .modal-header .close.pop-up-welcome,
        .form-popup-sm .modal-header .close.pop-up-form {
            opacity: 1;
        }

        .close.pop-up-welcome img {
            width: 25px;
        }

        .welcome-popup .content-pop-up .title-pop-up h1 {
            margin: 20px 0px 10px;
        }

        .welcome-popup .content-pop-up p,
        .pop-up-card-list .card .card-body .card-title {
            margin: 0px;
        }

        .welcome-popup .content-pop-up .title-pop-up hr {
            width: 100%;
            border: 1px solid #707070;
        }

        .pop-up-card-list {
            margin: 10px 0px;
        }

        .pop-up-card-list .card .card-body {
            padding: 5px;
            border: 1px solid #707070;
            border-radius: 5px;
        }

        .pop-up-card-list .card .card-body img {
            width: 75%;
        }

        .pop-up-card-list .card .card-body .card-title {
            font-size: 15px;
        }

        .nav-main li.open>ul {
            background-color: #ffffff1c;
        }

        .nav-main li.open>a.nav-submenu {
            color: #fefefe;
        }

        .nav-main ul a {
            color: rgb(254 254 254);
        }

        .modal {
            z-index: 9999;
        }

        .table thead tr th {
            font-weight: 800 !important;
        }

        .round-image {
            width: 70px;
            /* height: 50px; */
            /* border-radius: 50%; */
            overflow: hidden;
            background-color: #0000ff00;
            display: inline-block;
            vertical-align: middle;
        }

        .round-image-2 {
            width: 70px;
            /* height: 73px; */
            /* border-radius: 50%; */
            overflow: hidden;
            background-color: #0000ff00;
            display: inline-block;
            vertical-align: middle;
        }

        .text-grays {
            color: #6A707E !important;
        }



        .alert.alert-server {
            background: #71D875;
            color: black;
            padding-left: 7%;
            margin-bottom: 0;
            border-radius: 0;
        }

        .btn-primary-not {
            background: #626262;
            color: #ffffff;
        }

        .color-gray {
            color: #9D9D9D !important;
        }

        .label-forms {
            color: #9D9D9D !important;
            font-size: 15px;
            font-weight: 700;
            margin-bottom: 0px;
        }

        .scrollable-menu {
            height: 200px;
            max-height: 200px;
            overflow-x: hidden;
        }


        #page-container.page-header-fixed #main-container {
            padding-top: 87px !important;
        }

        .bg-1E3168 {
            background: #1E3168 !important;
        }
    </style>

    @yield('css_after')

    <!-- Scripts -->

    <script>
        // window.Laravel = {
        // !!json_encode(['csrfToken' => csrf_token(), ]) !!
        // };
    </script>


</head>

{{-- @if (\Session::has('login')) --}}
{{-- @if (Session::get('login') == true) --}}

<body>
    <!-- <div id="page-loader" class="show bg-gd-dusk"></div> -->
    {{-- @endif --}}
    {{-- @else --}}

    <body>
        {{-- @endif --}}


        <!-- Page Container -->

        <!--

    Available classes for #page-container:

        GENERIC
            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())



        SIDEBAR & SIDE OVERLAY



            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)

            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)

            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)

            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)

            'sidebar-inverse'                           Dark themed sidebar



            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)

            'side-overlay-o'                            Visible Side Overlay by default



            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens



            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)



        HEADER



            ''                                          Static Header if no class is added

            'page-header-fixed'                         Fixed Header



        HEADER STYLE



            ''                                          Classic Header style if no class is added

            'page-header-modern'                        Modern Header style

            'page-header-inverse'                       Dark themed Header (works only with classic Header style)

            'page-header-glass'                         Light themed Header with transparency by default

                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)

            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default

                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)



        MAIN CONTENT LAYOUT



            ''                                          Full width Main Content if no class is added

            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)

            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

        -->

        <div id="page-container"
            class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-inverse main-content-boxed side-trans-enabled">

            <!-- Side Overlay-->

            <aside id="side-overlay">

                <!-- Side Header -->

                <div class="content-header content-header-fullrow">

                    <div class="content-header-section align-parent">

                        <!-- Close Side Overlay -->

                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                        <button type="button" class="btn btn-circle btn-side-header align-v-r" data-toggle="layout"
                            data-action="side_overlay_close">

                            <i class="fa fa-times text-danger"></i>

                        </button>

                        <!-- END Close Side Overlay -->



                        <!-- User Info -->

                        <div class="content-header-item">

                            <a class="img-link mr-5" href="javascript:void(0)">

                                <img class="img-avatar img-avatar32"
                                    src="{{ $baseurl }}public/backend-asset/media/avatars/avatar15.jpg"
                                    alt="">

                            </a>

                            <!-- <a class="align-middle link-effect text-primary-dark font-w600" href="javascript:void(0)">{{-- Auth::user()->name --}}</a> -->
                            <a class="align-middle link-effect text-primary-dark font-w600"
                                href="javascript:void(0)">Admin test</a>

                        </div>

                        <!-- END User Info -->

                    </div>

                </div>

                <!-- END Side Header -->



                <!-- Side Content -->

                <div class="content-side">


                </div>

                <!-- END Side Content -->

            </aside>

            <!-- END Side Overlay -->



            <!-- Sidebar -->

            <!--

                Helper classes



                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode

                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode

                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes



                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode

                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode

                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)

                -->

            <nav id="sidebar">

                <!-- Sidebar Content -->

                <div class="sidebar-content">

                    <!-- Side Header -->

                    <div class="content-header content-header-fullrow px-15">

                        <!-- Mini Mode -->

                        <div class="content-header-section sidebar-mini-visible-b">

                            <!-- Logo -->

                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">

                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>

                            </span>

                            <!-- END Logo -->

                        </div>

                        <!-- END Mini Mode -->



                        <!-- Normal Mode -->

                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">

                            <!-- Close Sidebar, Visible only on mobile screens -->

                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                            <button type="button" class="btn btn-circle btn-side-header d-lg-none align-v-r"
                                data-toggle="layout" data-action="sidebar_close">

                                <i class="fa fa-times text-danger"></i>

                            </button>

                            <!-- END Close Sidebar -->



                            <!-- Logo -->

                            <div class="content-header-item">

                                <a class="font-w700" href="{{ url('/') }}">

                                    {{-- <i class="si si-fire text-primary"></i> --}}

                                    <!-- <img src="{{URL::asset(' public/backend-asset/img/logo-goodeva upd.png') }}" class="img-responsive" style="width: 85px;"> -->
                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/omsetku-salestrace-logo.svg"
                                        class="img-responsive logo-web">
                                    {{-- <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span> --}}

                                </a>

                            </div>

                            <!-- END Logo -->

                        </div>

                        <!-- END Normal Mode -->

                    </div>

                    <!-- END Side Header -->



                    <!-- Side User -->

                    <div class="content-side content-side-full content-side-user px-10 align-parent">

                        <!-- Visible only in mini mode -->

                        <div class="sidebar-mini-visible-b align-v animated fadeIn">

                            <img class="img-avatar img-avatar32"
                                src="{{ $baseurl }}public/backend-asset/media/avatars/avatar15.jpg"
                                alt="">

                        </div>

                        <!-- END Visible only in mini mode -->



                        <!-- Visible only in normal mode -->

                        <div class="sidebar-mini-hidden-b {{-- text-center --}}">

                            <div class="row pl-4">

                                <div class="col-4 ">

                                    <a class="img-link" href="javascript:void(0)">
                                        <div class="circle-ava">
                                           {{--  @php
                                                $avaName = '';
                                                $showName = '';
                                                if (Auth::check()) {
                                                    $pecah = explode(' ', Auth::user()->name);
                                                    $avaName = isset($pecah[1]) ? substr($pecah[0], 0, 1) . substr($pecah[1], 0, 1) : substr($pecah[0], 0, 1);
                                                    $showName = isset($pecah[1]) ? $pecah[0] . ' ' . $pecah[1] : $pecah[0];
                                                }
                                            @endphp --}}
                                            {{-- <span>{{ strtoupper($avaName) }}</span> --}}
                                            <img src="{{-- {{ Helper::showProfile() }} --}}"alt="" srcset=""
                                                class="round-image-2 mr-40">
                                        </div>
                                        <img class="img-avatar" src="{{ $baseurl }}public/backend-asset/media/avatars/avatar15.jpg" alt="">

                                    </a>

                                </div>

                                <div class="col-8 pl-4">

                                    <ul class="list-inline mt-10">

                                        <li class="list-inline-item">
                                           {{--  @if (Auth::check()) --}}
                                                <h4 class="name-account-info mb-0 font-size-md">
                                                  {{--   @php
                                                        $shownamaAuth = Helper::showUserData('name');
                                                    @endphp --}}
                                                    {{-- {{ strlen($shownamaAuth) >= 15 ? substr($shownamaAuth, 0, 9) . '...' : $shownamaAuth }} --}}
                                                </h4>
                                                <h4 class="role-account-info">{{-- {{ Helper::roleAccess() }} --}}</h4>
                                          {{--   @endif --}}
                                            <br>
                                            <!-- {{-- <a class="link-effect {{-- text-dual-primary-dark  font-size-xs --}} font-w600 text-uppercase warna-blue" href="javascript:void(0)" style="font-size:11px;">{{-- Auth::user()->name --}}</a>--}} -->

                                            {{-- @else --}}
                                            {{-- @endif --}}
                                        </li>

                                        {{-- <li class="list-inline-item"> --}}
                                        {{-- <!-- Layout API, functionality initialized in Template._uiApiLayout() --> --}}
                                        {{-- <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)"> --}}
                                        {{-- <i class="si si-drop"></i> --}}
                                        {{-- </a> --}}
                                        {{-- </li> --}}

                                        <!-- {{-- <li class="list-inline-item"> -->
                    <!-- <a class="link-effect text-dual-primary-dark" href="{{url('logout')}}"> -->
                    <!-- <i class="si si-logout"></i> -->
                    <!-- </a> -->
                    <!-- </li> --}} -->

                                    </ul>

                                </div>

                            </div>


                        </div>

                        <!-- END Visible only in normal mode -->

                    </div>

                    <!-- END Side User -->



                    <!-- Side Navigation -->

                    <div class="content-side content-side-full">

                        <ul class="nav-main">

                            <!-- menu dashboard -->
                            <li
                                class="{{ in_array($request->segment(1), ['market-insight', 'dashboard-analytics', 'dashboard-analytics-sales-list', 'dashboard', '/', '']) ? 'open' : '' }}">
                                <a class="nav-submenu {{ in_array($request->segment(1), ['dashboard-analytics', 'dashboard-analytics-sales-list', 'market-insight', '']) ? 'active' : '' }}"
                                    data-toggle="nav-submenu" href="#">
                                    <!-- <i class="fa fa-archive"></i>  -->
                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu - dahsboard.png"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide">Dashboard</span>
                                </a>

                                <!-- submenu dashboard -->
                                <ul class="submenu">
                                  
                                        <li>
                                            <a href="{{ url('dashboard-analytics') }}"
                                                class="">Dashboard
                                                Analytics</a>
                                        </li>

                                    <li>
                                        <a href="{{ url('dashboard-analytics-sales-list') }}"
                                            class="">Dashboard
                                            Sales</a>
                                    </li>

                                  
                                        <li>
                                            <a href="{{ url('market-insight') }}"
                                                class="">Market
                                                Insight</a>
                                        </li>

                                </ul>
                            </li>


                            <!-- menu market insight -->
                            {{-- <li class="{{ in_array($request->segment(1), ['market-insight', 'market-insight-detail']) ? 'open' : '' }}"> --}}
                            {{-- --}}
                            {{-- <a class="nav-submenu {{ in_array($request->segment(1), ['market-insight', 'market-insight-detail']) ? 'active' : '' }}" data-toggle="nav-submenu" href="#"> --}}
                            {{-- <!-- <i class="fa fa-archive"></i>  --> --}}
                            {{-- <img src="{{ asset('public/backend-asset/icon-sidebar/menu-market-insight.png') }}" alt="" srcset="" class="sidebar-icon"> --}}
                            {{-- <span class="sidebar-mini-hide">Market Insight</span> --}}
                            {{-- </a> --}}
                            {{-- --}}
                            {{-- <!-- submenu market insight --> --}}
                            {{-- <ul> --}}
                            {{-- --}}
                            {{-- <li> --}}
                            {{-- <a href="{{ url('market-insight') }}" class="{{ in_array($request->segment(1), ['market-insight']) ? 'active' : '' }}">Overview Market</a> --}}
                            {{-- </li> --}}
                            {{-- <li> --}}
                            {{-- <a href="{{ url('market-insight-detail/customer') }}" class="{{ in_array($request->segment(2), ['customer']) ? 'active' : '' }}">Detail Customer</a> --}}
                            {{-- </li> --}}
                            {{-- <li> --}}
                            {{-- <a href="{{ url('market-insight-detail/product') }}" class="{{ in_array($request->segment(2), ['product']) ? 'active' : '' }}">Detail Produk Terlaris</a> --}}
                            {{-- </li> --}}
                            {{-- </ul> --}}
                            {{-- </li> --}}

                            <!-- {{-- <li> --}} -->
                            <!-- {{-- <a class="{{ in_array($request->segment(1), ['dashboard', '/', '']) ? 'active' : '' }}" href="{{ url('#') }}"> --}} -->
                            {{-- <i class="si si-cup"></i> --}}
                            <!-- {{-- <img src="{{ asset('public/backend-asset/icon-sidebar/menu - dahsboard.png') }}" alt="" srcset="" class="sidebar-icon"> --}} -->
                            <!-- {{-- <span class="sidebar-mini-hide">Dashboard </span> --}} -->
                            <!-- {{-- </a> --}} -->
                            <!-- {{-- </li> --}} -->

                            {{-- @php --}}
                            {{-- $role = Auth::user()->role; --}}
                            {{-- @endphp --}}
                            <!-- <li class="nav-main-heading"> -->
                            <!-- <span class="sidebar-mini-visible">TR</span><span class="sidebar-mini-hidden">Smart Sales</span> -->
                            <!-- </li> -->
                            <li
                                class="">

                                <a class="nav-submenu "
                                    data-toggle="nav-submenu" href="#">
                                    <!-- <i class="fa fa-archive"></i>  -->
                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu-target-sales.png"
                                    alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Data Sales
                                </a>

                                <!-- submenu dashboard -->
                                <ul class="submenu">
                                    <li>
                                        <a href="">Group Sales</a>
                                    </li>
                                    <li>
                                        <a href="">Sales Target</a>
                                    </li>
                                  
                                </ul>
                            </li>

                            <li
                                class="">

                                <a class="nav-submenu "
                                    data-toggle="nav-submenu" href="#">
                                    <!-- <i class="fa fa-archive"></i>  -->
                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu - crm.png"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> CRM
                                </a>

                                <!-- submenu dashboard -->
                                <ul class="submenu">
                                    <li>
                                        <a href="">CRM analytic</a>
                                    </li>

                                    <li>
                                        <a href="">CRM Data</a>
                                        <!-- class="" -->
                                    </li>
                                </ul>
                            </li>

                            {{-- <li>

                                <a href="{{ url('target-sales') }}"
                                    class="{{ in_array($request->segment(1), ['target-sales', 'target-sales-create', 'target-sales-edit', 'detail-target-sales']) ? 'active' : '' }}">
                                    <!-- <i class="fa fa-shopping-cart"></i>  -->
                                    <img src="{{ asset('public/backend-asset/icon-sidebar/menu-target-sales.png') }}"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Target Sales
                                </a>

                            </li> --}}

                            <li>

                                <a href=""
                                    class="">
                                    <!-- <i class="fa fa-shopping-cart"></i>  -->
                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu-quotation.svg"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Quotation
                                </a>

                            </li>

                            <li>

                                <a href=""
                                    class="">
                                    <!-- <i class="fa fa-shopping-cart"></i>  -->
                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu - Sales order.png"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Sales Order
                                </a>

                            </li>

                            <li>

                                <a href=""
                                    class="">
                                    <!-- <i class="fa fa-shopping-cart"></i>  -->
                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu-invoice.svg"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Invoice
                                </a>

                            </li>


                            <li>
                                <a href=""
                                    class="">

                                    <!-- <i class="fa fa-user"></i>  -->

                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/budgeting.png"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Budgeting
                                </a>
                            </li>

                            {{-- @if ($role == 3 || $role == 4) --}}

                            <!-- menu dashboard -->
                            {{-- <li
                                class="{{ in_array($request->segment(1), ['target-sales', 'target-sales-create', 'target-sales-edit', 'detail-target-sales', 'data-sales', 'data-sales-create', 'data-sales-edit']) ? 'open' : '' }}">

                                <a class="nav-submenu {{ in_array($request->segment(1), ['target-sales', 'target-sales-create', 'target-sales-edit']) ? 'active' : '' }}"
                                    data-toggle="nav-submenu" href="#">
                                    <!-- <i class="fa fa-archive"></i>  -->
                                    <img src="{{ asset('public/backend-asset/icon-sidebar/menu-target-sales.png') }}"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Data Sales
                                </a>

                                <!-- submenu dashboard -->
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ url('target-sales') }}">Target Sales</a>
                                        <!-- class="{{ in_array($request->segment(1), ['target-sales', 'target-sales-create', 'target-sales-edit', 'detail-target-sales']) ? 'active' : '' }}" -->
                                    </li>

                                    @if (Auth::user()->role != 1)
                                        <li>
                                            <a href="{{ url('data-sales') }}">List Sales</a>
                                            <!-- class="{{ in_array($request->segment(1), ['data-sales']) ? 'active' : '' }}" -->
                                        </li>
                                    @endif
                                </ul>
                            </li> --}}

                            <li>

                                <a href=""
                                    class="">

                                   

                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu-komisi.png"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Commission
                                </a>

                            </li>

                            <li>

                                <a href=""
                                    class="">

                                    <!-- <i class="fa fa-user"></i>  -->

                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu-reimburse.png"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Reimburse
                                </a>

                            </li>

                            {{-- @endif --}}

                            {{-- @if ($role == 3 || $role == 4) --}}
                            <a href=""
                                class="">

                                <!-- <i class="fa fa-window-restore"></i>  -->
                                <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu-customer.png"
                                    alt="" srcset="" class="sidebar-icon">
                                <span class="sidebar-mini-hide"> Customer
                            </a>

                            <!-- {{-- <li> -->
                            <!-- <a href="{{url('/target-sales')}}" class="{{ in_array($request->segment(1), ['target-sales','target-tambah','target-edit']) ? 'active' : '' }}"> -->
                            <!-- <i class="fa fa-money"></i> <span class="sidebar-mini-hide"> Target Sales -->
                            <!-- </a> -->
                            <!-- </li> --}} -->

                            {{-- @endif --}}

                            {{-- @if ($role == 3 || $role == 4) --}}
                            <li>

                                <a href=""
                                    class="">

                                    <!-- <i class="fa fa-user"></i>  -->

                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu - master data.png"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Product
                                </a>

                            </li>
                            {{-- @endif --}}

                            {{-- @if ($role == 3 || $role == 4) --}}

                            <li>

                                <a href=""
                                    class="">

                                    <!-- <i class="fa fa-user"></i>  -->

                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu-brand.png"
                                        alt="" srcset="" class="sidebar-icon">
                                    <span class="sidebar-mini-hide"> Brand
                                </a>

                            </li>



                          
                                <li>

                                    <a href=""
                                        class="">
                                        <!-- <i class="fa fa-shopping-cart"></i>  -->
                                        <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/menu-data-user.png"
                                            alt="" srcset="" class="sidebar-icon">
                                        <span class="sidebar-mini-hide"> Master Data User
                                    </a>

                                </li>
                            {{-- @endif --}}
                        </ul>

                    </div>


                    <!-- END Side Navigation -->

                </div>

                <!-- Sidebar Content -->

            </nav>

            <!-- END Sidebar -->




            <!-- Header -->

            <header id="page-header">

               {{-- 9 --}}



               {{--  @php
                    $lang = Helper::getLang();
                @endphp --}}

              {{--   @if ($statusAccount == 'Trial') --}}
                    {{-- @if ($lang == 'en') --}}
                   {{--  @else --}}
                        {{-- <div class="alert alert-danger alert-server" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Beralih ke akun Enterprise dan nikmati berbagai fitur menarik menggunakan omsetku
                                dan
                                juga
                                akses tanpa batas. <a style="color: #438AFE; cursor:pointer;"
                                    href="{{ url('billing-system') }}" target="_blank">upgrade
                                    sekarang!</a> </strong>
                        </div> --}}
                  {{--   @endif
                @endif --}}

                <!-- Header Content -->

                <div class="content-header" style="height: 70px;">

                    <!-- Left Section -->

                    <div class="content-header-section">

                        <!-- Toggle Sidebar -->

                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->



                        <!-- END Toggle Sidebar -->


                        <!-- Title -->
                        <div class="row">
                            <div class="col-9 col-md-5 d-flex">
                                <button type="button" class="btn btn-circle btn-side-header pr-4"
                                    data-toggle="layout" data-action="sidebar_toggle">
                                    <img src="{{ $baseurl }}public/backend-asset/icon-sidebar/hamburger - btn.png"
                                        alt="" class="navicon">
                                    {{-- <i class="fa fa-navicon"></i> --}}
                                </button>
                                <!-- <img src="{{-- {{ asset('public/backend-asset/icon-sidebar/text - logo.png') }} --}}"
                                    alt="" class="logotext"> -->
                                <h3 class="title-header">
                                    @yield('title_header')
                                </h3>

                                @yield('tipe_page')

                                <div class="pull-right" id="tambah-btn" style="display: none">
                                    <a href="@yield('link-tambah')"><button class="btn col-12 btn-tambah"><i
                                                class="fa fa-plus"></i> Tambah</button></a>
                                </div>

                                {{-- @php
                                    
                                    if ($sisaccount <= 7) {
                                        $hilangUpgrade = '';
                                    } else {
                                        $hilangUpgrade = 'd-none';
                                    }
                                    
                                    // if ($statusAccount == 'Enterprice') {
                                    //     $sisaccount = $sisa;
                                    // }else {
                                    //     $sisaccount = $sisaccount;
                                    // }
                                    
                                @endphp --}}
                               {{--  @if ($lang == 'en') --}}
                                    
                               {{--  @else --}}
                                    <p style="color: black; float:right" class="mt-5">
                                        {{-- @if ($statusAccount == 'Enterprice') --}}
                                            Enterprise
                                        {{-- @else
                                            {{ $statusAccount }}
                                        @endif --}}
                                        kadaluarsa dalam
                                        {{-- <span class="text-danger">9<span> hari <b
                                                    onclick="$('#modalTrial').modal('show');"
                                                    class="{{ $hilangUpgrade }}" style="color: red; cursor:pointer;">Tingkatkan</b>
                                            </span> --}}
                              {{--   @endif --}}

                            </div>
                            <div class="col-12 col-md-2 d-none d-md-block">
                                @yield('top-left-function')
                                <div class="btn-group pull-right" role="group">

                                    <button type="button" class="btn btn-rounded btn-side-header"
                                        id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">

                                        <i class="fa fa-user d-none"></i>


                    
                                            <span class="d-none d-sm-inline-block text-grays"><i
                                                    class="fa fa-question-circle mr-10" aria-hidden="true"></i><span
                                                    class="mr-10">Bantuan</span> <img
                                                    src="{{ $baseurl }}public/backend-asset/img/dropdown.svg"
                                                    alt="" style="width: 10px;" class="mr-10"></span>
                                       {{--  @endif --}}


                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right min-width-200"
                                        aria-labelledby="page-header-user-dropdown">


                                       {{--  @if ($lang == 'en') --}}
                                            
                                        {{-- @else --}}
                                            <a href="" class="dropdown-item border-b"
                                                target="_blank">
                                                <img src="{{ $baseurl }}public/backend-asset/img/whatsappnew.svg"
                                                    alt="" style="width: 20px;" class="mr-10"> Bantuan
                                                Teknis
                                            </a>


                                            <a href=""
                                                class="dropdown-item text-blue" target="_blank">
                                                <img src="{{ $baseurl }}public/backend-asset/img/whatsappnew.svg"
                                                    alt="" style="width: 20px;" class="mr-10"> Bantuan Sales
                                            </a>
                                        {{-- @endif --}}

                                    </div>




                                </div>
                            </div>
                            <div class="col-12 col-md-2 d-none d-md-block">
                                @yield('top-left-function')
                                {{-- <div class="btn-group pull-right" role="group">

                                    <button type="button" class="btn btn-rounded btn-side-header"
                                        id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">

                                        <i class="fa fa-user d-none"></i>


                                        @if ($lang == 'en')
                                            <span class="d-none d-sm-inline-block text-grays"><i
                                                    class="fa fa-question-circle mr-10" aria-hidden="true"></i><span
                                                    class="mr-10">Language</span> <img
                                                    src="{{ asset('public/backend-asset/img/dropdown.svg') }}"
                                                    alt="" style="width: 10px;" class="mr-10"></span>
                                        @else
                                            <span class="d-none d-sm-inline-block text-grays"><i
                                                    class="fa fa-question-circle mr-10" aria-hidden="true"></i><span
                                                    class="mr-10">Bahasa</span> <img
                                                    src="{{ asset('public/backend-asset/img/dropdown.svg') }}"
                                                    alt="" style="width: 10px;" class="mr-10"></span>
                                        @endif


                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right min-width-200"
                                        aria-labelledby="page-header-user-dropdown">


                                        <a onclick="changeIndonesia('{{ Request::url() }}')"
                                            class="dropdown-item border-b">
                                           
                                            Indonesia
                                        </a>


                                        <a onclick="changeEnglish('{{ Request::url() }}')"
                                            class="dropdown-item text-blue">
                                           
                                            Inggris
                                        </a>

                                    </div>




                                </div> --}}
                            </div>


                            <div class="col-2 col-md-3" style="top: -18px;">

                                <!-- {{-- <div class="btn-group pull-right"> -->
                                <!-- <button type="button" class="btn btn-circle p-customgear btn-side-header " -->
                                <!-- data-toggle="layout" data-action="side_overlay_toggle"> -->
                                <!-- <img src="{{ URL::asset('public/backend-asset/img/icon-img/Component 61 – 1 copy.png')}}"> -->
                                <!-- </button> -->
                                <!-- </div> --}} -->

                                <div class="btn-group pull-right" role="group">

                                    <button type="button" class="btn btn-rounded btn-side-header"
                                        id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">

                                        <i class="fa fa-user d-none"></i>

                                        {{-- @if (Auth::check()) --}}
                                        {{-- <span class="d-none d-sm-inline-block text-blue">{{ Auth::user()->name }}</span> --}}
                                        {{-- @endif --}}


                                        <div class="row d-flex align-items-center">

                                            <div class="col-sm-9 d-none d-md-block">
                                                <li class="list-inline-item">
                                                    {{-- @if (Auth::check())
                                                <h4 class="name-account-info mb-0 font-size-md">{{ Auth::user()->name }}</h4><i class="arrow down"></i>
                                            @endif --}}
                                                    <span class="d-none d-sm-inline-block text-grays">
                                                        {{-- @php
                                                            
                                                            if (Helper::showCompanyData('name')) {
                                                                $dataCompany =  \Str::limit(Helper::showCompanyData('name'), 20);
                                                            } else {
                                                                $dataCompany = 'No Company';
                                                            }
                                                        @endphp --}}
                                                        <span class="mr-10">{{-- {{ $dataCompany }} --}}</span>
                                                        <!-- <img src="{{-- {{ asset('public/backend-asset/img/dropdown.svg') }} --}}"
                                                            alt="" style="width: 10px;"
                                                            class=""></span> -->



                                                    <!-- {{-- <a class="link-effect {{-- text-dual-primary-dark  font-size-xs --}} font-w600 text-uppercase warna-blue" href="javascript:void(0)" style="font-size:11px;">{{-- Auth::user()->name --}}</a>--}} -->

                                                    {{-- @else --}}
                                                    {{-- @endif --}}
                                                </li>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="circle-ava d-flex align-items-center justify-content-center" style="width: 50px !important; height: 50px !important;">
                                                    {{-- @php
                                                        $avaName = '';
                                                        $showName = '';
                                                        if (Auth::check()) {
                                                            $pecah = explode(' ', Auth::user()->name);
                                                            $avaName = isset($pecah[1]) ? substr($pecah[0], 0, 1) . substr($pecah[1], 0, 1) : substr($pecah[0], 0, 1);
                                                            $showName = isset($pecah[1]) ? $pecah[0] . ' ' . $pecah[1] : $pecah[0];
                                                        }
                                                    @endphp --}}
                                                    {{-- <span class="d-flex justify-content-center" style="position: relative; top: 3px;">{{ strtoupper($avaName) }}</span> --}}
                                                    <img src="{{-- {{ Helper::showProfile() }} --}}" alt="" class="round-image">
                                                </div>
                                            </div>

                                        </div>

                                        <!-- <i class="fa fa-angle-down ml-5 text-blue"></i> -->


                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right min-width-200"
                                        aria-labelledby="page-header-user-dropdown"
                                        style="width: 430px; position: absolute; left: 83px !important;">

                                        <div class="bg-abu-dropdown">
                                            <div class="circle-ava mx-auto"
                                                style="width: 70px !important; height: 70px;">
                                                {{-- @php
                                                    $avaName = '';
                                                    $showName = '';
                                                    if (Auth::check()) {
                                                        $pecah = explode(' ', Auth::user()->name);
                                                        $avaName = isset($pecah[1]) ? substr($pecah[0], 0, 1) . substr($pecah[1], 0, 1) : substr($pecah[0], 0, 1);
                                                        $showName = isset($pecah[1]) ? $pecah[0] . ' ' . $pecah[1] : $pecah[0];
                                                    }
                                                @endphp --}}
                                                {{-- <span class="d-flex justify-content-center" style="position: relative; top: 15px;">{{ strtoupper($avaName) }}</span> --}}
                                                <img src="{{-- {{ Helper::showProfile() }} --}}"alt="" srcset=""
                                                    class="round-image-2 mb-20">
                                            </div>




                                            <h3 class="h5 text-center py-10 mb-0 text-uppercase">
                                                <span>{{-- {{ Helper::roleAccess() }} --}}</span>

                                            </h3>

                                            <h5 class="h6 text-center py-0 pb-0 mb-0 text-uppercase">
                                                {{-- {{ Helper::showCompanyData('name') }} --}}</h5>
                                        </div>



                                        <div class="row d-flex align-items-center mb-3 mt-3">
                                            <div class="col-sm-8">
                                                {{-- @if ($lang == 'en') --}}
                                                    <h6 class="mb-0 ml-4">MY ORGANIZATIONS</h6>
                                                {{-- @else --}}
                                                    <h6 class="mb-0 ml-4">ORGANISASI SAYA</h6>
                                                {{-- @endif --}}
                                            </div>
                                            <a class="dropdown-item col-sm-3" href="{{ url('logout') }}"
                                                style="color: red;">

                                               {{--  @if ($lang == 'en') --}}
                                                    <i class="si si-logout mr-5"></i>
                                                    Sign Out
                                              {{--   @else --}}
                                                    <i class="si si-logout mr-5"></i>
                                                    Keluar
                                              {{--   @endif --}}

                                            </a>
                                        </div>

                                        <div class="scrollable-menu ">
                                            {{-- @foreach ($check_company as $companys) --}}
                                                <div class=" myText align-items-center{{--  {{ Helper::showCompanyData('id') == $companys->id ? 'active mt-10 ml-10' : '' }}  
                                                {{ Helper::showCompanyData('id') != $companys->id ? 'not_active mt-10 ml-10' : '' }} --}}"
                                                    title="{{-- {{ $companys->nama }} --}}">
                                                    {{-- <div class="col-sm-2">
                                                <div class="circle-ava"
                                                    style="width: 50px !important; height: 50px;">
                                                    <img src="{{asset('public/backend-asset/img/icon-company.png') }}"
                                                        alt="" >
                                                </div>
                                            </div>

                                            <div class="col-sm-8 mt-auto">
                                                <h5 class="d-flex align-items-center mb-0">
                                                    {{ \Str::limit($companys->nama, 20) }}</h5>
                                                <h6 style="text-decoration: underline;"><a href="">Billing
                                                        Omsetku</a></h6>
                                                <h6>Company Code : <a class="font-weight-bold" href="#">{{$companys->company_code != null ? $companys->company_code : $companys->id}}</a></h6>
                                            </div>

                                            <div class="col-sm-2">
                                                <span class="checkIcon d-flex align-items-center"><img
                                                        src="{{ asset('public/backend-asset/img/checklist-icon.png') }}"
                                                        alt="" style="width: 25px;"></span>
                                            </div> --}}

                                            <a href="{{-- {{ url('set-company-user/' . $companys->id) }} --}}"
                                                role="button" title="{{-- {{ $companys->nama }} --}}"
                                                class="">
                                                    <div class=" mx-0">
                                                        {{-- @if ($companys->status == 1) --}}
                                                       
                                                            {{-- @else
                                                        <a href="#" onclick="NotAllow()" role="button"
                                                            title="{{ $companys->nama }}" class="">
                                                @endif --}}
                                                            <div class="row mx-0">
                                                                <div class="col-sm-2">
                                                                    <div class="circle-ava "
                                                                        style="width: 50px !important; height: 50px; border:unset; background:unset; margin-top:10px; margin-left:5px;">
                                                                        <img src="{{ $baseurl }}public/backend-asset/img/icon-company.png"
                                                                            alt="" style="width: 50px;">

                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-7 mt-10">
                                                                    <h5
                                                                        class="d-flex align-items-center mb-0 font-size-md">
                                                                        {{-- {{ \Str::limit($companys->nama, 30) }} --}}</h5>
                                                                    <h6 class="mt-1 mb-0 font-size-sm"> <span class="text-dark">Code :</span> <a class="text-primary font-weight-bold" href="#">{{-- {{$companys->company_code != null ? $companys->company_code : $companys->id}} --}}</a></h6>
                                                                    <h6 style="text-decoration: underline;"
                                                                        class="font-size-sm mt-1 mb-0"><a
                                                                            href="{{-- {{ url('billing-system') }} --}}">Billing
                                                                            Omsetku</a></h6>

                                                                </div>

                                                                <div class="col-sm-2 mt-10">
                                                                    {{-- <span class="checkIcon d-flex"><img
                                                                src="{{ asset('public/backend-asset/img/checklist-icon.png') }}"
                                                                alt="" style="width: 25px;"></span> --}}
                                                                   {{--  @if (Helper::roleAccess() == 'Admin') --}}
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-circle ml-3 mt-1 btn-alt-secondary"
                                                                            data-toggle="modal"
                                                                            data-target="#ubahCompany{{-- {{ $companys->id }} --}}">
                                                                            <img src="{{ $baseurl }}public/backend-asset/img/edit-company.png"
                                                                                alt="Edit {{-- {{ $companys->nama }} --}}"
                                                                                style="width:11px">
                                                                        </button>
                                                                    {{-- @endif --}}

                                                                </div>
                                                            </div>
                                                      
                                                        {{-- <div class="col-3 p-0">
                                                        <button type="button"
                                                            class="btn btn-sm btn-circle ml-3 mt-1 btn-alt-secondary"
                                                            data-toggle="modal"
                                                            data-target="#ubahCompany{{ $companys->id }}">
                                                            <img src="{{ asset('public/backend-asset/img/edit-company.png') }}"
                                                                alt="Edit {{ $companys->nama }}" style="width:11px">
                                                        </button>
                                                    </div> --}}
                                                    </div>
                                                </a>
                                                </div>
                                            {{-- @endforeach --}}
                                        </div>
                                        {{-- @if (count($check_company) > 1) --}}
                                            <li>
                                                <div class="mx-3 link-company {{-- {{ Auth::user()->id_company == '' ? 'active' : '' }} --}}"
                                                    title="{{-- {{ $companys->nama }} --}}">

                                                    {{-- @if ($companys->logo != '')
                                                <img class="img-avatar" src="{{ asset('storage/app/public/logo/'.$companys->logo) }}" alt="{{ $companys->logo }}">
                                                @else
                                                <img class="img-avatar" src="assets/media/avatars/avatar2.jpg" alt="">
                                                @endif --}}
                                                    {{-- <div class="row">
                                                    <a href="{{ url('set-company-dashboard/all') }}" class="col-9 p-0">
                                                        <div class="row m-0">
                                                            <div class="col-3 text-center p-0">
                                                                <img src="{{ url('assets/img/complete/icon-company.png') }}" class="img-avatar img-avatar36">
                                                            </div>
                                                            <div class="col-9 p-0">
                                                                <div class="font-w500 font-size-13-5 warna-blue">
                                                                    Semua Company
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
        
                                                </div> --}}
                                                </div>
                                                <hr>
                                            </li>
                                        {{-- @endif --}}
                                        {{-- <div class="row my-4 mx-0">
                                            <div class="col-12 px-3">
                                                <button type="button" class="btn bx-shdw-btn col-12 p-3  btn-simpan" data-toggle="modal"
                                                        data-target="#formCompany" title="Tambah Company">Tambah Company</button>
                                            </div>
                                        </div> --}}
                                       {{--  @if (Helper::roleAccess() == 'Admin') --}}
                                            {{-- @if ($lang == 'en') --}}
                                                <!-- <div
                                                    class="prefrensi-edit bg-pref mt-3 d-flex justify-content-center align-items-center">
                                                    <button type="button"
                                                        class="btn bx-shdw-btn col-12 p-3  btn-simpan"
                                                        data-toggle="modal" data-target="#formCompany"
                                                        title="Tambah Company">Create Company</button>
                                                </div> -->

                                                <div
                                                    class="prefrensi-edit bg-pref mt-3 d-flex justify-content-center align-items-center">
                                                    {{-- @if(Helper::getIdCompanyAccount() != null) --}}
                                                    <a href="{{-- {{ url('edit-profile/' . Auth::user()->id) }} --}}"
                                                        style="color: #909090;  text-decoration: underline; font-size: 18px;"><img
                                                            src="{{ $baseurl }}public/backend-asset/img/gear-icon.png"
                                                            alt="" style="width: 20px;"
                                                            class="mr-3">
                                                            Pengaturan Preferensi
                                                    </a>
                                                   {{--  @endif --}}
                                                </div>
                                           {{--  @else --}}
                                                <!-- <div
                                                    class="prefrensi-edit bg-pref mt-3 d-flex justify-content-center align-items-center">
                                                    <button type="button"
                                                        class="btn bx-shdw-btn col-12 p-3  btn-simpan"
                                                        data-toggle="modal" data-target="#formCompany"
                                                        title="Tambah Company">Tambah Perusahaan</button>
                                                </div> -->

                                                {{-- @if(Helper::getIdCompanyAccount() != null) --}}
                                                <div
                                                    class="prefrensi-edit bg-pref mt-3 d-flex justify-content-center align-items-center">
                                                    <a href="{{-- {{ url('edit-profile/' . Auth::user()->id) }} --}}"
                                                        style="color: #909090;  text-decoration: underline; font-size: 18px;"><img
                                                            src="public/backend-asset/img/gear-icon.png"
                                                            alt="" style="width: 20px;"
                                                            class="mr-3">Pengaturan
                                                        Preferensi</a>
                                                </div>
                                             {{--    @endif
                                            @endif
                                        @endif --}}





                                    </div>

                                </div>

                                @yield('top-right-function')

                            </div>
                        </div>

                        <!-- End Title -->

                    </div>

                    <!-- END Right Section -->

                </div>

                <!-- END Header Content -->


                <!-- Header Search -->

                <div id="page-header-search" class="overlay-header">

                    <div class="content-header content-header-fullrow">

                        <form action="/dashboard" method="POST">

                            @csrf

                            <div class="input-group">

                                <div class="input-group-prepend">

                                    <!-- Close Search Section -->

                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                                    <button type="button" class="btn btn-secondary" data-toggle="layout"
                                        data-action="header_search_off">

                                        <i class="fa fa-times"></i>

                                    </button>

                                    <!-- END Close Search Section -->

                                </div>

                                <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                    id="page-header-search-input" name="page-header-search-input">

                                <div class="input-group-append">

                                    <button type="submit" class="btn btn-secondary">

                                        <i class="fa fa-search"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <!-- END Header Search -->



                <!-- Header Loader -->

                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->

                <!-- {{-- <div id="page-header-loader" class="overlay-header bg-loader-header @if (\Session::has('login')) @if (Session::get('login') == true)  @endif @else show head-load @endif"> --}} -->
                <div id="page-header-loader" class="overlay-header bg-loader-header head-load">

                    <div class="content-header content-header-fullrow text-center">

                        <div class="content-header-item">

                            <i class="fa fa-sun-o fa-spin text-white"></i>

                        </div>

                    </div>

                </div>

                <!-- END Header Loader -->
                {{-- <div id="page-header-loader" class="overlay-header bg-loader-header @if (\Session::has('login')) @if (Session::get('login') == true) @endif @else show head-load @endif">

                <div class="content-header content-header-fullrow text-center">

                    <div class="content-header-item">

                        <i class="fa fa-sun-o fa-spin text-white"></i>

                    </div>

                </div>

            </div> --}}
            </header>


            <!-- END Header -->



            <!-- Main Container -->

            <main id="main-container">

                <div class="modal fade" id="modalTrial" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" style="max-width : fit-content;">
                        <div class="modal-content">
                            <div class="modal-header" style="background: #EFEFEF;">
                                <h5 class="modal-title" style="color: #575757;font-size: 113%;padding: 2%;">Siap untuk
                                    lanjut omsetku enterprise?</h5>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img src="{{ $baseurl }}public/backend-asset/img/Group 240523.png" alt=""
                                        class="mb-4" style="max-width: 64%">
                                </center>
                                <center>
                                    <h5 style="margin-bottom :7px;">
                                       {{--  @if ($statusAccount == 'Expired Trial') --}}
                                            Trial
                                       {{--  @else
                                            {{ $statusAccount }}
                                        @endif
                                        anda habis dalam
                                        {{ $sisaccount }} Hari --}}
                                    </h5>
                                    <p class="mb-4">Kami harap Anda menikmati pengalaman Anda dengan <br> Langganan
                                        Omsetku sejauh ini. Inilah yang dapat Anda lakukan <br> untuk memastikan
                                        transisi yang mulus dari rencana uji coba:</p>
                                </center>
                                <center>
                                    <button onclick="location.href='{{ url('billing-system') }}';"
                                        class="btn btn-info mb-2" data-dismiss="modal" aria-label="Close"
                                        style="width: 69%;height: 44px;background: #1E3168;">Mulai Langganan</button>
                                </center>
                                <center>
                                    <button onclick="location.href='{{ url('logout') }}';" class="btn btn-info"
                                        data-dismiss="modal" aria-label="Close"
                                        style="width: 69%;height: 44px;background: red;">Log Out</button>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalTrialNext" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" style="max-width : fit-content;">
                        <div class="modal-content">
                            <div class="modal-header" style="background: #EFEFEF;">
                                <h5 class="modal-title" style="color: #575757;font-size: 113%;padding: 2%;">Siap untuk
                                    lanjut omsetku enterprise?</h5>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img src="{{-- {{ asset('backend-asset/img/limit.svg') }} --}}" alt=""
                                        class="mb-4" style="max-width: 64%">
                                </center>
                                <center>
                                    <h5 style="margin-bottom :7px;" class="mb-50 ml-20 mr-20">Maaf Anda Sudah Mencapai
                                        Limit Untuk <br> Menambah Data Anda. Silahkan Mulai <br> Langganan untuk tambah
                                        data lebih banyak</h5>
                                    {{-- <p class="mb-4">Kami harap Anda menikmati pengalaman Anda dengan <br> Langganan
                                        Omsetku sejauh ini. Inilah yang dapat Anda lakukan <br> untuk memastikan
                                        transisi yang mulus dari rencana uji coba:</p> --}}
                                </center>
                                <center>
                                    <button onclick="/*  */"
                                        class="btn btn-info mb-2" data-dismiss="modal" aria-label="Close"
                                        style="width: 69%;height: 44px;background: #1E3168;">Mulai Langganan</button>
                                </center>
                                <center>
                                    {{-- <button onclick="location.href=''" class="btn btn-info"
                                        data-dismiss="modal" aria-label="Close"
                                        style="    width: 69%;
                                        height: 44px;
                                        background: #ffffff42;
                                        color: #000000;">Batal</button> --}}
                                    <button type="button" class="btn mx-1 btn-outline-done" data-dismiss="modal"
                                        style="    width: 69%;
                                           height: 44px;
                                           background: #ffffff42;
                                           color: #1E3168;">Nanti
                                        Saja</button>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalTrialFirst" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" style="max-width : fit-content;">
                        <div class="modal-content">
                            <div class="modal-header" style="background: #EFEFEF;">
                                <h5 class="modal-title" style="color: #575757;font-size: 113%;padding: 2%;">Siap untuk
                                    lanjut omsetku enterprise?</h5>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img src="{{ $baseurl }}backend-asset/img/Finance Calculator.png"
                                        alt="" class="mb-4" style="max-width: 64%">
                                </center>
                                <center>
                                    <h5 style="margin-bottom :7px;" class="ml-20 mr-20" style="font-weight:700">
                                        Selamat Datang Di Omsetku Enterprise <br>
                                        Penawaran Khusus Untuk Anda Trial 14 Hari</h5>
                                    <p class="mb-4">Coba pengalaman baru menggunakan Omsetku Enterprise, <br>
                                        Akses semua fitur tanpa batas. Ayo tingkatkan omset penjualan anda <br>
                                        sekarang</p>
                                </center>
                                <center>
                                    <button onclick="location.href='';"
                                        class="btn btn-info mb-2" data-dismiss="modal" aria-label="Close"
                                        style="width: 69%;height: 44px;background: #1E3168;">Mulai Trial</button>
                                </center>
                                <center>
                                    <button onclick="" class="btn btn-info"
                                        data-dismiss="modal" aria-label="Close"
                                        style="width: 69%;height: 44px;background: red;">Log Out</button>
                                </center>
                                <center>
                            </div>

                        </div>
                    </div>
                </div>

                @yield('content')

            </main>

            <!-- END Main Container -->



            <!-- Footer -->

            <footer id="page-footer" class="opacity-0">

                <div class="content pb-20 font-size-xs clearfix">

                    <!-- {{-- <div class="float-right"> -->
          <!-- Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a> -->
          <!-- </div> --}} -->

                    <div class="float-left">

                        <a class="font-w600" href="" target="_blank">Omsetku</a> &copy; 
                        <span class="js-year-copy"></span>

                    </div>

                </div>

            </footer>

            <!-- END Footer -->

        </div>

        {{-- <div class="modal-ajax">Place at bottom of page</div> --}}

        <!-- END Page Container -->



        <!--------------------------------------- POP-UP --------------------------------------->

        <!----- Pop-up welcome ----->

        <?php
        $header = 'Getting Started';
        $text_img = 'Omset';
        $title = 'Welcome to Omsetku!';
        $text_content1 = '<p>Lets start the easier way to make your sales get <b>better and provitable.</b></p>';
        $text_content2 = 'Functional feature on dashboard to monitor your sales activity and sales flow.';
        $text_content3 = 'What will you get on omsetku dashboard';
        $icon_delete = 'Vector-close-button.png';
        $img_main = 'geting started - img.png';
        $list_card = [
            [
                'title' => 'Sales Order',
                'vision' => 'To Monitor',
                'icon' => 'icon 1.png',
            ],
            [
                'title' => 'Quotation',
                'vision' => 'To Deal',
                'icon' => 'icon 2.png',
            ],
            [
                'title' => 'Invoice',
                'vision' => 'To Bill',
                'icon' => 'icon 3.png',
            ],
        ];
        ?>

        <div class="modal fade welcome-popup" id="welcome-popup" tabindex="-1" aria-labelledby="welcome-popupLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="welcome-popupLabel">{{ $header }}</h5>
                        <button type="button" class="close pop-up-welcome" data-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                            <img src="{{ $baseurl }}/public/backend-asset/img/getting-started/' . $icon_delete"
                                alt="" srcset="">
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-5 col-lg-5 image-pop-up">
                                <img src="{{ $baseurl }}/public/backend-asset/img/getting-started/' . $img_main"
                                    alt="" srcset="" style="width: 100%">
                            </div>

                            <div class="col-md-7 col-lg-7 content-pop-up">
                                <div class="row">

                                    <div class="col-md-12 col-lg-12 title-pop-up">
                                        <h1>{{ $title }}</h1>
                                        <?php echo $text_content1; ?>
                                        <hr>
                                    </div>

                                    <div class="col-md-12 col-lg-12 ">
                                        <div class="row">

                                            <div class="col-md-12 col-lg-12">
                                                <p>{{ $text_content2 }}</p>
                                                <p style="font-weight: bold;">{{ $text_content3 }}</p>
                                            </div>

                                            <div class="col-md-12 col-lg-12 pop-up-card-list">
                                                <div class="row">

                                                    @for ($idx = 0; $idx < count($list_card); $idx++)
                                                        <div class="col-md-4 col-lg-4 card px-1">

                                                            <div class="card-body">

                                                                <div class="row">
                                                                    <div
                                                                        class="col-md-5 col-lg-5 pr-1 d-flex justify-content-center">
                                                                        <img src="{{ $baseurl }}/public/backend-asset/img/getting-started/' . $list_card[$idx]['icon']"
                                                                            alt="" srcset="">
                                                                    </div>
                                                                    <div
                                                                        class="col-md-7 col-lg-7 px-1 d-flex align-items-center">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-lg-12">
                                                                                <h5 class="card-title">
                                                                                    {{ $list_card[$idx]['title'] }}
                                                                                </h5>
                                                                            </div>
                                                                            <div class="col-md-12 col-lg-12">
                                                                                <p class="card-text">
                                                                                    {{ $list_card[$idx]['vision'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    @endfor

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="modal-footer"> -->
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                    <!-- </div> -->

                </div>
            </div>
        </div>
        <!----- end Pop-up welcome ----->

        {{-- TAMBAH COMPANY --}}
        <div class="modal fade " id="formCompany" tabindex="-1" role="dialog" aria-labelledby="modal-slideup"
            aria-hidden="true">
            {{-- <div class="modal fade welcome-popup" id="welcome-popup" tabindex="-1" aria-labelledby="welcome-popupLabel"
        aria-hidden="true"> --}}
            <div class="modal-dialog modal-dialog-slideup" role="document">
                <div class="modal-content">
                    <div class=" block-themed block-transparent mb-0 ">
                        <div class="block-header bg-head-grey">
                            <h3 class="block-title label-form-blue"><img
                                    src="{{ $baseurl }}public/backend-asset/img/Group 1310.png"
                                    class="width-35">&nbsp; Tambah Company</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option label-form-blue" data-dismiss="modal"
                                    aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="{{ url('tambah-company') }}" method="post"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row ml-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="label-form-blue">Nama Perusahaan <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="nama_company"
                                                        class="input-sm form-control bx-shdw-form"
                                                        placeholder="Ketik nama Company"
                                                        value="{{ old('nama_company') }}" required>
                                                    <small id="emailHelp"
                                                        class="form-text text-muted">{{ $errors->first('nama_company') }}</small>
                                                    <small id="errNama" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="label-form-blue">No Telp <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="tel" class="form-control bx-shdw-form"
                                                        placeholder="Ketik No Telp" id="no_telp_company"
                                                        name="no_telp_company" value="{{ old('no_telp_company') }}"
                                                        onkeypress="validate(event)" required>
                                                    <small id="no_telp"
                                                        class="form-text text-muted">{{ $errors->first('no_telp_company') }}</small>
                                                    <small id="errTelp" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="label-form-blue">Alamat <span
                                                            class="txt-red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <textarea name="alamat_company" id="alamat_company" cols="20" rows="3"
                                                        class="form-control  bx-shdw-form" required>{{ old('alamat_company') }}</textarea>
                                                    <small
                                                        class="form-text text-muted">{{ $errors->first('alamat_company') }}</small>
                                                    <small id="errAlamat" class="txt-err"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="modal-footer no-bd-t">
                        <button class="btn btn-simpan" type="submit">Simpan</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

       {{--  @foreach ($check_company as $companys) --}}
            <!-- START Modal Edit Form Company -->
            <div class="modal fade" id="ubahCompany{{-- {{ $companys->id }} --}}" tabindex="-1" role="dialog"
                aria-labelledby="modal-slideup" aria-hidden="true">
                <div class="modal-dialog modal-dialog-slideup" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0 ">
                            <div class="block-header bg-blue-primary">
                                <h3 class="block-title label-form-blue">&nbsp; Ubah Company</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option label-form-blue"
                                        data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form action="{{-- {{ url('ubah-company/' . $companys->id) }} --}}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row ml-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-md-3">
                                                        <label class="label-form-blue">Nama Perusahaan <span
                                                                class="txt-red">*</span></label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" name="nama_company_edit" style="width: 100% !important;"
                                                            class="input-sm input--modal form-control bx-shdw-form"
                                                            placeholder="Ketik nama Company"
                                                            value="{{-- {{ $companys->nama }} --}}" required>
                                                        <small id="emailHelp"
                                                            class="form-text text-muted">{{-- {{ $errors->first('nama_company_edit') }} --}}</small>
                                                        <small id="errNama" class="txt-err"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-md-3">
                                                        <label class="label-form-blue">No Telp <span
                                                                class="txt-red">*</span></label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="tel" style="width: 100% !important;"
                                                            class="form-control input--modal bx-shdw-form"
                                                            placeholder="Ketik No Telp" name="no_telp_edit_company"
                                                            value="{{-- {{ $companys->no_telp }} --}}"
                                                            onkeypress="/* validate(event) */" required>
                                                        <small id="no_telp"
                                                            class="form-text text-muted">{{-- {{ $errors->first('no_telp_edit_company') }} --}}</small>
                                                        <small id="errTelp" class="txt-err"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 col-md-3">
                                                        <label class="label-form-blue">Alamat <span
                                                                class="txt-red">*</span></label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="alamat_edit_company" style="width: 100% !important;" cols="20" rows="3" class="form-control input--modal  bx-shdw-form"
                                                            required>{{-- {{ $companys->alamat }} --}}</textarea>
                                                        <small
                                                            class="form-text text-muted">{{-- {{ $errors->first('alamat_edit_company') }} --}}</small>
                                                        <small id="errAlamat" class="txt-err"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div class="modal-footer no-bd-t">
                            <button class="btn btn-simpan" type="submit">Simpan</button>
                            {{-- <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button> --}}
                            {{-- <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                       <i class="fa fa-check"></i> Perfect
                   </button> --}}
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END Modal Edit Form Company -->
        {{-- @endforeach --}}

        <!----- Pop-up alert ----->
        <div class="modal fade alert-popup" id="staticBackdropAlert" tabindex="-1"
            aria-labelledby="staticBackdropAlertLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <img src="{{ $baseurl }}public/backend-asset/img/popup/popup - duplicate.png"
                            alt="" class="icon-img-alert">
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="staticBackdropAlertLabel">Modal title</h5>
                        <h5 class="modal-desc">Modal title</h5>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="confirm-button">
                            <a href="#" class="link-confirm mx-1">

                            </a>
                            <button type="button" class="btn mx-1 btn-outline-done"
                                data-dismiss="modal">Close</button>
                        </div>
                        <div class="alert-notif-button">
                            <button type="button" class="btn btn-outline-done" data-dismiss="modal">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade alert-popup-expired" id="staticBackdropAlert" tabindex="-1"
            aria-labelledby="staticBackdropAlertLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <img src="{{ $baseurl }}public/backend-asset/img/popup/popup - duplicate.png"
                            alt="" class="icon-img-alert">
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="staticBackdropAlertLabel">Modal title</h5>
                        <h5 class="modal-desc">Modal title</h5>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="confirm-button">
                            <a href="#" class="link-confirm mx-1">

                            </a>
                            <button type="button" class="btn mx-1 btn-outline-done"
                                data-dismiss="modal">Close</button>
                        </div>
                        <div class="alert-notif-button">
                            <button type="button" class="btn btn-outline-done" data-dismiss="modal">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----- end Pop-up alert ----->



        <!----- Pop-up Form Small----->
        <div class="modal fade form-popup-sm" id="staticBackdropAlert" tabindex="-1"
            aria-labelledby="staticBackdropAlertLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered ">
                <div class="modal-content block-form">
                    <div class="modal-header bg-blue-primary">
                        <span class="font-size-h3 font-w800" id="formTitlePopUp"></span>
                        <button type="button" class="close pop-up-form" data-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                            <img src="{{ $baseurl }}/public/backend-asset/img/popup/' . $icon_delete" alt=""
                                srcset="">
                        </button>
                    </div>
                    <div class="modal-body p-4" id="divFormPopUp">

                    </div>
                    <div class="modal-footer text-center">
                        <div class="alert-notif-button">
                            <button type="button" id="saveFormInput" class="btn btn-primary-omsetku">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----- end Pop-up Form Small----->

        <!---------- pop-up load ---------->
        <div class="modal fade loading" id="loadingModal" data-backdrop="static" data-keyboard="true"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content bg-transparent">
                    <div class="modal-body">

                        <div class="load-ajax text-center bg-transparent p-10" style="color: #ffff"><i
                                class="fa fa-spinner fa-spin fa-2x"></i><span
                                class="font-w600 ml-10 pb-50">Processing....</span></div>
                    </div>
                </div>

            </div>
        </div>
        <!---------- pop-up load ---------->


        <!--------------------------------------- END POP-UP --------------------------------------->

        <!-- Bootstrap Toasts -->
        <div style="position: fixed; top: 3rem; right: 3rem; z-index: 9999999;">
            <!-- Toast Example 1 -->
            <div id="toast--message" class="toast fade hide" data-delay="4000" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="row mx-0">
                    <div class="col-lg-3 col-md-3">
                        <div class="toast-notif-icon text-center">
                            <i class="fa fa-check-circle-o"></i>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 pl-0">
                        <div class="toast-header">
                            <h3 class="toast-notif-title mb-0"></h3>
                            <button type="button" class="ml-4 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            <h3 class="toast-notif-desc mb-0"></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Toast Example 1 -->
        </div>

        {{-- @php
          
            $statusCheck = Helper::getStatusAccount('statusCheck');
            $sisaCheck = Helper::getStatusAccount('sisaCheck');
            
            if ($statusCheck == 'Pro') {
                $statusCheck = 'Lite';
            }

            $id_company =  Helper::getIdCompanyAccount();
        @endphp --}}



        {{-- <script src="{{ asset('assets/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <script src="{{ $baseurl }}public/backend-asset/sweetalert2/dist/sweetalert2.min.js"></script>

        {{-- <script src="{{ asset('assets/js/codebase.core.min.js')}}"></script> --}}


        <!-- Codebase Core JS -->
        <!-- <script src="{{ asset('public/js/codebase.app.js') }}"></script>  -->

        <!-- Codebase Core JS -->
        <!-- {{-- <script src="{{ asset('assets/js/codebase.core.min.js') }}"></script> -->
    <!-- <script src="{{ asset('public/js/codebase.app.min.js') }}"></script> --}} -->

        <script src="{{ $baseurl }}public/backend-asset/js/codebase.app_min.js?V=1"></script>


        <!-- Laravel Scaffolding JS -->
        <script src="{{ $baseurl }}public/backend-asset/js/laravel.app_min.js"></script>



        <!-- {{-- Laravel Scaffolding JS -->
    <!-- <script src="{{ asset('public/js/laravel.app.js') }}"></script> --}} -->

        <script src="{{ $baseurl }}public/backend-asset/js/plugins/select2/js/select2.full.min.js"></script>

        {{-- <script src="{{ URL::asset('public/backend-asset/select2js/js/select2.min.js') }}"></script> --}}

        <script src="{{ $baseurl }}ublic/backend-asset/chosen-js/chosen.jquery.min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js">
        </script>


        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->

        <!-- Page JS Plugins -->

        <script src="{{ $baseurl }}public/backend-asset/js/plugins/es6-promise/es6-promise.auto.min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script src="{{ $baseurl }}public/backend-asset/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js">
        </script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/all.min.js"
        integrity="sha512-MNA4ve9aW825/nbJKWOW0eo0S5f2HWQYQEIw4TkgLYMgqk88gHpSHJuMkJhYMQWKE7LmJMBdJZMs5Ua19QbF8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
        <!-- Page JS Code -->



        <!-- {{-- @if (Session::has('msg')) -->
    <!-- jQuery(document).ready(function($) { -->
    <!-- Swal.fire({ -->
    <!-- type: '{{ Session::get("msg") == "berhasil" ? "success" : "error" }}', -->
    <!-- title: '{{ Session::get("msg") == "berhasil" ? "Berhasil" : "Gagal" }}', -->
    <!-- showConfirmButton: false, -->
    <!-- timer: 1000 -->
    <!-- }); -->
    <!-- }); -->
    <!-- @endif --}} -->

        @yield('js_after')


        <script>
            //           window.onload = function(){
            //   // code supposed to run once DOM is loaded
            //   $('#tambah-btn').hide();
            //           $('#search-show-btn').hide();
            //           $('#simpan-btn').hide();
            // };



            function sudahExport() {
                Swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'File Sudah di Export'
                });
            }

           /*  */



            $('.delete-so').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - hapus.png') }}";
                var messageTitlePopup = 'Delete Sales Order';
                var messageDescPopup = 'Do you want to delete this Sales Order?';

                var dataIdSO = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-sales-order') }}' + '/' + dataIdSO)
                $('.alert-popup .link-confirm').html('<button type="button" class="btn btn-danger">Delete</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.status-expireds').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/expired.svg') }}";
                var messageTitlePopup = 'Expired!';
                var messageDescPopup = 'Your data has been expired';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-quotation') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').hide();
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.status-closes').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/expired.svg') }}";
                var messageTitlePopup = 'Close!';
                var messageDescPopup = 'Your data has been close';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-quotation') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').hide();
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.delete-invoice').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - hapus.png') }}";
                var messageTitlePopup = 'Delete Invoice';
                var messageDescPopup = 'Do you want to delete this Invoice?';

                var dataIdInvoice = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-invoice') }}' + '/' + dataIdInvoice)
                $('.alert-popup .link-confirm').html('<button type="button" class="btn btn-danger">Delete</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.delete-quotation').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - hapus.png') }}";
                var messageTitlePopup = 'Delete Quotation';
                var messageDescPopup = 'Do you want to delete this Quotation?';

                var dataIdInvoice = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('delete-quotation') }}' + '/' + dataIdInvoice)
                $('.alert-popup .link-confirm').html('<button type="button" class="btn btn-danger">Delete</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })


            $('.convert-quotation').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup-convert.svg') }}";
                var messageTitlePopup = 'Ingin Convert ke SO?';
                var messageDescPopup = 'Anda yakin ingin convert Quotation ke Sales Order?';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('convert-quotation') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.convert-invoice').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup-convert.svg') }}";
                var messageTitlePopup = 'Ingin Convert ke Invoice?';
                var messageDescPopup = 'Anda Akan Melewati Kirim Email!';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('convert-invoice') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.convert-invoice-after-email').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup-convert.svg') }}";
                var messageTitlePopup = 'Ingin Convert ke Invoice?';
                var messageDescPopup = 'Anda yakiin ingin convert SO ke Invoice?';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('convert-invoice') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })


            $('.paid-invoice').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/ubah-status.svg') }}";
                var messageTitlePopup = 'Ingin Mengubah Status?';
                var messageDescPopup = 'Apakah anda yakin ingin mengubah status pesanan?';

                var dataIdInvoice = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('status-paid-invoice') }}' + '/' + dataIdInvoice)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })

            $('.unpaid-invoice').on('click', function() {

                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/ubah-status-2.svg') }}";
                var messageTitlePopup = 'Ingin Mengubah Status?';
                var messageDescPopup = 'Apakah anda yakin ingin mengubah status pesanan?';

                var dataIdInvoice = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('status-unpaid-invoice') }}' + '/' +
                    dataIdInvoice)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>'
                );
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            })


            $('.deal-view').on('click', '.deleteDataBtn', function() {
                var dataId = $(this).attr('data-id');
                var dataType = $(this).attr('data-type');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: ApibaseURL + "/check-exist-data-delete",
                    data: {
                        id: dataId,
                        type: dataType,
                    },
                    dataType: 'json',
                    success: function(data) {
                        ConfirmDelete(dataId, dataType);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            })
            $('#tbdData').on('click', '.deleteDataBtn', function() {

                var dataId = $(this).attr('data-id');
                var dataType = $(this).attr('data-type');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: ApibaseURL + "/check-exist-data-delete",
                    data: {
                        id: dataId,
                        type: dataType,
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.msg == 'exists') {
                            AlertDelete(dataId, dataType);
                        } else {
                            ConfirmDelete(dataId, dataType);
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });

            })

            function ConfirmDelete(id, type) {
                $('.alert-popup .link-confirm').html('');
                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - hapus.png') }}";

                var dataId = id;
                var dataType = type;

                if (dataType == 'customer') {
                    var messageTitlePopup = 'Do you want to delete <br> this Customer?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'product') {
                    var messageTitlePopup = 'Do you want to delete <br> this Product?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'commission') {
                    var iconImgPopup =
                        "{{ asset('public/backend-asset/img/popup/popup - delete - commission - confirm.png') }}";
                    var messageTitlePopup = 'Do you want to delete <br> this Commission?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'reimburse') {
                    var iconImgPopup =
                        "{{ asset('public/backend-asset/img/popup/popup - delete - reimburse - confirm.png') }}";
                    var messageTitlePopup = 'Do you want to delete <br> this Reimburse?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'brand') {
                    var messageTitlePopup = 'Do you want to delete <br> this Brand?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'sales_order') {
                    var messageTitlePopup = 'Do you want to delete <br> this Sales Order?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                if (dataType == 'dealCRM') {
                    var messageTitlePopup = 'Do you want to delete <br> this Deal?';
                    var messageDescPopup = 'This Data will deleted permanent';
                }

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '#')
                $('.alert-popup .link-confirm').html('<button type="submit" form="formDelete' + dataId +
                    '" class="btn btn-danger">Delete</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            }

            function confirmUpdate(selector) {
                $('.alert-popup .link-confirm').html('');
                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                dataType = $(selector).attr('data-page');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";
                var messageTitlePopup = 'Update Data';
                var messageDescPopup = 'Are you sure want update this data?';

                if (dataType == 'customer') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - product - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Customer';
                }

                if (dataType == 'product') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - brand - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Product';
                }

                if (dataType == 'commission') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - brand - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Commission';
                }

                if (dataType == 'reimburse') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - brand - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Reimburse';
                }

                if (dataType == 'brand') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit - brand - confirm.png') }}";
                    var messageTitlePopup = messageTitlePopup + ' <br> Brand';
                }

                if (dataType == 'sales_order') {
                    var messageTitlePopup = messageTitlePopup + ' <br> Sales Order';
                }

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '#')
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Update</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            }

            function confirmConvert(selector) {
                $('.alert-popup .link-confirm').html('');
                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                dataType = $(selector).attr('data-page');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";
                var messageTitlePopup = 'Ingin Convert ke SO?';
                // var messageDescPopup = 'Are you sure want convert Quotation to Sales Order?';
                var messageDescPopup = 'Anda yakin ingin convert Quotation ke Sales Order?';

                var dataIdQuotation = $(this).attr('data-id');

                $('.confirm-button').show();
                $('.alert-notif-button').hide();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .link-confirm').attr('href', '{{ url('convert-quotation') }}' + '/' + dataIdQuotation)
                $('.alert-popup .link-confirm').html(
                    '<button type="submit" form="form-transaction-data" class="btn btn-primary-omsetku">Lanjutkan</button>');
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            }

            function AlertDelete(id, type) {
                $('.alert-popup .link-confirm').html('');
                $('.alert-popup .link-confirm button').removeClass('confirm-proses');

                var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - alert - customer - delete.png') }}";

                var dataId = id;
                var dataType = type;

                if (dataType == 'customer') {
                    var messageTitlePopup = 'Customer Has Sales Order';
                    var messageDescPopup = 'You cannot delete, because this customer has sales order';
                }

                if (dataType == 'product') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - integrated - brand- alert.png') }}";
                    var messageTitlePopup = 'Product Has Sales Order';
                    var messageDescPopup = 'You cannot delete, because this product has sales order';
                }

                if (dataType == 'brand') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - integrated - brand- alert.png') }}";
                    var messageTitlePopup = 'Brand Has Product';
                    var messageDescPopup = 'You cannot delete, because this brand has product';
                }

                if (dataType == 'commission_update') {
                    var iconImgPopup =
                        "{{ asset('public/backend-asset/img/popup/popup - update - commission - alert.png') }}";
                    var messageTitlePopup = 'Successfully Update';
                    var messageDescPopup = 'Your data successfully status update';
                }

                $('.confirm-button').hide();
                $('.alert-notif-button').show();
                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });
                $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                $('.alert-popup .modal-title').html(messageTitlePopup);
                $('.alert-popup .modal-desc').html(messageDescPopup);
            }


            //TOAST MESSAGE
            let session_has = "{{ Session::has('msg_toast') }}";
            let session_get = "{{ Session::get('msg_toast') }}";
            if (session_has) {

                let msgToastget = session_get.split("|");
                let keyWordToast = msgToastget[1];
                let statusToast = msgToastget[0];
                var msgToastText = "";
                if (typeof msgToastget[2] === 'undefined') {

                } else {
                    var msgToastText = msgToastget[2];
                }

                jQuery('#toast--message').toast('show');

                if (statusToast == 'success') {

                    if (keyWordToast == 'add') {
                        var messageTitleToast = 'Successfully Create Data';
                        var messageDescToast = 'Your data Successfully Created';
                    }

                    if (keyWordToast == 'delete') {
                        var messageTitleToast = 'Successfully Delete Data';
                        var messageDescToast = 'Your data Successfully Deleted';
                    }

                    $('#toast--message').removeClass('toast-failed');
                    $('#toast--message').addClass('toast-success');
                    $('#toast--message .toast-header .toast-notif-title').html(messageTitleToast);
                    $('#toast--message .toast-body .toast-notif-desc').html(messageDescToast);

                } else {

                    if (keyWordToast == 'add') {
                        if (msgToastText != "") {
                            var messageDescToast = msgToastText;
                        } else {
                            var messageDescToast = 'Your data Failed Created';
                        }
                        var messageTitleToast = 'Failed Create Data';
                    }

                    if (keyWordToast == 'update') {
                        var messageTitleToast = 'Failed update Data';
                        if (msgToastText != "") {
                            var messageDescToast = msgToastText;
                        } else {
                            var messageDescToast = 'Your data Failed Created';
                        }
                    }

                    if (keyWordToast == 'delete') {
                        var messageTitleToast = 'Failed Delete Data';
                        var messageDescToast = 'Your data Failed Deleted';
                    }
                    
                    if (keyWordToast == 'open') {
                        var messageTitleToast = 'Failed Open Data';
                        var messageDescToast = msgToastget[2];
                    }

                    $('#toast--message').removeClass('toast-success');
                    $('#toast--message').addClass('toast-failed');
                    $('#toast--message .toast-header .toast-notif-title').html(messageTitleToast);
                    $('#toast--message .toast-body .toast-notif-desc').html(messageDescToast);

                }

                //END TOAST MESSAGE



                // has
                /*
                jQuery(function() {
                  Codebase.helpers('notify', {
                    align: 'right', // 'right', 'left', 'center'
                    from: 'top', // 'top', 'bottom'
                    type: '{{ in_array(Session::get('msg'), ['berhasil', 'Berhasil']) ? 'success' : 'danger' }}', // 'info', 'success', 'warning', 'danger'
                    icon: '{{ in_array(Session::get('msg'), ['berhasil', 'Berhasil']) ? 'fa fa-check-circle mr-5 ' : 'fa fa-times-circle mr-5' }}', // Icon class
                    message: '{{ Session::get('msg') }}'
                  });
                });
                */
            }

            //////////// MODAL POPUP ALERT ////////////
            let session_popup_has = "{{ Session::has('msg_popup') }}";
            let session_popup_get = "{{ Session::get('msg_popup') }}";
            if (session_popup_has) {

                let msgPopUpget = session_popup_get.split("|");
                let keyWordPopup = msgPopUpget[1];
                let statusPopup = msgPopUpget[0];

                var msgPopUpText = "";
                if (typeof msgPopUpget[2] === 'undefined') {

                } else {
                    var msgPopUpText = msgPopUpget[2];
                }

                if (keyWordPopup == 'add') {
                    if (msgPopUpText == 'brand') {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - add - brand.png') }}";
                    } else if (msgPopUpText == 'customer') {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - add - customer -alert.png') }}";
                    } else if (msgPopUpText == 'product') {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - add - product - alert.png') }}";
                    } else if (msgPopUpText == 'commission' || msgPopUpText == 'reimburse' || msgPopUpText == 'data_sales') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/popup - add - commission - alert.png') }}";
                    } else if (msgPopUpText == 'target_sales') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/popup - update - commission - alert.png') }}";
                    } else if (msgPopUpText == 'expense' || msgPopUpText == 'task') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/omsetku-popup-success.png') }}";
                    }
                    else {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";
                    }
                }
                if (keyWordPopup == 'update') {
                    if (msgPopUpText == 'commission') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/popup - update edit - commission - alert.png') }}";
                    }else if (msgPopUpText == 'expense' || msgPopUpText == 'task') {
                        var iconImgPopup =
                            "{{ asset('public/backend-asset/img/popup/omsetku-popup-success.png') }}";
                    }
                    else {
                        var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";
                    }
                }

                if (keyWordPopup == 'update-company') {

                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - edit.png') }}";

                }

                if (keyWordPopup == 'email') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/send-email.svg') }}";
                }


                if (keyWordPopup == 'duplicate') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - duplicate.png') }}";
                }

                if (keyWordPopup == 'access') {
                    var iconImgPopup = "{{ asset('public/backend-asset/img/popup/popup - add - customer -alert.png') }}";
                }

                $('.confirm-button').hide();
                $('.alert-notif-button').show();

                $('.alert-popup').modal({
                    show: true,
                    backdrop: 'static',
                    keyboard: false
                });

                if (statusPopup == 'success') {

                    if (keyWordPopup == 'update') {
                        var baseTextTitle = 'Successfully Update';
                        var messageDescPopup = 'Your data Successfully Updated';
                    }

                    if (keyWordPopup == 'update-company') {
                        var baseTextTitle = 'Successfully Moved';
                        var messageDescPopup = 'Your Company Successfully Moved';
                    }

                    if (keyWordPopup == 'add') {
                        var baseTextTitle = 'Successfully Created';
                        var messageDescPopup = 'Your data Successfully Created';
                    }

                    if (keyWordPopup == 'email') {
                        var baseTextTitle = 'Successfully Send Email';
                        var messageDescPopup = 'Your data Successfully Send';
                    }

                    if (keyWordPopup == 'invite') {
                        var baseTextTitle = 'Successfully Invited';
                        var messageDescPopup = 'Your Sales Successfully Invited';
                    }

                    if (msgPopUpText == 'brand') {
                        var messageTitlePopup = baseTextTitle + ' Brand';
                    } else if (msgPopUpText == 'billing') {
                        var messageTitlePopup = baseTextTitle + ' Master Billing';
                    } else if (msgPopUpText == 'bank') {
                        var messageTitlePopup = baseTextTitle + ' Master Bank';
                    } else if (msgPopUpText == 'customer') {
                        var messageTitlePopup = baseTextTitle + ' Customer';
                    } else if (msgPopUpText == 'product') {
                        var messageTitlePopup = baseTextTitle + ' Product';
                    } else if (msgPopUpText == 'commission') {
                        var messageTitlePopup = baseTextTitle + ' Commission';
                    } else if (msgPopUpText == 'reimburse') {
                        var messageTitlePopup = baseTextTitle + ' Reimburse';
                    } else if (msgPopUpText == 'target_sales') {
                        var messageTitlePopup = baseTextTitle + ' Target Sales';
                    } else if (msgPopUpText == 'data_sales') {
                        var messageTitlePopup = baseTextTitle + ' Data Sales';
                    } else if (msgPopUpText == 'company') {
                        var messageTitlePopup = baseTextTitle + ' Company';
                    } else if (msgPopUpText == 'email-quotation') {
                        var messageTitlePopup = baseTextTitle + ' Quotation';
                    } else if (msgPopUpText == 'email-so') {
                        var messageTitlePopup = baseTextTitle + ' Sales Order';
                    } else if (msgPopUpText == 'email-invoice') {
                        var messageTitlePopup = baseTextTitle + ' Invoice';
                    } else if (msgPopUpText == 'update-company') {
                        var messageTitlePopup = baseTextTitle + ' Company';
                    } else {
                        var messageTitlePopup = baseTextTitle + ' Data';
                    }

                    if (keyWordPopup == 'duplicate') {
                        var messageTitlePopup = 'Successfully Duplicate Data';
                        var messageDescPopup = 'Your data Successfully Duplicated';
                    }

                    $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                    $('.alert-popup .modal-title').html(messageTitlePopup);
                    $('.alert-popup .modal-desc').html(messageDescPopup);

                } else {

                    if (keyWordPopup == 'update') {
                        var messageTitlePopup = 'Failed Update Data';
                        var messageDescPopup = 'Your data Failed Updated';
                    }

                    if (keyWordPopup == 'update-company') {
                        var messageTitlePopup = 'Failed Moved Company';
                        var messageDescPopup = 'Your data Failed Updated';
                    }

                    if (keyWordPopup == 'duplicate') {
                        var messageTitlePopup = 'Failed Duplicate Data';
                        var messageDescPopup = 'Your data Failed Duplicated';
                    }

                    if (keyWordPopup == 'email') {
                        var messageTitlePopup = 'Failed Send Email';
                        var messageDescPopup = 'Your data Failed Send';
                    }

                    if (keyWordPopup == 'invite') {
                        // var baseTextTitle = 'Failed Invited';
                        var messageTitlePopup = 'Failed Invited';
                        var messageDescPopup = 'Your Sales is not registered';
                    }

                    if (keyWordPopup == 'access') {
                        // var baseTextTitle = 'Failed Access';
                        var messageTitlePopup = 'Failed Access';
                        var messageDescPopup = 'Your account is not allowed to access';
                    }

                    $('.alert-popup .icon-img-alert').attr('src', iconImgPopup);
                    $('.alert-popup .modal-title').html(messageTitlePopup);
                    $('.alert-popup .modal-desc').html(messageDescPopup);

                }
            }

            //END MODAL POPUP ALERT

            // {{-- @endif --}}

            @if (Session::has('msg_harga'))
                jQuery(function() {
                    Codebase.helpers('notify', {
                        align: 'right', // 'right', 'left', 'center'
                        from: 'top', // 'top', 'bottom'
                        type: 'danger', // 'info', 'success', 'warning', 'danger'
                        icon: 'fa fa-check-circle mr-5', // Icon class
                        @if (Session::get('msg_harga') == 'harga_1')
                            message: 'Harga 1 tidak boleh kurang dari harga terendah'
                        @elseif (Session::get('msg_harga') == 'harga_2')
                            message: 'Harga 2 tidak boleh kurang dari harga terendah'
                        @elseif (Session::get('msg_harga') == 'harga_3')
                            message: 'Harga 3 tidak boleh kurang dari harga terendah'
                        @elseif (Session::get('msg_harga') == 'harga_4')
                            message: 'Harga 4 tidak boleh kurang dari harga terendah'
                        @elseif (Session::get('msg_harga') == 'harga_5')
                            message: 'Harga 5 tidak boleh kurang dari harga terendah'
                        @endif
                    });
                });
            @endif


            @if (Session::has('msgr'))

                jQuery(function() {
                    Codebase.helpers('notify', {
                        align: 'right', // 'right', 'left', 'center'
                        from: 'top', // 'top', 'bottom'
                        type: '{{ Session::get('msgr') == 'berhasil' ? 'success' : 'danger' }}', // 'info', 'success', 'warning', 'danger'
                        icon: '{{ Session::get('msgr') == 'berhasil' ? 'fa fa-check-circle mr-5 ' : 'fa fa-times-circle mr-5 ' }}', // Icon class
                        message: '{{ Session::get('msgr') == 'berhasil' ? 'Data Excel Berhasil Diimport!' : 'Row Excel Ada Yang Kosong / Format Salah / Data Sudah Ada!' }}'
                    });
                });
            @endif

            @if (Session::has('msgs'))
                jQuery(function() {
                    Codebase.helpers('notify', {
                        align: 'right', // 'right', 'left', 'center'
                        from: 'top', // 'top', 'bottom'
                        type: '{{ Session::get('msgs ') == 'berhasil' ? 'success ' : 'danger ' }}', // 'info', 'success', 'warning', 'danger'
                        icon: '{{ Session::get('msgs ') == 'berhasil' ? 'fa fa-check-circle mr-5 ' : 'fa fa-times-circle mr-5 ' }}', // Icon class
                        message: '{{ Session::get('msgs ') == 'berhasil' ? 'Data Excel Berhasil Diimport!' : 'Row Excel Ada Yang Kosong / Format Salah!' }}'
                    });
                });
            @endif

            @if (Session::has('msg_export'))
                @if (Session::get('msg_export') == 'berhasil')
                    jQuery(function() {
                        Codebase.helpers('notify', {
                            align: 'right', // 'right', 'left', 'center'
                            from: 'top', // 'top', 'bottom'
                            type: '{{ Session::get('msg_export ') == 'berhasil' ? 'success ' : 'danger ' }}', // 'info', 'success', 'warning', 'danger'
                            icon: '{{ Session::get('msg_export ') == 'berhasil' ? 'fa fa-check-circle mr-5 ' : 'fa fa-times-circle mr-5 ' }}', // Icon class
                            message: '{{ Session::get('msg_export ') == 'berhasil' ? 'Data Excel Berhasil Diexport!' : 'Data Excel Gagal Diexport!' }}'
                        });
                    });
                @endif
            @endif

            @if (Session::has('failed'))
                jQuery(function() {
                    Codebase.helpers('notify', {
                        align: 'right', // 'right', 'left', 'center'
                        from: 'top', // 'top', 'bottom'
                        type: 'danger', // 'info', 'success', 'warning', 'danger'
                        icon: 'fa fa-times-circle mr-5', // Icon class
                        message: '{{ Session::get('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          failed ') }}'
                    });
                });
            @endif


            @if (Session::has('message'))
                @if (Session::get('message') == 'sama')
                    $(function() {
                        var pesan = 'No PO sudah dipakai';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'No PO sudah terpakai! silahkan menggunakan No PO lainnya'
                        });
                    });
                @endif
                @if (Session::get('message') == 'nama_barang')
                    $(function() {
                        var pesan = 'Barang Tidak Boleh Kosong';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Barang Tidak Boleh Kosong'
                        });
                    });
                @endif
                @if (Session::get('message') == 'tanggal_keluar')
                    $(function() {
                        var pesan = 'Tanggal Keluar Tidak Boleh Kosong';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Tanggal Keluar Tidak Boleh Kosong'
                        });
                    });
                @endif
                @if (Session::get('message') == 'data_ir')
                    $(function() {
                        var pesan =
                            'PO ini terdapat data Item Received, silahkan untuk menghapus terlebih dahulu data Item Received terkait!';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'PO ini terdapat data Item Received, silahkan untuk menghapus terlebih dahulu data Item Received terkait!'
                        });
                    });
                @endif
                @if (Session::get('message') == 'data_do')
                    $(function() {
                        var pesan =
                            'PO ini terdapat data DO, silahkan untuk menghapus terlebih dahulu data DO terkait!';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'PO ini terdapat data DO, silahkan untuk menghapus terlebih dahulu data DO terkait!'
                        });
                    });
                @endif
                @if (Session::get('message') == 'data_rec_p')

                    @if (Session::has('no_inv'))
                        var no_inv =
                            '{{ Session::get('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          no_inv ') }}';
                    @else
                        var no_inv = '-';
                    @endif

                    $(function() {



                        var pesan =
                            'Invoice ini terdapat data Record Payment, silahkan untuk menghapus terlebih dahulu Record Payment Terkait!';
                        // printErrorMsg(pesan);
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Invoice ' + no_inv +
                                ' terdapat data Record Payment, silahkan untuk menghapus terlebih dahulu Record Payment Terkait!'
                        });
                    });
                @endif
            @endif


            @if (\Session::has('login'))
                @if (Session::get('login') == true)
                    // $(window).load(function() {

                    //     // $('#page-header-loader').hide();

                    //   });
                    $(document).ready(function() {
                        $('.modal-ajax').hide();
                        $('#page-loader').hide();
                    });
                @endif
            @else
            @endif

            //   $('.modal-ajax').hide();
            $(document).ready(function() {
                var tes = document.getElementById("jumlah_bayar");
                if (tes != null) {
                    tes.value = formatRupiah(document.getElementById("jumlah_bayar").value, "");
                }

                var tes_total = document.getElementById("total_format");
                if (tes_total != null) {
                    tes_total.value = formatRupiah(document.getElementById("total_format").value, "");
                }

                var harga_pembelian = document.getElementById("harga_pembelian");
                if (harga_pembelian != null) {
                    harga_pembelian.value = formatRupiah(document.getElementById("harga_pembelian").value, "");
                }

                var harga_penjualan = document.getElementById("harga_penjualan");
                if (harga_penjualan != null) {
                    harga_penjualan.value = formatRupiah(document.getElementById("harga_penjualan").value, "");
                }




                $(document).ajaxStart(function() {
                    // $(".modal-ajax").show();
                    $('#page-header-loader').show();
                }).ajaxStop(function() {
                    $('#page-header-loader').hide();
                    // $(".modal-ajax").hide();
                });
            });

            function hapusAlert(link) {

                Swal.fire({

                    title: 'Anda Yakin?',

                    text: "Anda Akan Menghapus Data Ini!",

                    type: 'warning',

                    showCancelButton: true,

                    confirmButtonColor: '#3085d6',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Hapus Data!',

                    cancelButtonText: 'Batal',

                }).then((result) => {

                    if (result.value) {

                        window.location.href = '{{ url('/') . '/' }}' + link;

                    }

                });

            }

            var rph = document.getElementById("jumlah_bayar");
            if (rph != null) {
                rph.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    rph.value = formatRupiah(this.value, "");
                });
            }

            var total_format = document.getElementById("total_format");
            if (total_format != null) {
                total_format.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    total_format.value = formatRupiah(this.value, "");
                });
            }

            var harga_pembelian = document.getElementById("harga_pembelian");

            if (harga_pembelian != null) {
                harga_pembelian.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    harga_pembelian.value = formatRupiah(this.value, "");
                });
            }

            var harga_penjualan = document.getElementById("harga_penjualan");

            if (harga_penjualan != null) {
                harga_penjualan.addEventListener("keyup", function(e) {
                    // tambahkan 'Rp.' pada saat form di ketik
                    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
                    harga_penjualan.value = formatRupiah(this.value, "");
                });
            }

            // var subtotal_id = document.getElementById("subtotal_id");

            // if (subtotal_id != null) {
            //     subtotal_id.addEventListener("keyup", function(e) {
            //   // tambahkan 'Rp.' pada saat form di ketik
            //   // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            //   subtotal_id.value = formatRupiah(this.value, "");
            // });
            // }



            function formatRupiah(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, "").toString(),
                    split = number_string.split(","),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                // tambahkan titik jika yang di input sudah menjadi angka ribuan
                if (ribuan) {
                    separator = sisa ? "." : "";
                    rupiah += separator + ribuan.join(".");
                }

                rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
                return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
            }

            function viewIDCurrency(bilangan) {
                var number_string = bilangan.toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    length = split[0].length,
                    ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

                if (length > 3) {

                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }
                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                } else {
                    rupiah = number_string;
                }

                return rupiah;
            }


            function NotAllow() {
                Swal.fire({
                    type: 'error',
                    title: 'Tidak diizinkan!',
                    text: 'Kamu belum dapat mengakses!'
                });
            }

            function HaveApprove() {
                Swal.fire({
                    type: 'error',
                    title: 'Tidak diizinkan!',
                    text: 'Kamu sudah mendapatkan Approv! Tidak bisa me-request Approval Kembali'
                });
            }

            function redirectRow(url) {

                location.href = url;

            }

            function validate(evt) {
                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }

                var regex = /[0-9]/;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }

            }
            $(function() {

                $("#due_date").datepicker({
                    startDate: '-0d',
                    changeMonth: true,
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });

                $("#date-target").datepicker({

                    changeMonth: true,
                    changeYear: true,
                    format: 'mm/yyyy',
                    /*autoclose: true,*/
                    showButtonPanel: true,
                    // todayHighlight: true,
                    onClose: function(dateText, inst) {
                        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                        $(this).datepicker('setDate', new Date(year, month, 1));
                    }
                });

                $("#periodTarget").datepicker({

                    changeMonth: true,
                    changeYear: true,
                    format: "mm-yyyy",
                    startView: "months",
                    minViewMode: "months",
                    /*autoclose: true,*/
                    showButtonPanel: true,
                    // todayHighlight: true,
                    onClose: function(dateText, inst) {
                        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                        $(this).datepicker('setDate', new Date(year, month, 1));
                    }
                });

                $(".bulanTarget").datepicker({

                    changeMonth: true,
                    changeYear: true,
                    format: "mm-yyyy",
                    startView: "months",
                    minViewMode: "months",
                    /*autoclose: true,*/
                    showButtonPanel: true,
                    // todayHighlight: true,
                    onClose: function(dateText, inst) {
                        var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                        var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                        $(this).datepicker('setDate', new Date(year, month, 1));
                    }
                });


                $("#datepicker").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $(".datepicker").datepicker({
                    startDate: '01/01/1945',
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });

                $(".datepicker-2").datepicker({
                    startDate: '01/01/1945',
                    format: 'dd/mm/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });

                $("#datepicker-2").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $("#datepicker-3").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $("#datepicker-4").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $("#datepicker-5").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });
                $("#datepicker-6").datepicker({
                    startDate: '01/01/1945',
                    format: 'mm/dd/yyyy',
                    autoclose: true,
                    todayHighlight: true,
                });

            });

            var myText = document.getElementsByClassName("myText");

            for (var i = 0; i < myText.length; i++) {
                myText[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    if (current.length > 0) {
                        current[0].classList.remove("active");
                    }
                    this.classList.add("active");
                });
            }
        </script>
        @yield('js_before')
    </body>

</html>
