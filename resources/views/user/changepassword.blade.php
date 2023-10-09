@extends('layout.appuser')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet"
            href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/') }}">
        <title>Data Monitoring</title>
       
    </head>

    <body>

        <div class="content-body">
            <div class="container-fluid">
               
    
                {{-- bordered table --}}
    
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Forms Change Account</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-valide-with-icon" action="{{ route('user.updatepassword') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="text-label">Password *</label>
                                        <div class="input-group transparent-append">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                            </div>
                                            <input name="password" type="password" class="form-control">
                                        </div>
                                    </div>
                                     
                                    <button style="margin-top: 2%" type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <a href="/dashboarduser" style="position: absolute;left:10%;bottom:9%"><button class="btn btn-light">Back</button></a> 
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


    </body>

    </html>
@endsection
