@extends('layouts.app-backend-omsetku')

@section('title')
    Reimburse
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

        .desktop-show {

            display: block !important;

        }

        .mobile-show {

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
            line-height: 50px; /* 178.571% */
        }

        .subtitle-page-header {
            color: #000;
            text-align: center;
            font-family: Roboto;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 20.5px; /* 128.125% */
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
            line-height: 27.9px; /* 174.375% */
        }
        .header-text-item-kanan {
            text-align: right;
            color: #000;
            font-family: Roboto;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 27.9px; /* 174.375% */
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
        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
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

            .header-content-item {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 31px;
                font-style: normal;
                font-weight: 800;
                line-height: 32.5px;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 25.9px;
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

    /*--------- end responsive laptop/pc ---------*/
        

    </style>
@stop

@section('content')
    {{-- Header Start--}}

      {{-- Header Desktop Start--}}
        <section class="py-4 d-flex justify-content-center">
            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <h3 class="title-page-header">
                        Hubungan sangat baik untuk bisnis
                    </h3>
                </div>
                <div class="col-md-12">
                    <p class="subtitle-page-header">
                        Buat dan kelola REIMBURSE Anda, semua di satu tempat.
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

    {{-- Header End--}}


    {{-- Content reimburse anda Start--}}

    <!-- Tabs Content -->
    <div class="tab-content">


        <!-- Sales Tab -->
        <div class="tab-pane fade show active" id="sales">

          {{-- Content reimburse SALES Desktop Start--}}
            <section id="content1" class="menu-1 desktop-show text-center">
                    <div class="container">
                        {{-- ADD --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/reimburse/omsetku-asset-row-add.png" alt="">
                        </div>
                        <div class="pad-con">
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-membuat-reim.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Membuat data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Pilih  tombol "buat reimburse" pada dashboard <br> untuk mulai membuat reimburse baru untuk <br> penjualan barang mu
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Menambahkan data reimburse baru</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Pilih  tombol "tambah" pada dashboard untuk mulai <br> menginput data untuk reimburse baru
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-membuat-reim2.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-membuat-reim3.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6  pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Isilah data sesuai dengan data reimburse yang kamu miliki:
                                                <br> 1. Tanggal 
                                                <br> 2. Kategori reimburse 
                                                <br> 3. Total Reimburse 
                                                <br> 4. Bukti foto 
                                                <br> 5. Checklist (jika sudah terbayar) 
                                                <br> Lalu klik “simpan” untuk menyimpan data reimburse yang sudah kamu input
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Data reimburse Tersimpan</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Data reimburse yang kamu simpan bisa terlihat di list reimburse yang tersedia
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-membuat-reim4.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                        </div>
                        {{-- EDIT --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/reimburse/omsetku-asset-row-edit.png" alt="">
                        </div>
                        <div class="pad-con">
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-edit-reim.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Edit reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Data reimburse yang kamu simpan bisa terlihat di list reimburse yang tersedia
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6  pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Mengedit data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Isilah data sesuai dengan data reimburse yang kamu miliki:
                                                <br> 1. Tanggal 
                                                <br> 2. Kategori reimburse 
                                                <br> 3. Total Reimburse 
                                                <br> 4. Bukti foto 
                                                <br> 5. Checklist (jika sudah terbayar) 
                                                <br> Lalu klik “simpan” untuk menyimpan data reimburse yang sudah kamu input
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-edit-reim2.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-edit-reim3.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Data reimburse tersimpan</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Data reimburse yang kamu baru saja simpan akan muncul dalam list reimburse, Pilih reimburse baru mu untuk melihat datanya secara detail
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- DELETE --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/reimburse/omsetku-asset-row-delete.png" alt="">
                        </div>
                        <div class="pad-con">
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-delete-reim.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Menghapus data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Untuk menghapus data reimburse, silahkan pilih reimburse yang ingin kamu hapus lalu , ketika muncul tampilan list seperti di samping, klik tombol hapus untuk menghapus data reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Konfirmasi hapus data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Ketika sudah klik tombol hapus maka akan muncul tampilan konfirmasi untuk menghapus data dari reimburse, klik hapus untuk menghapus dan klik batal untuk membatalkan penghapusan data reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-delete-reim2.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-delete-reim3.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Berhasil menghapus data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Setelah kamu hapus data reimburse, Maka dengan otomatis data reimburse tersebut sudah ter-hapus dari di list reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- RESTATUS --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/reimburse/omsetku-asset-row-status.png" alt="">
                        </div>
                        <div class="pad-con">
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-status-reim.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Status reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Pilih  tombol "titik tiga" pada dashboard di reimburse untuk mulai mengedit status reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Mengedit status reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Checklist centang di bawah apabila sudah menerima reimburse lalu klik simpan untuk menyimpan data
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-status-reim2.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-status-reim3.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Data reimburse tersimpan</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Setelah kamu edit data reimburse, Maka dengan otomatis data reimburse tersebut sudah berubah  di list reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Make a invoice</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Pilih  tombol "buat invoice" pada dashboard untuk mulai membuat invoice untuk penjualan barang mu
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-status-reim4.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
          {{-- Content reimburse SALES Desktop End--}}

        </div>
        <!-- Sales Tab -->


        <!-- Owner Tab -->
        <div class="tab-pane fade" id="owner">

          {{-- Content reimburse OWNER Desktop Start--}}
            <section id="content1" class="menu-1 desktop-show text-center">
                    <div class="container">
                        {{-- ADD --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/reimburse/omsetku-asset-row-add.png" alt="">
                        </div>
                        <div class="pad-con">
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-membuat-reim.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Membuat data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Pilih  tombol "buat reimburse" pada dashboard <br> untuk mulai membuat reimburse baru untuk <br> penjualan barang mu
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Menambahkan data reimburse baru</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Pilih  tombol "tambah" pada dashboard untuk mulai <br> menginput data untuk reimburse baru
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-membuat-reim2.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-membuat-reim3.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6  pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Isilah data sesuai dengan data reimburse yang kamu miliki:
                                                <br> 1. Nama Sales 
                                                <br> 2. Tanggal 
                                                <br> 3. Kategori reimburse 
                                                <br> 4. Total Reimburse 
                                                <br> 5. Bukti foto 
                                                <br> 6. Checklist (jika sudah terbayar) 
                                                <br> Lalu klik “simpan” untuk menyimpan data reimburse yang sudah kamu input
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Data reimburse Tersimpan</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Data reimburse yang kamu simpan bisa terlihat di list reimburse yang tersedia
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-membuat-reim4.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                        </div>
                        {{-- EDIT --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/reimburse/omsetku-asset-row-edit.png" alt="">
                        </div>
                        <div class="pad-con">
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-edit-reim.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Edit reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Data reimburse yang kamu simpan bisa terlihat di list reimburse yang tersedia
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6  pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Mengedit data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Isilah data sesuai dengan data reimburse yang kamu miliki:
                                                <br> 1. Nama Sales 
                                                <br> 2. Tanggal 
                                                <br> 3. Kategori reimburse 
                                                <br> 4. Total Reimburse 
                                                <br> 5. Bukti foto 
                                                <br> 6. Checklist (jika sudah terbayar) 
                                                <br> Lalu klik “simpan” untuk menyimpan data reimburse yang sudah kamu input
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-edit-reim2.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-edit-reim3.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Data reimburse tersimpan</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Data reimburse yang kamu baru saja simpan akan muncul dalam list reimburse, Pilih reimburse baru mu untuk melihat datanya secara detail
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- DELETE --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/reimburse/omsetku-asset-row-delete.png" alt="">
                        </div>
                        <div class="pad-con">
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-delete-reim.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Menghapus data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Untuk menghapus data reimburse, silahkan pilih reimburse yang ingin kamu hapus lalu , ketika muncul tampilan list seperti di samping, klik tombol hapus untuk menghapus data reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Konfirmasi hapus data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Ketika sudah klik tombol hapus maka akan muncul tampilan konfirmasi untuk menghapus data dari reimburse, klik hapus untuk menghapus dan klik batal untuk membatalkan penghapusan data reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-delete-reim2.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-delete-reim3.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Berhasil menghapus data reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Setelah kamu hapus data reimburse, Maka dengan otomatis data reimburse tersebut sudah ter-hapus dari di list reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- RESTATUS --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/reimburse/omsetku-asset-row-status.png" alt="">
                        </div>
                        <div class="pad-con">
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-status-reim.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Status reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Pilih  tombol "titik tiga" pada dashboard di reimburse untuk mulai mengedit status reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Mengedit status reimburse</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Checklist centang di bawah apabila sudah menerima reimburse lalu klik simpan untuk menyimpan data
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-status-reim2.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                            <div class="row pb-4 pt-4">
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-status-reim3.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Data reimburse tersimpan</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Setelah kamu edit data reimburse, Maka dengan otomatis data reimburse tersebut sudah berubah  di list reimburse
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-4 pt-2">
                                <div class="col-lg-6 pt-5 pt-lg-0 content" data-aos-delay="100" style="display: flex; flex-direction: column; justify-content: center;">
                                    <div class="row mb-4">
                                        <div class="col-md-11 col-lg-11">
                                            <h5 ><strong class="header-content-item d-flex">Make a invoice</strong></h5>
                                            <p class="header-text-item-kiri" >
                                                Pilih  tombol "buat invoice" pada dashboard untuk mulai membuat invoice untuk penjualan barang mu
                                            </p>
                                        </div><br>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-section-content" data-aos-delay="100">
                                    <img src="omsetku-asset/reimburse/omsetku-asset-status-reim4.png" class="img-content" alt="" style="margin-left: 0px">
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
          {{-- Content reimburse OWNER Desktop End--}}

        </div>
        <!-- Owner Tab -->


    </div>
    <!-- Tabs Content -->


    {{-- Content invoice anda End--}}


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
    <script>

        
    </script>

@stop

@section('js_before')
    <script type="text/javascript">
        // Initialization for ES Users
        import { Tab, initMDB } from "mdb-ui-kit";

        initMDB({ Tab });
    </>
@stop
