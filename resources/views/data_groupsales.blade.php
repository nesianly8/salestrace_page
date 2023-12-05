@extends('layouts.app-backend-omsetku')

@section('title')
    List Quotation
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
        .status-request {
            background: #ff576e;
            color: #fff;
        }

        .status-open {
            background: #1d316b;
            color: #fff;
        }

        .status-invoice {
            background: #3f9ce8;
            color: #fff;
        }

        .status-delivered {
            background: #06ab43;
            color: #fff;
        }

        .status-cancel {
            background: #ffca28;
            color: #fff;
        }


        .status-gray {
            background: #CCCCCC;
            color: #ffffff;
        }

        .block {
            box-shadow: none !important;
            border: 2px solid #ebebeb
        }


        .dataTables_info {
            display: block;
            margin-left: 10px;
            margin-bottom: 10px;
        }

        .paging_listbox {
            padding: 10px 10px 0 0;
        }

        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            padding-right: 5%;
        }

        .txt-hidden {
            display: none;
        }

        .bg-transparent {
            background: transparent !important;
        }

        .label-wrap-history h3.label-history {
            display: inline-block;
            line-height: normal;
        }

        .block-history .label-history {
            color: #1E3168;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 0px;
        }

        div.dataTables_wrapper div.dataTables_processing {
            z-index: 999999;
        }

        .table.dataTable td {
            font-weight: 600;
            color: #000000;
        }
    </style>
@endsection

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ URL::asset('public/backend-asset/js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <style>
        #disabled_box {
            cursor: not-allowed;
        }

        .bg-vektor {
            background-image: url("omsetku-assets/omsetku-vektor.png");
        }
        

        .title-page-content {
            color: #000;
            font-family: Inter;
            font-size: 28px;
            font-style: normal;
            font-weight: 600;
            line-height: 50px; /* 178.571% */
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

        .warning-page-content {
            
            border: 2px solid #438AFE; 
            border-radius: 7px;
            padding: 10px; 
            padding-right: 35px;
        }
        .warning-page-text {
            color: #000;
            font-family: Inter;
            font-size: 11px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
         
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: 0px !important;
            margin-left: -15px;
        }

        .subtitle-page-content-get {
            position: relative; 
            padding-left: 30px; 
            list-style: none; 
        }
        .subtitle-page-content-get img {
            position: absolute; 
            left: 0; 
            top: 50%; x
            transform: translateY(-50%);
            width: 20px; 
            height: auto; 
        }
        .get-page-text {
            color: #000;
            font-family: Inter;
            font-size: 11px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            padding-top: 3px; 
        }
        .get-text-list {
            margin-left: 15px;
            margin-bottom: 3px;
        }
        

        .table-responsive .table thead th {
            background: #F7F7F7 !important;
        }

        .table thead tr th {
            font-weight: 600 !important;
        }

        .badge-date-history {
            background: #59CB86;
            color: #ffffff;
        }

        .text-history {
            font-size: 14px;
            line-height: 18px;
            font-weight: 400;
        }

        .actionby-history {
            font-size: 14px;
            line-height: 18px;
            font-weight: 700;
        }
    </style>
@stop

@section('content')
    <section class="create-groupsales py-4 d-flex justify-content-center bg-vektor">
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center">
                <h3 class="title-page-content">
                    GRUP SALES
                </h3>
            </div>
            <div class="col-md-12">
                <h3 class="title-page-content">
                    <p class="subtitle-page-content">
                    Monitor grup penjualan anda dengan visualisasi modern pakai GRUP SALES
                </p>
                </h3>
            </div>
            <!-- New div for the button -->
            <div class="col-md-12 d-flex justify-content-center mt-4 mb-4">
                <button class="btn btn-primary" style="border-radius: 3px; background: #1E3168; width: 50%;">
                    Buat GRUP SALES
                </button>
            </div>
        </div>
    </section>
    <section class="flow-goupsales mt-4 d-flex justify-content-center">
        <div class="row mt-4">
            <div class="col-md-12 d-flex justify-content-center">
                <h3 class="title-page-content">
                    Bagaimana GRUP SALES bekerja
                </h3>
            </div>
            <div class="col-md-12">
                <h3 class="title-page-content">
                    <p class="subtitle-page-content">
                    ini adalah siklus GRUP SALES Salestrace bekerja
                </p>
                </h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h3 class="title-page-content" style="font-size:20px; line-height: 70px;">
                    GRUP SALES
                </h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <img src="omsetku-assets/omsetku-flow-grp.png" alt="">
            </div>
            <div class="col-md-12 d-flex justify-content-center" style="margin-top:30px; padding-left: 30px;">
                <div class="warning-page-content row">
                    <div class="pr-3">
                        <!-- Konten atau gambar icon Laravel dapat ditambahkan di sini -->
                        <img src="omsetku-assets/omsetku-warning.png" alt="Laravel Icon" class="img-fluid">
                    </div>
                    <p class="warning-page-text" style="margin: 0px">
                        Customisasi penjualan anda menggunakan grup sales, jual barang lebih cepat dengan menggunakan
                        <br> tim sales yang hebat
                    </p>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center" style="margin-top:40px; margin-top:40px;">
                <img src="omsetku-assets/omsetku-row.png" alt="">
            </div>
        </div>
    </section>
    <section class="Anda Dapat mt-4" style="padding:10px">
        <div class="d-flex justify-content-center">
            <h2 style="color: #464A53;font-size: 18px;font-weight: 500;">Dibagian GRUP SALES, Anda dapat :</h2>
        </div>
        <div class="d-flex justify-content-center" style="margin-right: 102px;">
            <ul style="list-style-type: none; padding: 0; text-align: left; display: inline-block;">
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="omsetku-assets/omsetku-checklist.png" alt="" style="margin-right: 5px;">
                    Membuat pesanan customer
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="omsetku-assets/omsetku-checklist.png" alt="" style="margin-right: 5px;">
                    Kirim pesanan ke supplier
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="omsetku-assets/omsetku-checklist.png" alt="" style="margin-right: 5px;">
                    Visualisasi grafik yang actual 
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="omsetku-assets/omsetku-checklist.png" alt="" style="margin-right: 5px;">
                    Monitoring sales 1 by 1
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <img src="omsetku-assets/omsetku-checklist.png" alt="" style="margin-right: 5px;">
                    Buat grup sales yang hebat
                </li>
            </ul>
        </div>
    </section>
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
        $(document).ready(function() {
            $('#search-show-btn').show();

        });

        $("#btn_hapus").click(function() {
            $('#tipe_btn').val('hapus');
        });

        $("#btn_edit").click(function() {
            $('#tipe_btn').val('edit');
        });

        function DeleteAlert() {

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

                    $('#frm_so').submit();

                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    $('#tipe_btn').val('');
                }



            });

        }

        function UpdateAlert() {

            Swal.fire({

                title: 'Anda Yakin?',

                text: "Anda Akan Meng-update Data Ini!",

                type: 'warning',

                showCancelButton: true,

                confirmButtonColor: '#3085d6',

                cancelButtonColor: '#d33',

                confirmButtonText: 'Update Data!',

                cancelButtonText: 'Batal',

            }).then((result) => {

                if (result.value) {

                    $('#frm_so').submit();

                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    $('#tipe_btn').val('');
                }

            });

        }
    </script>
@stop
