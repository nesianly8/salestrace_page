@extends('layouts.app-backend-omsetku')

@section('title')
    Quotation
@stop

@section('title_header')
@stop



@section('link-tambah')
    {{ url('tambah-produk') }}
@stop

@section('custom-pagination')
@stop

@section('css_after')
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"
        integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <style>

    </style>
@endsection

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ URL::asset('public/backend-asset/js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <style>
        section.desktop-show {
            display: block !important;
        }

        section.mobile-show {
            display: none !important;
        }

        #disabled_box {
            cursor: not-allowed;
        }


        .title-page-header {
            color: #000;
            text-align: center;
            font-family: Roboto;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: 60px;
        }

        .title-page-content {
            color: #000;
            font-family: Inter;
            font-size: 28px;
            font-style: normal;
            font-weight: 600;
            line-height: 50px;
            /* 178.571% */
        }

        .subtitle-page-header {
            color: #000;
            text-align: center;
            font-family: Roboto;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 20.5px;
            /* 128.125% */
        }

        .subtitle-page-content {
            color: #4C526C;
            text-align: center;
            font-family: Inter;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: 0px !important;
            margin-left: 0px !important;
        }

        .img-content {
            width: 100%;
        }

        .header-text-item-kiri {
            text-align: left;
            color: #000;
            font-family: Roboto;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 27.9px;
            /* 174.375% */
        }

        .header-text-item-kanan {
            text-align: right;
            color: #000;
            font-family: Roboto;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 27.9px;
            /* 174.375% */
        }

        .header-content-item {
            text-align: left;
            color: #000;
            font-family: Roboto;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: 37.5px;
        }

        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #fff !important;
            background-color: #1E3168 !important;
            border-color: #e4e7ed !important;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
            background: #fff;
        }

        .nav-link {
            display: block;
            padding: 0.75rem 2rem !important;
        }

        .row-add {
            width: 110% !important;
        }

        .w-icon-desk1 {
            width: 2vw;
            margin-right: 5px;
        }

        .icon-text-hr {
            margin-top: 35px;
            margin-bottom: 10px;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 3px solid #e4e7ed !important;
        }
        
        /* -------------------------------------------------------------------------------------------------------------------------------- */   

      /*--------- responsive laptop/pc ---------*/
        /*
            desktop zoom custom1

            main width: 1367px;
            */
        @media screen and (min-width: 1321px) and (max-width: 1380px) {

            .row-add {
                width: 100% !important;
            }

            .pad-con {
                padding: 0px 30px;
            }

        }


        @media screen and (max-width: 1515px) {

            /*  */
        }


        /* Zoom 150% */
        @media screen and (min-width: 1000px) and (max-width: 1098px) {
            .row-add {
                width: 100% !important;
            }

            .pad-con {
                padding: 0px 30px;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: 20px;
            }

            .header-text-item-kanan {
                text-align: right;
                color: #000;
                font-family: Roboto;
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: 20px;
            }

            .header-content-item {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 27px;
                font-style: normal;
                font-weight: 800;
                line-height: 26.5px;
            }

            .title-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 25px;
                font-style: normal;
                font-weight: 700;
                line-height: 60px;
                margin-bottom: 0px;
                margin-top: 10px;
            }

        }


        @media screen and (min-width: 1248px) and (max-width: 1300px) {

            .row-add {
                width: 100% !important;
            }

            .pad-con {
                padding: 0px 30px;
            }
        }


        /* Zoom 125% */
        @media screen and (min-width: 1098px) and (max-width: 1300px) {

            /*  */
        }


        /* Zoom 110% */
        @media screen and (min-width: 1300px) and (max-width: 1410px) {

            /*  */
        }


        /* Zoom 90% */
        @media screen and (min-width: 1556px) and (max-width: 1600px) {

            .row-add {
                width: 120% !important;
            }

            .title-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 42px;
                font-style: normal;
                font-weight: 700;
                line-height: 60px;
            }

            .subtitle-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 24px;
                font-style: normal;
                font-weight: 400;
                line-height: 20.5px;
            }

            .nav-link {
                display: block;
                padding: 0.75rem 3.5rem !important;
            }

        }

        @media screen and (min-width: 1920px) and (max-width: 2560px) {

            .row-add {
                width: 120% !important;
            }

            .title-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 42px;
                font-style: normal;
                font-weight: 700;
                line-height: 75px;
            }

            .subtitle-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 24px;
                font-style: normal;
                font-weight: 400;
                line-height: 20.5px;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 26px;
                font-style: normal;
                font-weight: 400;
                line-height: 41.9px;
                /* 174.375% */
            }

            .header-text-item-kanan {
                text-align: right;
                color: #000;
                font-family: Roboto;
                font-size: 26px;
                font-style: normal;
                font-weight: 400;
                line-height: 28.9px;
                /* 174.375% */
            }

            .header-content-item {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 44px;
                font-style: normal;
                font-weight: 800;
                line-height: 44.5px;
            }

            .nav-link {
                display: block;
                padding: 1.25rem 4.5rem !important;
                font-size: large;
            }

        }

      /*--------- end responsive laptop/pc ---------*/

        /* -------------------------------------------------------------------------------------------------------------------------------- */

      /*--------- responsive handphone ---------*/


       /* phone mode */
        @media screen and (max-width: 459px) {
            section.desktop-show {
                display: none !important;
            }

            section.mobile-show {
                display: block !important;
            }

        }

       /* END */

       /* phone mode 1 */
        @media screen and (max-width: 458px) {

            .title-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 31.41px;
                font-style: normal;
                font-weight: 700;
                line-height: 37.692px;
               /* 120% */
            }

            .subtitle-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .h5-m {
                margin-bottom: 10px;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .w-icon-desk1 {
                width: 8vw;
                margin-right: 5px;
            }

            .icon-text-hr {
                margin-top: 0px;
                margin-bottom: 10px;
            }

            .container {
                width: 100%;
                padding-right: 0px !important;
                padding-left: 0px !important;
                margin-right: auto;
                margin-left: auto;
            }


        }

       /* END 1 */

       /* phone mode 2 */
        @media screen and (max-width: 428px) {}

       /* END */

       /* phone mode 3 */
        @media screen and (max-width: 426px) {}

       /* END */

       /* phone mode 4 */
        @media screen and (max-width: 414px) {}

       /* END */

       /* phone mode 5 */
        @media screen and (max-width: 409px) {}

       /* END */


       /* phone mode 6 */
        @media screen and (max-width: 395px) {}

       /* END */


       /* phone mode 7 */
        @media screen and (max-width: 376px) {}

       /* END */

       /* phone mode 8 */
        @media screen and (max-width: 361px) {

            .title-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 28px;
                font-style: normal;
                font-weight: 700;
                line-height: 35px;
            }

            .subtitle-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .h5-m {
                margin-bottom: 10px;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 21px;
               /* 174.375% */
            }

            .header-text-item-kanan {
                text-align: right;
                color: #000;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 21px;
               /* 174.375% */
            }

            .header-content-item {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 26px;
                font-style: normal;
                font-weight: 800;
                line-height: 30px;
            }

        }

       /* END */

       /* phone mode 8 */
        @media screen and (max-width: 321px) {

        }

       /* END */

      /*--------- end responsive handphone ---------*/

    </style>
