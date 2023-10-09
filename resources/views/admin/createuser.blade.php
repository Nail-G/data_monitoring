<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Monitoring </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/') }}">
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/synx.png')}}"> --}}
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
<body>
    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Forms Create New Account</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form class="form-valide-with-icon" action="/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="text-label">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter a username..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-label">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-inbox"></i> </span>
                                </div>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter a Email..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-label">Password *</label>
                            <div class="input-group transparent-append">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Choose a safe one..">
                            </div>
                        </div>
                         <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Role</label> 
                            <br>
                            <select style="width: 10%;height:4vh" id="role" class="form-select" name="role">
                              <option value="admin">Admin</option> 
                              <option value="user">User</option> 
                            </select>
                          </div>   
                        <button style="margin-top: 2%" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <a href="/usermanagement" style="position: absolute;left:10%;bottom:4.5%"><button class="btn btn-light">Back</button></a> 
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
