<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Monitoring </title>
    <!-- Favicon icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                {{-- <img class="logo-abbr" src="./images/synx.png" alt=""> --}}
                <p class="brand-title" style="padding-top:6%;font-size:98%">Data Monitoring</p>
                {{-- <img class="logo-compact" src="./images/synxchro.png" alt=""> --}}
                {{-- <img class="brand-title" src="./images/synxchro.png" alt=""> --}}
            </div>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <h4 style="padding-top: 8%">Hi {{ Auth::user()->name }}, welcome back!</h4>
                            {{-- <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div> --}}
                        </div>

                        <ul class="navbar-nav header-right" >
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void()" aria-expanded="false" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/logout" class="dropdown-item">
                                        <i class="mdi mdi-logout"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>

                            {{-- <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="/logout" role="button">
                                    <i class="mdi mdi-logout"></i>
                                </a>

                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu" style="margin-top: 5%;">
                    <li><a href="/dashboardadmin"><i class="icon icon-home" style="color: white"></i><span class="nav-text" style="color: white">Dashboard</span></a>
                        {{-- <ul aria-expanded="false">
                            <li><a href="./index.html">Dashboard 1</a></li>
                            <li><a href="./index2.html">Dashboard 2</a></li>
                        </ul> --}}
                    </li>

                    <li style="margin-top: 5%"><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25" style="color: white"></i><span class="nav-text" style="color: white">Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="/event-log-admin"style="color: white">Event Log</a></li>
                        </ul>
                    </li>

                    <li style="margin-top: 5%">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="ti-user" style="color: white"></i><span class="nav-text" style="color: white">User Management</span></a>
                <ul aria-expanded="false">
                    <li><a href="/usermanagement"style="color: white">User</a></li>
                    <li><a href="/usermanagement"style="color: white">Management</a></li>
                </ul>
            </li>

                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        @yield('content')



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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var form = $(this).closest('form'); // Ambil form terdekat


                Swal.fire({
                    title: 'Yakin Mau Di Hapus?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika pengguna mengkonfirmasi, kirim permintaan penghapusan
                        form.submit();
                    }
                })
            })
        });
    </script>

@include('sweetalert::alert')

</body>

</html>