@stop

@section('content')
    {{-- Header Start--}}

      {{-- Header Desktop Start--}}
        <section class="desktop-show py-4 d-flex justify-content-center">
            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <h3 class="title-page-header">
                        Permudah pekerjaan sales menggunakan quotation
                    </h3>
                </div>
                <div class="col-md-12">
                    <p class="subtitle-page-header">
                        Pastikan tim gudang selalu siap dengan barang dengan quotation
                    </p>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="sales-tab" data-toggle="tab" href="#sales">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="owner-tab" data-toggle="tab" href="#owner">Owner</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
      {{-- Header Desktop End--}}

      {{-- Header Mobile Start--}}
        <section class="mobile-show py-4 d-flex justify-content-center">
            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <h3 class="title-page-header">
                        Permudah pekerjaan sales menggunakan quotation
                    </h3>
                </div>
                <div class="col-md-12">
                    <p class="subtitle-page-header">
                        Pastikan tim gudang selalu siap dengan barang dengan quotation
                    </p>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="sales-tab" data-toggle="tab" href="#sales">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="owner-tab" data-toggle="tab" href="#owner">Owner</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
      {{-- Header Mobile End--}}

    {{-- Header End--}}


    {{-- Content quotation anda Start--}}

    <!-- Tabs Content -->
    <div class="tab-content">


        <!-- Sales Tab -->
        <div class="tab-pane fade show active" id="sales">

          {{-- Content quotation SALES Desktop Start--}}
            <section id="content1" class="menu-1 desktop-show text-center">
                {{-- ADD --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('0')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Tambah Invoice
                            </h5>
                            <hr class="">
                        </div>
                        <div class="content-feature-0 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- ADD CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Membuat quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Pilih  tombol "buat quotation" pada dashboard <br> untuk mulai membuat quotation untuk <br> penjualan barang mu
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Membuat quotation baru</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Klik tombol tambah untuk membuat data quotation baru
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Lengkapi data penjualan barang mu sesuai dengan data yang ada 
                                                    <br> 1. Pilih customer yang melakukan transaksi
                                                    <br> 2. Tanggal Pembelian
                                                    <br> 3. Data produk seperti harga, kuantitas dan catatan (apabila diperlukan)
                                                    <br> 4. Biaya pengiriman (jika ada)
                                                    <br> Lalu klik simpan untuk menyimpan data  quotation 
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Tampilan quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah quotation dibuat maka akan muncul tampilan data quotation mu, pastikan data yang disajikan sudah benar sesuai yang kamu inginkan
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo4.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo5.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Data quotation tersimpan</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Data quotation yang kamu buat akan tampil <br> dalam data list quotation setelah kamu simpan
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ADD --}}

                {{-- EDIT --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('1')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Edit Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-1 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- EDIT CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Edit quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk mengedit quotation, silahkan pilih quotation yang ingin kamu edit lalu , ketika muncul jendela quotation seperti di samping, klik tombol edit untuk mulai mengubah data
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Mengedit data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Mulai edit quotation mu dengan mengubah isi data yang sesuai dengan keinginan mu, 
                                                    <br> 1. Customer yang melakukan penjualan
                                                    <br> 2. Tanggal pembelian
                                                    <br> 3. Data produk seperti Nama barang, harga,  kuantitas, dan catatan (apabila perlu)
                                                    <br> 4. Biaya pengiriman (jika ada)
                                                    <br> Lalu klik simpan untuk menyimpan data yang baru kamu ubah.
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Berhasil edit quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu simpan data yang baru maka dengan otomatis data quotation tersebut sudah ter-ubah di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- EDIT --}}

                {{-- DELETE --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('2')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Detele Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-2 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- DELETE CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Menghapus quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk menghapus quotation, silahkan pilih quotation yang ingin kamu hapus lalu , ketika muncul  tampilan quotation seperti di samping, klik tombol hapus untuk mulai menghapus data
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Konfirmasi hapus quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Ketika sudah klik tombol hapus maka akan muncul tampilan konfirmasi untuk menghapus data dari quotation, klik hapus untuk menghapus dan klik batal untuk membatalkan penghapusan data quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Berhasil menghapus data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu hapus data quotation, Maka dengan otomatis data quotation tersebut sudah ter-hapus dari di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DELETE --}}

                {{-- DUPLICATE --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('3')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Duplicate Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-3 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- DUPLICATE CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Menduplikasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk menduplikasi data quotation, silahkan pilih quotation yang ingin kamu duplikasi lalu , ketika muncul jendela quotation seperti di samping, klik tombol “duplicate” untuk mulai menduplikasi data quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Isi data penjualan barang mu sesuai dengan data yang ada , Lalu klik simpan untuk menyimpan data quotation yang kamu ingin duplikasi
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Konfirmasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Ketika sudah klik tombol simpan maka akan muncul tampilan konfirmasi untuk menduplikasi data dari quotation, 
                                                    klik selesai untuk menyelesaikan duplikasi dari data quotation mu 
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Berhasil menduplikasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu hapus data quotation, Maka dengan otomatis data quotation tersebut sudah ter-hapus dari di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo4.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DUPLICATE --}}
            </section>
          {{-- Content quotation SALES Desktop End--}}

          {{-- Content quotation SALES Mobile Start--}}
            <section id="content1" class="menu-1 mobile-show text-center">
              <div class="container py-4">
                {{-- ADD --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('0')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Tambah Invoice
                            </h5>
                            <hr class="">
                        </div>
                        <div class="content-feature-0 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- ADD CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Membuat quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Pilih  tombol "buat quotation" pada dashboard untuk mulai membuat quotation untuk penjualan barang mu
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Membuat quotation baru</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Klik tombol tambah untuk membuat data quotation baru
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Lengkapi data penjualan barang mu sesuai dengan data yang ada 
                                                    <br> 1. Pilih customer yang melakukan transaksi
                                                    <br> 2. Tanggal Pembelian
                                                    <br> 3. Data produk seperti harga, kuantitas dan catatan (apabila diperlukan)
                                                    <br> 4. Biaya pengiriman (jika ada)
                                                    <br> Lalu klik simpan untuk menyimpan data  quotation 
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo4.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Tampilan quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah quotation dibuat maka akan muncul tampilan data quotation mu, pastikan data yang disajikan sudah benar sesuai yang kamu inginkan
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo5.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Data quotation tersimpan</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Data quotation yang kamu buat akan tampil dalam data list quotation setelah kamu simpan
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ADD --}}

                {{-- EDIT --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('1')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Edit Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-1 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- EDIT CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Edit quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk mengedit quotation, silahkan pilih quotation yang ingin kamu edit lalu , ketika muncul jendela quotation seperti di samping, klik tombol edit untuk mulai mengubah data
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Mengedit data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Mulai edit quotation mu dengan mengubah isi data yang sesuai dengan keinginan mu, 
                                                    <br> 1. Customer yang melakukan penjualan
                                                    <br> 2. Tanggal pembelian
                                                    <br> 3. Data produk seperti Nama barang, harga,  kuantitas, dan catatan (apabila perlu)
                                                    <br> 4. Biaya pengiriman (jika ada)
                                                    <br> Lalu klik simpan untuk menyimpan data yang baru kamu ubah.
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Berhasil edit quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu simpan data yang baru maka dengan otomatis data quotation tersebut sudah ter-ubah di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- EDIT --}}

                {{-- DELETE --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('2')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Detele Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-2 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- DELETE CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Menghapus quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk menghapus quotation, silahkan pilih quotation yang ingin kamu hapus lalu , ketika muncul  tampilan quotation seperti di samping, klik tombol hapus untuk mulai menghapus data
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Konfirmasi hapus quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Ketika sudah klik tombol hapus maka akan muncul tampilan konfirmasi untuk menghapus data dari quotation, klik hapus untuk menghapus dan klik batal untuk membatalkan penghapusan data quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Berhasil menghapus data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu hapus data quotation, Maka dengan otomatis data quotation tersebut sudah ter-hapus dari di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DELETE --}}

                {{-- DUPLICATE --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('3')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Duplicate Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-3 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- DUPLICATE CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Menduplikasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk menduplikasi data quotation, silahkan pilih quotation yang ingin kamu duplikasi lalu , ketika muncul jendela quotation seperti di samping, klik tombol “duplicate” untuk mulai menduplikasi data quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Isi data penjualan barang mu sesuai dengan data yang ada , Lalu klik simpan untuk menyimpan data quotation yang kamu ingin duplikasi
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Konfirmasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Ketika sudah klik tombol simpan maka akan muncul tampilan konfirmasi untuk menduplikasi data dari quotation, 
                                                    klik selesai untuk menyelesaikan duplikasi dari data quotation mu 
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo4.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Berhasil menduplikasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu hapus data quotation, Maka dengan otomatis data quotation tersebut sudah ter-hapus dari di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DUPLICATE --}}
              </div>
            </section>
          {{-- Content quotation SALES Mobile End--}}

        </div>
        <!-- Sales Tab -->


        <!-- Owner Tab -->
        <div class="tab-pane fade" id="owner">

          {{-- Content quotation OWNER Desktop Start--}}
            <section id="content1" class="menu-1 desktop-show text-center">
                {{-- ADD --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('0')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Tambah Invoice
                            </h5>
                            <hr class="">
                        </div>
                        <div class="content-feature-0 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- ADD CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Membuat quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Pilih  tombol "buat quotation" pada dashboard <br> untuk mulai membuat quotation untuk <br> penjualan barang mu
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Membuat quotation baru</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Klik tombol tambah untuk membuat data quotation baru
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Lengkapi data penjualan barang mu sesuai dengan data yang ada 
                                                    <br> 1. Pilih sales yang melakukan penjualan
                                                    <br> 2. Pilih customer yang melakukan transaksi
                                                    <br> 3. Tanggal Pembelian
                                                    <br> 4. Data produk seperti harga, kuantitas dan catatan (apabila diperlukan)
                                                    <br> 5. Biaya pengiriman (jika ada)
                                                    <br> Lalu klik simpan untuk menyimpan data  quotation 
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Tampilan quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah quotation dibuat maka akan muncul tampilan data quotation mu, pastikan data yang disajikan sudah benar sesuai yang kamu inginkan
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo4.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo5.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Data quotation tersimpan</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Data quotation yang kamu buat akan tampil <br> dalam data list quotation setelah kamu simpan
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ADD --}}

                {{-- EDIT --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('1')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Edit Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-1 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- EDIT CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Edit quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk mengedit quotation, silahkan pilih quotation yang ingin kamu edit lalu , ketika muncul jendela quotation seperti di samping, klik tombol edit untuk mulai mengubah data
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Mengedit data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Mulai edit quotation mu dengan mengubah isi data yang sesuai dengan keinginan mu, 
                                                    <br> 1. Pilih sales yang melakukan penjualan
                                                    <br> 2. Pilih customer yang melakukan transaksi
                                                    <br> 3. Tanggal Pembelian
                                                    <br> 4. Data produk seperti harga, kuantitas dan catatan (apabila diperlukan)
                                                    <br> 5. Biaya pengiriman (jika ada)
                                                    <br> Lalu klik simpan untuk menyimpan data yang baru kamu ubah.
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Berhasil edit quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu simpan data yang baru maka dengan otomatis data quotation tersebut sudah ter-ubah di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- EDIT --}}

                {{-- DELETE --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('2')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Detele Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-2 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- DELETE CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Menghapus quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk menghapus quotation, silahkan pilih quotation yang ingin kamu hapus lalu , ketika muncul  tampilan quotation seperti di samping, klik tombol hapus untuk mulai menghapus data
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Konfirmasi hapus quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Ketika sudah klik tombol hapus maka akan muncul tampilan konfirmasi untuk menghapus data dari quotation, klik hapus untuk menghapus dan klik batal untuk membatalkan penghapusan data quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Berhasil menghapus data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu hapus data quotation, Maka dengan otomatis data quotation tersebut sudah ter-hapus dari di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DELETE --}}

                {{-- DUPLICATE --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('3')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Duplicate Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-3 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- DUPLICATE CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Menduplikasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk menduplikasi data quotation, silahkan pilih quotation yang ingin kamu duplikasi lalu , ketika muncul jendela quotation seperti di samping, klik tombol “duplicate” untuk mulai menduplikasi data quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Isi data penjualan barang mu sesuai dengan data yang ada , Lalu klik simpan untuk menyimpan data quotation yang kamu ingin duplikasi
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Konfirmasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Ketika sudah klik tombol simpan maka akan muncul tampilan konfirmasi untuk menduplikasi data dari quotation, 
                                                    klik selesai untuk menyelesaikan duplikasi dari data quotation mu 
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 ><strong class="header-content-item d-flex">Berhasil menduplikasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu hapus data quotation, Maka dengan otomatis data quotation tersebut sudah ter-hapus dari di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo4.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DUPLICATE --}}
            </section>
          {{-- Content quotation OWNER Desktop End--}}

          {{-- Content quotation OWNER Mobile Start--}}
            <section id="content1" class="menu-1 mobile-show text-center">
              <div class="container py-4">
                {{-- ADD --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('0')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Tambah Invoice
                            </h5>
                            <hr class="">
                        </div>
                        <div class="content-feature-0 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- ADD CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Membuat quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Pilih  tombol "buat quotation" pada dashboard untuk mulai membuat quotation untuk penjualan barang mu
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Membuat quotation baru</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Klik tombol tambah untuk membuat data quotation baru
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Lengkapi data penjualan barang mu sesuai dengan data yang ada 
                                                    <br> 1. Pilih sales yang melakukan penjualan
                                                    <br> 2. Pilih customer yang melakukan transaksi
                                                    <br> 3. Tanggal Pembelian
                                                    <br> 4. Data produk seperti harga, kuantitas dan catatan (apabila diperlukan)
                                                    <br> 5. Biaya pengiriman (jika ada)
                                                    <br> Lalu klik simpan untuk menyimpan data  quotation 
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo4.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Tampilan quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah quotation dibuat maka akan muncul tampilan data quotation mu, pastikan data yang disajikan sudah benar sesuai yang kamu inginkan
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-membuat-quo5.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Data quotation tersimpan</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Data quotation yang kamu buat akan tampil dalam data list quotation setelah kamu simpan
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ADD --}}

                {{-- EDIT --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('1')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Edit Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-1 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- EDIT CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Edit quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk mengedit quotation, silahkan pilih quotation yang ingin kamu edit lalu , ketika muncul jendela quotation seperti di samping, klik tombol edit untuk mulai mengubah data
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Mengedit data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Mulai edit quotation mu dengan mengubah isi data yang sesuai dengan keinginan mu, 
                                                    <br> 1. Pilih sales yang melakukan penjualan
                                                    <br> 2. Pilih customer yang melakukan transaksi
                                                    <br> 3. Tanggal Pembelian
                                                    <br> 4. Data produk seperti harga, kuantitas dan catatan (apabila diperlukan)
                                                    <br> 5. Biaya pengiriman (jika ada)
                                                    <br> Lalu klik simpan untuk menyimpan data yang baru kamu ubah.
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-edit-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Berhasil edit quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu simpan data yang baru maka dengan otomatis data quotation tersebut sudah ter-ubah di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- EDIT --}}

                {{-- DELETE --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('2')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Detele Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-2 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- DELETE CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Menghapus quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk menghapus quotation, silahkan pilih quotation yang ingin kamu hapus lalu , ketika muncul  tampilan quotation seperti di samping, klik tombol hapus untuk mulai menghapus data
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Konfirmasi hapus quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Ketika sudah klik tombol hapus maka akan muncul tampilan konfirmasi untuk menghapus data dari quotation, klik hapus untuk menghapus dan klik batal untuk membatalkan penghapusan data quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-delete-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Berhasil menghapus data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu hapus data quotation, Maka dengan otomatis data quotation tersebut sudah ter-hapus dari di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DELETE --}}

                {{-- DUPLICATE --}}
                <div class="col-12 col-sm-12 col-md-12 col-lg-12"
                    onclick="toggleContent('3')">
                    <div class="item-feature">
                        <div class="title-feature">
                            <h5 class="icon-text-hr d-flex align-items-center">
                                <img src="https://omsetku-dev.globaldeva.com/public/asset-home/omsetku-accordion-on-transaction.png"
                                    alt="" srcset="" class="w-icon-desk1"> Duplicate Invoice
                            </h5>
                            <hr class="hr-item">
                        </div>
                        <div class="content-feature-3 d-none h-0" style="transition: height .35s ease-in-out;">
                            {{-- DUPLICATE CONTENT --}}
                            <div class="pad-con">
                                <div class="row pb-4 pt-4">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Menduplikasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Untuk menduplikasi data quotation, silahkan pilih quotation yang ingin kamu duplikasi lalu , ketika muncul jendela quotation seperti di samping, klik tombol “duplicate” untuk mulai menduplikasi data quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo2.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Isi data penjualan barang mu sesuai dengan data yang ada , Lalu klik simpan untuk menyimpan data quotation yang kamu ingin duplikasi
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo3.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Konfirmasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Ketika sudah klik tombol simpan maka akan muncul tampilan konfirmasi untuk menduplikasi data dari quotation, 
                                                    klik selesai untuk menyelesaikan duplikasi dari data quotation mu 
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-4 pt-2">
                                    <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                        <img src="omsetku-asset/quo/omsetku-asset-duplicate-quo4.png" class="img-content" alt="" style="margin-left: 0px">
                                    </div>
                                    <div class="col-lg-6 pt-4 pl-0 pt-lg-0" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                        <div class="row mb-4">
                                            <div class="col-md-11 col-lg-11">
                                                <h5 class="h5-m"><strong class="header-content-item d-flex">Berhasil menduplikasi data quotation</strong></h5>
                                                <p class="header-text-item-kiri" >
                                                    Setelah kamu hapus data quotation, Maka dengan otomatis data quotation tersebut sudah ter-hapus dari di list quotation
                                                </p>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DUPLICATE --}}
              </div>
            </section>
          {{-- Content quotation OWNER Mobile End--}}

        </div>
        <!-- Owner Tab -->


    </div>
    <!-- Tabs Content -->


    {{-- Content quotation anda End--}}


@stop

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ URL::asset('public/backend-asset/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('public/backend-asset/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('public/backend-asset/js/plugins/datatables/typeahead/bootstrap4-typeahead.js') }}">
    </script>
    <script src="//cdn.datatables.net/plug-ins/1.10.7/pagination/select.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    
    <script type = "text/javascript" src = "//code.jquery.com/jquery-1.11.0.min.js" ></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

@stop

@section('js_before')
    <script type="text/javascript">
        // Initialization for ES Users
        import {
            Tab,
            initMDB
        } from "mdb-ui-kit";

        initMDB({
            Tab
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slick-arrow').css('opacity', '0');
        })

        function toggleContent(idx, img) {
            var contentFeature = $('.content-feature-' + idx);

            if (contentFeature.hasClass('d-none')) {
                // Show content-feature
                contentFeature.removeClass('d-none');
                contentFeature.removeClass('h-0');
                contentFeature.addClass('d-block');
                contentFeature.addClass('h-100');
            } else {
                // Hide content-feature
                contentFeature.removeClass('d-block');
                contentFeature.removeClass('h-100');
                contentFeature.addClass('d-none');
                contentFeature.addClass('h-0');
            }

        }
    </script>
@stop
