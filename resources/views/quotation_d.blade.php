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

    {{-- Header End--}}


    {{-- Content quotation anda Start--}}

    <!-- Tabs Content -->
    <div class="tab-content">


        <!-- Sales Tab -->
        <div class="tab-pane fade show active" id="sales">

          {{-- Content quotation SALES Desktop Start--}}
            <section id="content1" class="menu-1 desktop-show text-center">
                    <div class="container">
                        {{-- ADD --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/quo/omsetku-asset-row-add.png" alt="">
                        </div>
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
                        {{-- EDIT --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/quo/omsetku-asset-row-edit.png" alt="">
                        </div>
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
                        {{-- DELETE --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/quo/omsetku-asset-row-delete.png" alt="">
                        </div>
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
                        {{-- DUPLICATE --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/quo/omsetku-asset-row-duplicate.png" alt="">
                        </div>
                        <div class="pad-con"></div>
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
            </section>
          {{-- Content quotation SALES Desktop End--}}

        </div>
        <!-- Sales Tab -->


        <!-- Owner Tab -->
        <div class="tab-pane fade" id="owner">

          {{-- Content quotation OWNER Desktop Start--}}
            <section id="content1" class="menu-1 desktop-show text-center">
                    <div class="container">
                        {{-- ADD --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/quo/omsetku-asset-row-add.png" alt="">
                        </div>
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
                        {{-- EDIT --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/quo/omsetku-asset-row-edit.png" alt="">
                        </div>
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
                                                <br> 1. Sales yang melakukan penjualan
                                                <br> 2. Customer yang melakukan penjualan
                                                <br> 3. Tanggal pembelian
                                                <br> 4. Data produk seperti Nama barang, harga,  kuantitas, dan catatan (apabila perlu)
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
                        {{-- DELETE --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/quo/omsetku-asset-row-delete.png" alt="">
                        </div>
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
                        {{-- DUPLICATE --}}
                        <div class="col-md-12 d-flex justify-content-center">
                            <img class="row-add pb-4" src="omsetku-asset/quo/omsetku-asset-row-duplicate.png" alt="">
                        </div>
                        <div class="pad-con"></div>
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
            </section>
          {{-- Content quotation OWNER Desktop End--}}

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
    
    <script>


    </script>

@stop

@section('js_before')
    <script type="text/javascript">
        // Initialization for ES Users
        import { Tab, initMDB } from "mdb-ui-kit";

        initMDB({ Tab });
    </script>
@stop
