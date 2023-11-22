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


        .title-page-content {
            color: #1E3168;
            font-size: 24px;
            font-weight: 700;
            line-height: 33px;
            letter-spacing: 0em;
            text-align: left;
            margin-bottom: 0px;
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
   {{--  @php
        $lang = Helper::getLang();
    @endphp --}}
    <div class="content mt-4">
        <div class="row mt-4">
            <div class="col-md-4">
                <h3 class="title-page-content">
                    Quotation
                </h3>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="get">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text no-bg">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control col-md-11"
                                    value="{{-- {{ $valueStart }} - {{ $valueEnd }} --}}" id="daterangeNew" autocomplete="off">
                                <input type="hidden" name="start_date" id="selectedDatePickerField"
                                    value="{{-- {{ $startDate }} --}}" /><br />
                                <input type="hidden" name="end_date" id="selectedDatePickerField2"
                                    value="{{-- {{ $endDate }} --}}" />
                                {{-- <button type="submit"
                                class="btn btn-primary-dark pull-right">Tampilkan
                                Data --}}
                                <div class="ml-10">
                                    <button type="submit" class="btn btn-primary-dark pull-right" id="submit-filter">
                                        {{-- @if ($lang == 'en') --}}
                                            Show
                                        {{-- @else --}}
                                           {{--  Tampilkan
                                        @endif --}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                           {{--  @if ($lang == 'en') --}}
                                <input type="text" name="myInputTextField" id="myInputTextField"
                                    class="form-control pull-right border-right-0" placeholder="Search">
                           {{--  @else
                                <input type="text" name="myInputTextField" id="myInputTextField"
                                    class="form-control pull-right border-right-0" placeholder="Cari">
                            @endif --}}
                            <div class="input-group-append bg-transparent">
                                <span class="input-group-text custom-group-text bg-white border-left-0">
                                    <i class="si si-magnifier text-flat-dark font-w600"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ url('quotation-create') }}">
                            <button type="button" class="btn btn-primary-dark pull-right">
                               {{--  @if ($lang == 'en') --}}
                                    + Create
                               {{--  @else
                                    + Tambah
                                @endif --}}
                            </button>
                        </a>
                    </div>
                </div>
                {{-- <div
                {{-- <div class="daterange"
                    style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span>
                </div> --}}
                {{-- <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text no-bg">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                        <input type="text" name="start-date" class="form-control col-md-11 daterange"
                            value="{{ date('m/d/Y') }}" id="" autocomplete="off">
                        <span></span>
    
                    </div>
                </div> --}}


            </div>

            {{-- <div class="col-md-2">
            @if (Auth::user()->role != 1)
            <select name="filter_divisi" id="filter-divisi" class="form-control">
                 <option value="all" {{ $divisi == "all" ? 'selected' : ''}}>Semua Divisi</option>
                 <option value="1" {{ $divisi == "1" ? 'selected' : ''}}>Divisi 1</option>
                 <option value="2" {{ $divisi == "2" ? 'selected' : ''}}>Divisi 2</option>
                 <option value="gab" {{ $divisi == "gab" ? 'selected' : ''}}>Divisi Gabungan</option>
            </select>
            @else
            <span class="form-control">Divisi {{Auth::user()->id_divisi}} </span>
            @endif
          </div>
          <div class="col-md-2">
               @php
               $namaBulan = array(1 => "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
               @endphp
                 <div class="form-group">
                   <select class="form-control" name="bulan" id="bulan">
                        <option value="">Semua Bulan</option>
                        @for ($i = 1; $i <= 12; $i++)
                        <option @if ($i == $bulan) selected @endif value="{{$i}}">{{$namaBulan[$i]}}</option>
                        @endfor
                  </select>
                 </div>
          </div>
          <div class="col-md-2">
               <select name="tahun" id="tahun" class="form-control">
                    @php
                       $tahun_array = [];
                    @endphp
                    @if (count($dates) > 0)
                    @foreach ($dates as $ts)
                    <option value="{{ $ts->year }}" {{ $ts->year == $tahun ? 'selected' : ''}}>{{ $ts->year }}</option>
                   @endforeach
                    @else
                        <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                    @endif
              </select>
          </div>
          <div class="col-md-2">
               <select name="filter-status" class="form-control" id="filter-status">
                <option @if ($filter == '') selected @endif value="">Semua Status</option>
                 <option @if ($filter == 0 && $filter != '') selected @endif value="0">Request SO</option>
                 <option @if ($filter == 1) selected @endif value="1">Open</option>
                 <option @if ($filter == 2) selected @endif value="2">Invoice</option>
                 <option @if ($filter == 3) selected @endif value="3">Delivered</option>
                 <option @if ($filter == 4) selected @endif value="4">Cancel</option>
               </select>
          </div> --}}
        </div>
    </div>
    <div class="content">
        <!-- Dynamic Table Full -->
        <div class="block mt-2">
            <div class="block-content block-content-full no-padding">
                <form method="post" action="{{-- {{ url('check-so') }} --}}" id="frm_so">
                   {{--  @csrf --}}
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->

                    {{-- <div class="row p-4">
           @if (Auth::user()->role != 1)
         <div class="col-md-2" id="submit_prog" style="display:none">
           <select name="status" class="form-control">
             <option value="" disabled="" selected="selected">Pilih Status</option>
              <option value="1">Open</option>
              <option value="2">Invoice</option>
              <option value="3">Delivered</option>
              <option value="4">Cancel</option>
           </select>
         </div>
         <div class="col-md-3" id="submit_prog1" style="display:none">
              <div class="row">
                   <div class="col-md-5">
                        <button class="btn btn-sm btn-primary" onclick="UpdateAlert()" type="button" id="btn_edit">
                            <i class="fa fa-fw fa-pencil-square-o"></i>Update
                        </button>
                   </div>
                   <div class="col-md-1">
                        <span>|</span>
                   </div>
                   <div class="col-md-5">
                        <button class="btn btn-sm btn-delete pull-right" onclick="DeleteAlert()" type="button" id="btn_hapus">
                            <i class="fa fa-fw fa-trash-o"></i>Hapus
                        </button>
                   </div>
              </div>

         </div>
         @endif
       </div> --}}

                    <input type="hidden" name="tipe_btn" id="tipe_btn">
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover table-vcenter js-table-checkable js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:5%">
                                        {{-- @if (Auth::user()->role != 1)
                                            <label class="css-control css-control-primary css-checkbox py-0">
                                                <input type="checkbox" class="css-control-input" id="check-all">
                                                <span class="css-control-indicator"></span>
                                            </label>
                                        @else
                                            #
                                        @endif --}}
                                    </th>
                                    {{-- @if ($lang == 'en') --}}
                                        <th style="width:10%">Date</th>
                                        <th style="width:10%">NO Quotation</th>
                                        <th style="width:13%">Sales Name</th>
                                        <th style="width:20%">Customer</th>
                                        <th style="width:20%">Company</th>
                                        <th style="width:15%">Amount</th>
                                        <th style="width:10%">Status</th>
                                  {{--   @else
                                        <th style="width:10%">Tanggal</th>
                                        <th style="width:10%">NO Quotation</th>
                                        <th style="width:13%">Nama Sales</th>
                                        <th style="width:20%">Pelanggan</th>
                                        <th style="width:20%">Perusahaan</th>
                                        <th style="width:15%">Jumlah</th>
                                        <th style="width:10%">Status</th>
                                    @endif --}}
                                </tr>
                            </thead>
                            <tbody id="tbd">
                                {{-- @php $no = 1; @endphp --}}
                               {{--  @foreach ($data as $key => $datas) --}}
                                    <tr>
                                        <td style="text-align:center;">{{-- {{ $key + 1 }} --}}</td>
                                        <td
                                            onclick="">
                                           {{--  {{ date('d/m/Y ', strtotime($datas->date)) }} --}}</td>
                                        <td
                                            onclick="">
                                           {{--  {{ $datas->no_po }} --}}</td>
                                        <td
                                            onclick="">
                                            {{-- {{ $datas->nama_sales }} --}}</td>
                                        <td
                                            onclick="">
                                            {{-- {{ $datas->nama_customer }} --}}</td>
                                        <td
                                            onclick="">
                                            {{-- {{ $datas->nama_perusahaan }} --}}</td>

                                        <td
                                            onclick="">
                                            <span class="weight-font ml-3">Rp.
                                                <span class="viewIDCurrency">{{-- {{ $datas->total_subtotal }} --}}</span></span>
                                           {{--  @php
                                                
                                                $open = 'Draft';
                                                $sent = 'Sent';
                                                $paid = 'Invoiced';
                                                $delivered = 'Delivered';
                                                $cancel = 'Void';
                                                $expired = 'Expired';
                                                $openSo = 'Open SO';
                                                
                                                if(Helper::check_expired($datas->exp)) {
                                                    $status = $expired;
                                                    $statusBadge = 'badge-primary status-expired';
                                                }
                                                elseif ($datas->status == 0) {
                                                    $status = $open;
                                                    $statusBadge = 'badge-primary status-gray';
                                                } elseif ($datas->status == 1) {
                                                    $status = $sent;
                                                    $statusBadge = 'badge-primary status-green';
                                                } elseif ($datas->status == 2) {
                                                    $status = $paid;
                                                    $statusBadge = 'badge-primary status-blue-young';
                                                } elseif ($datas->status == 3) {
                                                    $status = $delivered;
                                                    $statusBadge = 'badge-success status-green';
                                                } elseif ($datas->status == 4) {
                                                    $status = $cancel;
                                                    $statusBadge = 'badge-primary status-gray';
                                                } elseif ($datas->status == 5) {
                                                    $status = $openSo;
                                                    $statusBadge = 'badge badge-success status-blue-young';
                                                } else {
                                                    $status = $open;
                                                    $statusBadge = 'badge-primary status-gray';
                                                }
                                            @endphp
 --}}
                                        <td
                                            onclick="redirectRow('{{ url('') }}/detail-quotation/{{ $datas->id }}')">
                                            <span class="badge {{ $statusBadge }}"> {{ $status }} </span>


                                        </td>
                                    </tr>
                                {{-- @endforeach --}}

                            </tbody>
                        </table>
                    </div>
            </div>
            </form>
            <!-- END Dynamic Table Full -->
        </div>



        <div class="block form-block">
            <div class="block-content block-header-default p-0 block-history form-header-block">
                <div class="row mx-0 p-3">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="row mx-0">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pl-0">
                                <div class="label-wrap-history">
                                    <h3 class="label-history">
                                       {{--  @if ($lang == 'en') --}}
                                            History
                                      {{--   @else
                                            Riwayat
                                        @endif --}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content p-0 block-history">
                <div class="row mx-0 py-4 px-3">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="wrapHistoryDiv">
                        {{-- <div class="row mx-0">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 pl-0">
                <span class="badge p-2 badge-date-history">19/08/2022 23:09:03</span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <div class="label-history">
                <h4 class="text-history mb-0">
                      SO - List SO Created by <span class="actionby-history"> Super Admin</span>
                </h4>
              </div>
            </div>
          </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">
                        <span id="modal-title-text"></span>
                        <span class="badge-status">
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="form-master" enctype="multipart/form-data">
                       {{--  {{ csrf_field() }} --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label class="label-form-blue">Status </label>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control status-select" name="status">
                                                <option value="n" style="color:#d1d1d1;">-- Pilih Status --</option>
                                                <option value="1">Open</option>
                                                <option value="2">Invoice</option>
                                                <option value="3">Delivered</option>
                                                <option value="4">Cancel</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" id="form-master" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





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
            $('#selectedDatePickerField').val("{{ $startDate }}");
            $('#selectedDatePickerField2').val("{{ $endDate }}");

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

        $(function() {
            Codebase.helpers('table-tools');
        });

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
