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
                                                <br> 1.Pilih sales yang melakukan penjualan
                                                <br> 2.Pilih customer yang melakukan transaksi
                                                <br> 3.Tanggal Pembelian
                                                <br> 4.Data produk seperti harga, kuantitas dan catatan (apabila diperlukan)
                                                <br> 5.Biaya pengiriman (jika ada)
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
                                                <br> 1.Pilih sales yang melakukan penjualan
                                                <br> 2.Pilih customer yang melakukan transaksi
                                                <br> 3.Tanggal Pembelian
                                                <br> 4.Data produk seperti harga, kuantitas dan catatan (apabila diperlukan)
                                                <br> 5.Biaya pengiriman (jika ada)
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
        ///////// script to show n hide load using ajax /////////
        $(document)
            // .ajaxStart(function() {
            //     //ajax request went so show the loading image
            //     $('#loadingModal').modal({
            //         show: true,
            //         keyboard: true
            //     });
            // })
        // .ajaxStop(function() {
        //     //got response so hide the loading image
        //     // $loading.hide();
        //     $('#loadingModal').modal('hide');
        // });
        ///////// end script to show n hide load using ajax /////////

        var startDate;
        var endDate;


        $(document).ready(function() {


            var $submit = $("#submit_prog").hide(),
                $submit1 = $("#submit_prog1").hide(),
                $cbs = $('input[id="box"]').click(function() {
                    $submit.toggle($cbs.is(":checked"));
                    $submit1.toggle($cbs.is(":checked"));
                });
            $cbd = $('input[id="check-all"]').click(function() {
                $submit.toggle($cbd.is(":checked"));
                $submit1.toggle($cbd.is(":checked"));
            });

            // getData();
            getHistory('less');

            // $('#bulan').on('change', function() {
            //     $('#example1').DataTable().clear();
            //     $('#example1').DataTable().destroy();
            //     getData();
            // })
            // $('#tahun').on('change', function() {
            //     $('#example1').DataTable().clear();
            //     $('#example1').DataTable().destroy();
            //     getData();
            // })
            // $('#filter-status').on('change', function() {
            //     $('#example1').DataTable().clear();
            //     $('#example1').DataTable().destroy();
            //     getData();
            // })
            // $('#filter-divisi').on('change', function() {
            //     $('#example1').DataTable().clear();
            //     $('#example1').DataTable().destroy();
            //     getData();
            // })
            // $('#dateRangePicker').on('change', function() {
            //     $('#example1').DataTable().clear();
            //     $('#example1').DataTable().destroy();
            //     getData();
            // })
        });

        @php
            $url = config('app.url');
        @endphp
        let ApibaseURL = "{{ $url }}";
        // $('#submit-filter').on('click', function(e) {
        //     e.preventDefault();
        //     getHistory('less');
        //     $('#example1').DataTable().clear();
        //     $('#example1').DataTable().destroy();
        //     // getData();
        //     // $('#loadingModal').modal({
        //     //     show: true,
        //     //     keyboard: true
        //     // });

        // });
        //  $('#viewMoreHistory').on('click', function(e) {
        //     $('#loadingModal').modal({
        //         show: true,
        //         keyboard: true
        //     });
        //  });


        // function getHistory(typeView) {
        //     let start_date = $('#selectedDatePickerField').val();
        //     let end_date = $('#selectedDatePickerField2').val();

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $.ajax({
        //         type: 'POST',
        //         url: ApibaseURL + "/quotation-history-get",
        //         data: {
        //             typeView: typeView,
        //             start_date: start_date,
        //             end_date: end_date,
        //         },
        //         dataType: 'json',
        //         success: function(data) {
        //             //$('.badge-status').addClass(data.statusClass);
        //             $('#wrapHistoryDiv').html(data.listHistory);


        //         },
        //         error: function(data) {

        //             console.log(data);

        //         }
        //     });

        // }

        function getHistory(typeView) {
            var start_date = $('#selectedDatePickerField').val();
            var end_date = $('#selectedDatePickerField2').val();
            console.log(end_date);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // $('#loadingModal').modal({
            //     show: true,
            //     keyboard: true
            // });
            $.ajax({
                type: 'GET',
                url: ApibaseURL + "/quotation-history-get",
                data: {
                    typeView: typeView,
                    start: start_date,
                    end: end_date
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data,start_date,end_date);
                    //$('.badge-status').addClass(data.statusClass);
                    $('#wrapHistoryDiv').html(data.listHistory);
                    console.log(data.typeView);
                    // $('#loadingModal').modal('hide');
                },
                error: function(data) {

                    console.log(data);

                }
            });

        }






        $('.js-dataTable-full').on('click', '.btn-actions', function() {


            var id = $(this).attr('data-id');
            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

            $.ajax({

                type: 'GET',

                url: ApibaseURL + "/sales-data-get/" + id,

                data: {



                },

                dataType: 'json',

                success: function(data) {

                    //$('.badge-status').addClass(data.statusClass);
                    $('.badge-status').html(
                        `<span class="badge ` + data.statusClass + `">
                ` + data.statusText + `
              </span>`
                    );

                    $('.status-select').val(data.data.status).trigger('change');
                    $('#exampleModal').modal('toggle');
                    $('#form-master').attr('action', "{{ url('edit-status') }}" + "/" + id);
                    $('#modal-title-text').html(data.data.no_po);

                },
                error: function(data) {

                    console.log(data);

                }
            });

        })

        // //date range
        // $(function() {
        //     $('input[name="daterange"]').daterangepicker({
        //         startDate: moment(),
        //             endDate: moment(),
        //             //   minDate: '01/01/2012',
        //             //   maxDate: '12/31/2014',
        //             dateLimit: {
        //                 days: 360
        //             },
        //             showDropdowns: true,
        //             showWeekNumbers: false,
        //             timePicker: false,
        //             timePickerIncrement: 1,
        //             timePicker12Hour: true,
        //             //   ranges: {
        //             //      'Today': [moment(), moment()],
        //             //      'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
        //             //      'Last 7 Days': [moment().subtract('days', 6), moment()],
        //             //      'Last 30 Days': [moment().subtract('days', 29), moment()],
        //             //      'This Month': [moment().startOf('month'), moment().endOf('month')],
        //             //      'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        //             //   },
        //             opens: 'left',
        //             buttonClasses: ['btn btn-default'],
        //             applyClass: 'btn-small btn-primary',
        //             cancelClass: 'btn-small',
        //             format: 'DD/MM/YYYY',
        //             separator: ' to ',
        //             locale: {
        //                 applyLabel: 'Show Data',
        //                 fromLabel: 'From',
        //                 toLabel: 'To',
        //                 customRangeLabel: 'Custom Range',
        //                 daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        //                 monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
        //                     'September', 'October', 'November', 'December'
        //                 ],
        //                 firstDay: 1
        //             }
        //     });
        // });
        // $(document).ready(function() {
        //     $('#dateRangePicker').on('change', function() {
        //         $('#selectedDatePickerField').val(this.value);
        //         $('#selectedDatePickerField2').val(this.value);
        //     }).change();
        //     $('#dateRangePicker').on('daterangepicker', function(e, ui) {
        //         $('#selectedDatePickerField').val(ui.item.value);
        //         $('#selectedDatePickerField2').val(ui.item.value);
        //     });
        // });

        // $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
        //     $('#selectedDatePickerField').val(picker.startDate.format('YYYY-MM-DD'));
        //     $('#selectedDatePickerField2').val(picker.endDate.format('YYYY-MM-DD'));
        // });


        //date range
        $(function() {
            $('#daterangeNew').daterangepicker({
                // startDate: moment(),
                // endDate: moment(),
                timePickerSeconds: true,
                autoApply: true,

                //   minDate: '01/01/2012',
                //   maxDate: '12/31/2014',
                dateLimit: {
                    days: 360
                },
                showDropdowns: true,
                showWeekNumbers: false,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                //   ranges: {
                //      'Today': [moment(), moment()],
                //      'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                //      'Last 7 Days': [moment().subtract('days', 6), moment()],
                //      'Last 30 Days': [moment().subtract('days', 29), moment()],
                //      'This Month': [moment().startOf('month'), moment().endOf('month')],
                //      'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                //   },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',

                // format: 'dd/mm/yyyy',
                separator: ' to ',
                locale: {
                    format: 'DD/MM/YYYY',
                    applyLabel: 'Show Data',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom Range',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July',
                        'August',
                        'September', 'October', 'November', 'December'
                    ],
                    firstDay: 1
                }
            });
        });
        $(document).ready(function() {
            

            $('#dateRangePicker').trigger('change', function() {
                // $('#selectedDatePickerField').val(this.value);
                // $('#selectedDatePickerField2').val(this.value);
            });
            $('#dateRangePicker').on('daterangepicker', function(e, ui) {
                $('#selectedDatePickerField').val(ui.item.value);
                $('#selectedDatePickerField2').val(ui.item.value);
            });

            $('#daterangeNew').on('apply.daterangepicker', function(ev, picker) {
                $('#selectedDatePickerField').val(picker.startDate.format('YYYY-MM-DD'));
                $('#selectedDatePickerField2').val(picker.endDate.format('YYYY-MM-DD'));
            });
        });

        // $(function() {
        //     Codebase.helpers('table-tools');
        // });

        // function getData() {
        //     @php
            //         $url = config('app.url');
            //
        @endphp
        //     let ApibaseURL = "{{ $url }}";

        //     var dataSrc = [];
        //     oTable = $('#example1').DataTable({
        //         "pageLength": 20,
        //         //"pagingType": "listbox",
        //         language: {
        //             //processing: '<div class="load-ajax text-center bg-transparent p-10"><i class="fa fa-spinner fa-spin fa-2x"></i><span class="font-w600 ml-10 pb-50">Processing....</span></div>',
        //             "sInfo": "Showing _START_ to _END_ of _TOTAL_ records",
        //         },
        //         processing: true,
        //         serverSide: true,
        //         ajax: {
        //             url: ApibaseURL + '/quotation',
        //             data: function(d) {
        //                 d.seacrh = $('input[name=search]').val();
        //                 d.filter_status = $('#filter-status').val();
        //                 d.filter_divisi = $('#filter-divisi').val();
        //                 d.bulan = $('#bulan').val();
        //                 d.tahun = $('#tahun').val();
        //                 d.start_date = $('#selectedDatePickerField').val();
        //                 d.end_date = $('#selectedDatePickerField2').val();
        //                 d.search = $('#searchInput').val();

        //                 console.log(d);
        //             }

        //         },
        //         "rowCallback": function(row, data) {

        //             console.log(data);

        //             $(row).find('td:eq(0)').attr('data-url', '#');
        //             $(row).find('td:eq(1)').attr('onclick',
        //                 'redirectRow("{{ url('') }}/detail-quotation/' + data.id + '")');
        //             $(row).find('td:eq(2)').attr('onclick',
        //                 'redirectRow("{{ url('') }}/detail-quotation/' + data.id + '")');
        //             $(row).find('td:eq(3)').attr('onclick',
        //                 'redirectRow("{{ url('') }}/detail-quotation/' + data.id + '")');
        //             $(row).find('td:eq(4)').attr('onclick',
        //                 'redirectRow("{{ url('') }}/detail-quotation/' + data.id + '")');
        //             $(row).find('td:eq(5)').attr('onclick',
        //                 'redirectRow("{{ url('') }}/detail-quotation/' + data.id + '")');
        //             $(row).find('td:eq(6)').attr('onclick',
        //                 'redirectRow("{{ url('') }}/detail-quotation/' + data.id + '")');
        //             $(row).find('td:eq(8)').attr('data-url', '#');
        //             $(row).find('.viewIDCurrency').each(function() {
        //                 dataTotal = $(this).text();
        //                 $(this).html(viewIDCurrency(dataTotal))
        //             })
        //         },
        //         columns: [
        //             //        { "data": "rownum",sortable: false,searchable: false,
        //             //    render: function (data, type, row, meta) {
        //             //              return meta.row + meta.settings._iDisplayStart + 1;
        //             //             }
        //             // },
        //             // { data: 'DT_RowIndex', name:'DT_RowIndex', searchable: false},
        //             {
        //                 data: 'checkNo',
        //                 name: 'checkNo',
        //                 searchable: false
        //             },
        //             {
        //                 data: 'date',
        //                 name: 'date'
        //             },
        //             {
        //                 data: 'no_po',
        //                 name: 'no_po'
        //             },
        //             {
        //                 data: 'nama_customer',
        //                 name: 'nama_customer'
        //             },
        //             {
        //                 data: 'nama_perusahaan',
        //                 name: 'nama_perusahaan'
        //             },
        //             {
        //                 data: 'total_subtotal',
        //                 name: 'total_subtotal'
        //             },
        //             {
        //                 data: 'status',
        //                 name: 'status'
        //             },
        //         ],

        //         'initComplete': function() {
        //             var api = this.api();

        //             // Populate a dataset for autocomplete functionality
        //             // using data from first, second and third columns
        //             api.cells('tr', [0, 1, 2, 3, 4]).every(function() {
        //                 // Get cell data as plain text
        //                 var data = $('<div>').html(this.data()).text();
        //                 if (dataSrc.indexOf(data) === -1) {
        //                     dataSrc.push(data);
        //                 }
        //             });

        //             // Sort dataset alphabetically
        //             dataSrc.sort();


        //             // // Initialize Typeahead plug-in
        //             // $('#searchInput').typeahead({
        //             //     source: dataSrc,
        //             //     afterSelect: function(value) {
        //             //         api.search(value).draw();
        //             //     }

        //             // });
        //         }
        //     });
        //     $('#searchInput').keyup(function() {
        //         oTable.search($(this).val()).draw();
        //     })

        //     $('#example1 tbody tr td').click(function() {
        //         alert('tes');
        //         window.location.href = $(this).data('url');
        //     });

        //     $('#length_change').val(oTable.page.len());
        //     $('#length_change').change(function() {
        //         oTable.page.len($(this).val()).draw();
        //     });
        // }
        $(function() {
            var oTable = $('#example1').dataTable({
                pageLength: 10,
                bAutoWidth: false,
                language: {
                    processing: '<div class="load-ajax text-center bg-white p-50"><i class="fa fa-spinner fa-spin fa-2x"></i><span class="font-w600 ml-10 pb-50">Processing....</span></div>',
                    infoEmpty: 'Tidak Ada Data',
                    zeroRecords: 'Tidak Ada Data',
                    paginate: {
                        first: "Awal",
                        last: "Akhir",
                        next: "Next",
                        previous: "Previous"
                    }
                },
            });

            $("#myInputTextField").on('keyup', function() {
                oTable.fnFilter(this.value);
            });



        });
    </script>
@stop

@section('js_before')
    <script type="text/javascript">
        // Initialization for ES Users
        import { Tab, initMDB } from "mdb-ui-kit";

        initMDB({ Tab });
    </script>
@stop
