@extends('layouts.app-backend-omsetku')

@section('title')
    Tabel
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Tautan ke Dropify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
    <!-- Tautan ke jQuery (diperlukan oleh Dropify) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Tautan ke Dropify JS -->
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/trix@1.3.1/dist/trix.css">
    <style>

    </style>
@endsection

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ URL::asset('public/backend-asset/js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .form-container {
            width: 48%; /* Menggunakan nilai kurang dari 50% agar ada ruang antara form */
        }

        .form-container form {
            background: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0vh 2vh;
        }

        trix-editor {
            border: 1px solid #bbb;
            border-radius: 3px;
            margin: 0;
            padding: 0.4em 0.6em;
            min-height: 25em !important;
            outline: none;
        }

        .dropify-wrapper {
            display: block;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            height: 200px;
            padding: 5px 10px;
            font-size: 14px;
            line-height: 22px;
            color: #18120F!important;
            background-color: #EBF0ED !important;
            background-image: none;
            text-align: center;
            border: 1px solid #EBF0ED!important;
            -webkit-transition: border-color .15s linear;
            transition: border-color .15s linear;
            border-radius: 8px;
        }

        .dropify-wrapper .dropify-message span.file-icon {
            font-size: 50px;
            color: #036666 !important;
        }

        .mask-group {
            border-radius: 16px;
            border: 1px solid #EBF0ED;
            background: #fffff;
            padding: 20px;
        }
        .btn-pojok {
            display: flex !important;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: flex-end;
        }
        .cover-height {
            height: 41em;
        }
        .cover-height {
            position: relative;
        }

        .btn-pojok {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 10px; /* Sesuaikan margin sesuai kebutuhan Anda */
        }

        .btn-EBF0ED {
            background-color: #EBF0ED; 
            color:#036666; 
            margin-right:5px; 
            padding: 10px 25px;
            border-radius: 10px;
            border: 1px solid #EBF0ED;
        }
        .btn-FF8548 {
            background-color: #FF8548; 
            color:#FFFFFF; 
            margin-left:5px; 
            padding: 10px 25px;
            border-radius: 10px;
            border: 1px solid #EBF0ED;
        }
                
        /* -------------------------------------------------------------------------------------------------------------------------------- */   

      /*--------- responsive laptop/pc ---------*/
        /*
            desktop zoom custom1

            main width: 1367px;
            */
        @media screen and (min-width: 1321px) and (max-width: 1380px) {

            /*  */

        }


        @media screen and (max-width: 1515px) {

            /*  */
        }


        /* Zoom 150% */
        @media screen and (min-width: 1000px) and (max-width: 1098px) {

            /*  */
        }


        @media screen and (min-width: 1248px) and (max-width: 1300px) {

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


        }

        @media screen and (min-width: 1920px) and (max-width: 2560px) {


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

    {{-- Desktop Start --}}
    <section class="desktop-show py-4 d-flex justify-content-center ">
            <div class="form-container">
                <!-- Formulir Pertama -->
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="cover-height">
                    <label for="title-content" class="form-label">Detail Artikel</label>
                    <div class="mask-group">
                        <label for="exampleFormControlInput1 subtitle-content" class="form-label">JUDUL BERITA</label>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Judul Berita">
                        </div>
                        
                        <div>
                            <label for="my-editor subtitle-content">DESKRIPSI</label>
                            <input id="my-editor" type="hidden" name="content">
                            <trix-editor input="my-editor"></trix-editor>
                        </div>
                    </div>
                    </div>
                </form>
            </div>

            <div class="form-container">
                <!-- Formulir Kedua -->
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="cover-height">
                        <div class="form-group">
                            <label for="title-content">Creator</label>
                            <div class="mask-group">
                                <label for="exampleSelect subtitle-content">JADWAL PUBLISH</label>
                                <select class="form-control" id="exampleSelect" @readonly(true)>
                                    <option>Pilih Tanggal</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <label for="title-content" class="form-label">PHOTO</label>
                            <div class="mask-group">
                                <input type="file" name="file" class="dropify" data-height="200" />
                            </div>
                        </div>
                        <div class="btn-pojok">
                            <!-- Tombol dengan warna #EBF0ED -->
                            <button id="btn1" class="btn-EBF0ED" style="">Cancel</button>
                            <!-- Tombol dengan warna #FF8548 -->
                            <button id="btn2" class="btn-FF8548" style="">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
    </section>
    {{-- Header Desktop End --}}

@stop

@section('js_after')

    <!-- Page JS Plugins -->
    <script src="{{ URL::asset('public/backend-asset/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('public/backend-asset/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('public/backend-asset/js/plugins/datatables/typeahead/bootstrap4-typeahead.js') }}"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.7/pagination/select.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    
    {{-- trix --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/trix@1.3.1/dist/trix.js"></script>
    {{-- dropify --}}
    <script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>

@stop

@section('js_before')

<script>
    $(document).ready(function(){
        $('.dropify').dropify();
    });
</script>

@stop
