@extends('layout.app')
@section('content')
    <!--**********************************
                        Content body start
                    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi {{Auth::user()->name}}, welcome back!</h4>
                        {{-- <span class="ml-1">Data Table Log</span> --}}
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="/event-log-admin">Data Table Log</a></li>
                    </ol>
                </div>
            </div>

            {{-- bordered table --}}

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table Data Log</h4>
                        <a href="{{ route ('exportdata')}}"class="btn btn-success">Export</a>
                    </div>
                    <form action="/event-log-admin" method="GET">
                        <div class="mb-2 mt-3" style="padding-left: 2%">
                            <label class="form-label" style="color: black">Search</label>
                            <input style="width: 20%" type="search" name="search" class="form-control"
                                placeholder="Office ID OR  Branch ID" value="{{ $request->search }}">
                        </div>
                    </form>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered verticle-middle table-responsive-sm" style="color: black">
                                <thead>
                                    @if (count($masterData) > 0)
                                        <tr>
                                            <th scope="col">MODUL</th>
                                            <th scope="col">OFFICE ID</th>
                                            <th scope="col">BRANCH ID</th>
                                            <th scope="col">LAST UPDATE</th>
                                            <th scope="col">DATABASE NAME</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    @foreach ($masterData as $data)
                                        <tr>
                                            <td>{{ $data->modul }}</td>
                                            <td>{{ $data->id_satuan_kerja }}</td>
                                            <td>{{ $data->kode_cabang }}</td>
                                            <td>{{ $data->last_updated }}</td>
                                            <td>{{ $data->dbname }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <p>Tidak ada data yang ditemukan.</p>
                            @endif                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- row -->
            {{-- <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="padding-left: 20px">MODUL</th>
                                                <th>ID SATUAN</th>
                                                <th>KODE CABANG</th>
                                                <th style="padding-left: 20px">LAST UPDATE</th>
                                                <th style="padding-left: 20px">DATABASE NAME</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($masterData as $data)
                                            <tr>
                                                <td>{{ $data->modul }}</td>
                                                <td>{{ $data->id_satuan_kerja }}</td>
                                                <td>{{ $data->kode_cabang }}</td>
                                                <td>{{ $data->last_updated }}</td>
                                                <td>{{ $data->dbname }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="padding-left: 20px">MODUL</th>
                                                <th>ID SATUAN</th>
                                                <th>KODE CABANG</th>
                                                <th style="padding-left: 20px">LAST UPDATE</th>
                                                <th style="padding-left: 20px">DATABASE NAME</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
            <!--**********************************
                        Content body end
                    ***********************************-->

            <!--**********************************
                       Support ticket button start
                    ***********************************-->

            <!--**********************************
                       Support ticket button end
                    ***********************************-->


        </div>
        <!--**********************************
                    Main wrapper end
                ***********************************-->
        <!--**********************************
                    Scripts
                    ***********************************-->
        <!-- Required vendors -->
        <script src="{{ asset('./vendor/global/global.min.js') }}"></script>
        <script src="{{ asset('./js/quixnav-init.js') }}"></script>
        <script src="{{ asset('./js/custom.min.js') }}"></script>


        <script src="{{ asset('vendor/global/global.min.js') }}"></script>
        <script src="{{ asset('js/quixnav-init.js') }}"></script>
        <script src="{{ asset('js/custom.min.js') }}"></script>
    
    
        <!-- Vectormap -->
        <script src="{{ asset('vendor/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('./vendor/morris/morris.min.js') }}"></script>
    
        <script src="{{ asset('./js/plugins-init/morris-init.js') }}"></script>
    
        <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    
        <script src="{{ asset('vendor/gaugeJS/dist/gauge.min.js') }}"></script>
    
        <!--  flot-chart js -->
        <script src="{{ asset('vendor/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}"></script>
    
        <!-- Owl Carousel -->
        <script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
    
        <!-- Counter Up -->
        <script src="{{ asset('vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
        <script src="{{ asset('vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
    
    
        <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

        <!-- Datatable -->
        <script src="{{ asset('./vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('./js/plugins-init/datatables.init.js') }}"></script>
    @endsection
