@include('include.top')
@include('include.header')
@include('include.navbar')



<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">

            <!--  BEGIN BREADCRUMBS  -->
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="{{ route('secretary_table')}}" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <div class="d-flex breadcrumb-content">
                            <div class="page-header">

                                <div class="page-title">
                                </div>

                                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>

                                    </ol>
                                </nav>

                            </div>
                        </div>

                    </header>
                </div>
            </div>
            <!--  END BREADCRUMBS  -->

            <div class="row layout-top-spacing">




                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-five bg-H color_forms">
                        <div class="widget-content">
                            <div class="account-box">

                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-3">
                                            <div class="icon">
                                                <span>
                                                     <i class="fa fa-file-text"></i>
                                                    <!-- <img src="{{url ('assets/images/icon/doc-icon.png') }}" alt="money-bag"> -->
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-9">
                                            <div class="balance-info">
                                                <h6>Form H</h6>
                                                <h5>License WH</h5>
                                                <!-- <span class="g-dot-success"></span> -->
                                                <!--  <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4> -->
                                                <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4>

                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="card-bottom-section">

                                    <a href="{{ route('secretary_table')}}" class="">View Pendings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ---------------------------------- -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-five bg-red color_forms">
                        <div class="widget-content">
                            <div class="account-box">

                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-3">
                                            <div class="icon">
                                                <span>
                                                <i class="fa fa-file-text"></i>
                                                    <!-- <img src="{{url ('assets/images/icon/doc-icon.png') }}" alt="money-bag"> -->
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-9">
                                            <div class="balance-info">
                                                <h6>Form W</h6>
                                                <h5>License A</h6>
                                                <!-- <span class="g-dot-success"></span> -->
                                                 <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4>
                                                <!-- <h5> Completed <span class="badge badge-success">20+</span></h5>
                                                <h5> Pending <span class="badge badge-warning">15+</span></h5> -->

                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="card-bottom-section">

                                    <a href="{{ route('secretary_table')}}" class="">View Pendings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ------------------------------------- -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-five bg-yellow color_forms">
                        <div class="widget-content">
                            <div class="account-box">

                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-3">
                                            <div class="icon">
                                                <span>
                                                <i class="fa fa-file-text"></i>
                                                    <!-- <img src="{{url ('assets/images/icon/doc-icon.png') }}" alt="money-bag"> -->
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-9">
                                            <div class="balance-info">
                                                <h6>Form S</h6>
                                                <h5>License C</h6>
                                                <!-- <span class="g-dot-success"></span> -->
                                                 <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4>
                                                <!-- <h5> Completed <span class="badge badge-success">20+</span></h5>
                                                <h5> Pending <span class="badge badge-warning">15+</span></h5> -->

                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="card-bottom-section">

                                    <a href="{{ route('secretary_table')}}" class="">View Pendings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ------------------------------------- -->

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-five bg-green color_forms">
                        <div class="widget-content">
                            <div class="account-box">

                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-3">
                                            <div class="icon">
                                                <span>
                                                <i class="fa fa-file-text"></i>
                                                    <!-- <img src="{{url ('assets/images/icon/doc-icon.png') }}" alt="money-bag"> -->
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-9">
                                            <div class="balance-info">
                                                <h6>Form PG</h6>
                                                <h5>License PG</h6>
                                                <!-- <span class="g-dot-success"></span> -->
                                                 <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4>
                                                <!-- <h5> Completed <span class="badge badge-success">20+</span></h5>
                                                <h5> Pending <span class="badge badge-warning">15+</span></h5> -->

                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="card-bottom-section">

                                    <a href="{{ route('secretary_table')}}" class="">View Pendings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- ------------------------------------- -->

                 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-five bg-dark color_forms">
                        <div class="widget-content">
                            <div class="account-box">

                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-3">
                                            <div class="icon">
                                                <span>
                                                <i class="fa fa-file-text"></i>
                                                    <!-- <img src="{{url ('assets/images/icon/doc-icon.png') }}" alt="money-bag"> -->
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-9">
                                            <div class="balance-info">
                                                <h6>Form EB</h6>
                                                <h5>License EB</h6>
                                                <!-- <span class="g-dot-success"></span> -->
                                                 <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4>
                                                <!-- <h5> Completed <span class="badge badge-success">20+</span></h5>
                                                <h5> Pending <span class="badge badge-warning">15+</span></h5> -->

                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="card-bottom-section">

                                    <a href="{{ route('secretary_table')}}" class="">View Pendings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- --------------------------------------------------------- -->

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-five bg-gray color_forms">
                        <div class="widget-content">
                            <div class="account-box">

                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-3">
                                            <div class="icon">
                                                <span>
                                                <i class="fa fa-file-text"></i>
                                                    <!-- <img src="{{url ('assets/images/icon/doc-icon.png') }}" alt="money-bag"> -->
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-9">
                                            <div class="balance-info">
                                                <h6>Form ESB</h6>
                                                <h5>License ESB</h6>
                                                <!-- <span class="g-dot-success"></span> -->
                                                 <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4>
                                                <!-- <h5> Completed <span class="badge badge-success">20+</span></h5>
                                                <h5> Pending <span class="badge badge-warning">15+</span></h5> -->

                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="card-bottom-section">

                                    <a href="{{ route('secretary_table')}}" class="">View Pendings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------------------------------ -->

                   

                   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-five bg-thickgreen color_forms">
                        <div class="widget-content">
                            <div class="account-box">

                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-3">
                                            <div class="icon">
                                                <span>
                                                <i class="fa fa-file-text"></i>
                                                    <!-- <img src="{{url ('assets/images/icon/doc-icon.png') }}" alt="money-bag"> -->
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-9">
                                            <div class="balance-info">
                                                <h6>Form EA</h6>
                                                <h5>License EA</h6>
                                                <!-- <span class="g-dot-success"></span> -->
                                                 <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4>
                                                <!-- <h5> Completed <span class="badge badge-success">20+</span></h5>
                                                <h5> Pending <span class="badge badge-warning">15+</span></h5> -->

                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="card-bottom-section">

                                    <a href="{{ route('secretary_table')}}" class="">View Pendings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------------------------------------ -->

                

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-five bg-thickblue color_forms">
                        <div class="widget-content">
                            <div class="account-box">

                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-lg-3 col-3">
                                            <div class="icon">
                                                <span>
                                                <i class="fa fa-file-text"></i>
                                                    <!-- <img src="{{url ('assets/images/icon/doc-icon.png') }}" alt="money-bag"> -->
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-9 col-9">
                                            <div class="balance-info">
                                                <h6>Form EA</h6>
                                                <h5>License EA</h6>
                                                <!-- <span class="g-dot-success"></span> -->
                                                 <h4> Completed <span class="badge badge-success">20+</span></h4>
                                                <h4> Pending <span class="badge badge-warning">15+</span></h4>
                                                <!-- <h5> Completed <span class="badge badge-success">20+</span></h5>
                                                <h5> Pending <span class="badge badge-warning">15+</span></h5> -->

                                            </div>
                                        </div>

                                    </div>



                                </div>

                                <div class="card-bottom-section">

                                    <a href="{{ route('secretary_table')}}" class="">View Pendings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing" style="display:none;">
                    <div class="widget-four">
                        <div class="widget-heading">
                            <h5 class="">Visitors by Browser</h5>
                        </div>
                        <div class="widget-content">
                            <div class="vistorsBrowser">
                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <line x1="21.17" y1="8" x2="12" y2="8"></line>
                                            <line x1="3.95" y1="6.06" x2="8.54" y2="14"></line>
                                            <line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">
                                        <div class="w-browser-info">
                                            <h6>Chrome</h6>
                                            <p class="browser-count">65%</p>
                                        </div>
                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">

                                        <div class="w-browser-info">
                                            <h6>Safari</h6>
                                            <p class="browser-count">25%</p>
                                        </div>

                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="browser-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                        </svg>
                                    </div>
                                    <div class="w-browser-details">

                                        <div class="w-browser-info">
                                            <h6>Others</h6>
                                            <p class="browser-count">15%</p>
                                        </div>

                                        <div class="w-browser-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>



                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing" style="display: none;">
                    <div class="widget widget-table-one">
                        <div class="widget-heading">
                            <h5 class="">Total Forms Pending</h5>
                            <div class="task-action">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <!-- <div class="dropdown-menu left" aria-labelledby="pendingTask" style="will-change: transform;">
                                                <a class="dropdown-item" href="javascript:void(0);">View Report</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit Report</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Mark as Done</a>
                                            </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="widget-content">
                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Approved By Secretary</h4>
                                            <p class="meta-date">Today</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>Waiting</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list t-info">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar">
                                                <span class="avatar-title">S</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Approved By Supervisor 1</h4>
                                            <p class="meta-date">01-02-2025</p>
                                        </div>
                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>Approved It</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar">
                                                <span class="avatar-title">WH</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Approved By Supervisor 2</h4>
                                            <p class="meta-date">31-01-2025</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>Pending</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list t-secondary">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>Approved By Supervisor 3</h4>
                                            <p class="meta-date">30-01-2025</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>Approved</span></p>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>

                <!-- -------------------------------------------------------- -->

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="display: none;">
                    <div class="widget widget-table-two">

                        <div class="widget-heading">
                            <h5 class="">Pending Applications</h5>
                        </div>

                        <div class="widget-content model-Table">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="th-content">Application id </div>
                                            </th>
                                            <!-- <th>
                                                <div class="th-content">Applicant's Name</div>
                                            </th> -->
                                            <th>
                                                <div class="th-content">Form Name</div>
                                            </th>
                                            <th>
                                                <div class="th-content">License</div>
                                            </th>
                                            <th>
                                                <div class="th-content">Applied On</div>
                                            </th>
                                            <th>
                                                <div class="th-content th-heading">Action</div>
                                            </th>
                                            <!-- <th><div class="th-content">Status</div></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($applications as $application)
                                        <tr>
                                            <td>
                                                <a href="{{ route('applicants_detail', ['applicant_id' => $application->application_id]) }}">
                                                    <div class="td-content customer-name text-dark">
                                                        <span>{{ $application->application_id }}</span>
                                                    </div>
                                                </a>
                                            </td>

                                            <td>
                                                <div class="td-content product-invoice">
                                                    {{ $application->formname_appliedfor }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content pricing">
                                                    <span>{{ $application->license_name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="td-content">

                                                    {{ $application->created_at }}

                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info view-applicant" data-bs-toggle="modal" data-bs-target="#tabsModal"
                                                    data-applicant-id="{{ $application->application_id }}">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach

                                        <!-- Modal (Outside the loop) -->
                                        <div class="modal fade" id="tabsModal" tabindex="-1" role="dialog" aria-labelledby="tabsModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="tabsModalLabel">Edit/View Applicant's Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="simple-pill">
                                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Personal Details</button>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Check List</button>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Remarks</button>
                                                                </li>
                                                            </ul>

                                                            <div class="tab-content" id="pills-tabContent">
                                                                <!-- Personal Details -->
                                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <p>Applicant Id</p>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <p id="applicant_id"></p>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <p>Applicant Name</p>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <p id="applicant_name"></p>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <p>Father's Name</p>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <p id="fathers_name"></p>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <p>Address</p>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <p id="applicants_address"></p>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <p>D.O.B & Age</p>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <p id="dob_age"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Checklist -->
                                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                                                    <!-- <div id="checklist_content">Loading...</div> -->
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" Checked>
                                                                            <label for="vehicle1"> Applicant Signature in Application Form</label>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" Checked>
                                                                            <label for="vehicle1"> Applicant Sign attached by Officer</label>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" Checked>
                                                                            <label for="vehicle1"> Educational Qualification Certificate</label>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" Checked>
                                                                            <label for="vehicle1"> Proof of D.O.B</label>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" Checked>
                                                                            <label for="vehicle1"> Photograph</label>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" Checked>
                                                                            <label for="vehicle1"> Specimen Signature</label>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel">
                                                                    <!-- <div id="process_content">Loading...</div> -->
                                                                    <div class="row">
                                                                        <div class="col-lg-2 ">

                                                                            <label for="Notes " class="text-md-right" style="float: right;"> Notes</label>
                                                                        </div>

                                                                        <div class="col-lg-8">
                                                                            <textarea class="form-control" name="remarks" rows="4" cols="50">

                                                                        </textarea>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>








            </div>

        </div>

    </div>
</div>

@include('include.footer');