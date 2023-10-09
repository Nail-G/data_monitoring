@extends('layout.appuser')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                               <a href="/event-log-user"><i class="fa fa-database text-primary border-primary"></i></a> 
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
