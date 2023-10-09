@extends('layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                               <a href="/usermanagement"> <i class="ti-user text-success border-success"></i></a>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Total User</div>
                                <div class="stat-digit">{{ $users->count() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <a href="/event-log-admin"><i class="fa fa-database text-primary border-primary"></i></a>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Total Data Log</div>
                                <div class="stat-digit">{{ $event_log->count() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- /# column -->
               
            </div>
           
        </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
