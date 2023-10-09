@extends('layout.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Monitoring </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/') }}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
<body>
    <div class="content-body">
        <div class="container-fluid">
        
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Vertical Forms with icon</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form class="form-valide-with-icon" action="/usermanagement/up/{{$usertbl->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label">NAMA</label>
                            <input name="name" value="{{$usertbl->name}}" type="text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label  class="form-label">EMAIL</label>
                            <input name="email" value="{{$usertbl->email}}" type="text" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label  class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label  class="form-label">ROLE</label>
                            <input name="role" value="{{$usertbl->role}}" type="text" class="form-control" >
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <a href="/usermanagement" style="position: absolute;left:10%;bottom:4.5%"><button class="btn btn-light">Back</button></a> 
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

    
     <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('vendor/global/global.min.js')}}"></script>
    <script src="{{asset('js/quixnav-init.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{asset('vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset('vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


    <script src="{{asset('js/dashboard/dashboard-1.js')}}"></script>

</body>
</html>
@endsection
