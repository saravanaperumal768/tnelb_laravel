@include('include.top')
@include('include.header')
@include('include.navbar')

<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">
            <div class="secondary-nav">
                <div class="breadcrumbs-container" data-page-heading="Analytics">
                    <header class="header navbar navbar-expand-sm">
                        <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                        <div class="d-flex breadcrumb-content">
                            <div class="page-header">
                                <div class="page-title"></div>
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

            <div class="row layout-top-spacing">
                <div id="tabsSimple" class="col-xl-6 col-6 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Edit/View Applicant's Details</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="simple-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Payment Status</button>
                                    </li>

                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <div class="row mt-3 pad-left-10">
                                            <div class="col-lg-6">
                                                <p><strong> Payment Status</strong></p>
                                            </div>

                                            <div class="col-lg-6">
                                                <p>{{ $applicant->payment_status }}</p>
                                            </div>

                                            <div class="col-lg-6">
                                                <p><strong> Transaction Id</strong></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p>{{ $applicant->transaction_id }}</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p><strong> Payment Time</strong></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p>{{ $applicant->created_at }}</p>
                                            </div>




                                        </div>
                                    </div>



                                </div>

                            </div>

                        </div>
                        <!-- <div class="modal-footer mt-2">
                            <button class="btn btn-light-dark _effect--ripple waves-effect waves-light  " style="margin-right: 20px;" data-bs-dismiss="modal">Discard</button>
                            <button type="button" class="btn btn-primary _effect--ripple waves-effect waves-light">Save</button>
                        </div> -->
                    </div>

                </div>
                <div id="tabsSimple" class="col-xl-6 col-6 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Remarks</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2 ">

                                <!-- <label for="Notes " class="text-md-right" style="float: right;"> Notes</label> -->
                            </div>

                            <div class="col-lg-8 col-md-offset-2">
                                <textarea class="form-control" name="remarks" rows="4" cols="50">

                                 </textarea>
                            </div>


                        </div>

                        <div class="modal-footer mt-2">
                            <button class="btn btn-success " style="margin-right: 20px;" data-bs-dismiss="modal">Forward To Secretary</button>
                            <button class="btn btn-warning " style="margin-right: 20px;" data-bs-dismiss="modal">On Hold</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </div>
                    </div>

                </div>

                <!-- ------------------------------- -->

            </div>

            <!-- -------------------------------------------- -->
            <div class="row ">
                <!-- ----------------------------- -->
                <div id="timelineMinimal " class="col-lg-12 layout-spacing mt-2">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Workflow</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area pb-1">
                            <div class="mt-container mx-auto">
                                <div class="timeline-line">

                                    <div class="item-timeline">
                                        <p class="t-time">19/02/2025</p>
                                        <div class="t-dot t-dot-warning">
                                        </div>
                                        <div class="t-text">
                                            <p>Applicant Applied </p>
                                            <p class="t-meta-time">Form S, License C</p>
                                           
                                        </div>
                                    </div>

                                    <div class="item-timeline">
                                        <p class="t-time">20/02/2025</p>
                                        <div class="t-dot t-dot-primary">
                                        </div>
                                        <div class="t-text">
                                            <!-- <p>Applied Form S, License C</p> -->
                                            <p>Supervisor Forward To Auditor</p>
                                            <p>Remarks: <span class="badge badge-success">Verified</span> </p>
                                            <!-- <p class="t-meta-time">12.00</p> -->
                                        </div>
                                    </div>

                                    <!-- <div class="item-timeline">
                                        <p class="t-time">21/02/2025</p>
                                        <div class="t-dot t-dot-success">
                                        </div>
                                        <div class="t-text">
                                            <p>Aduitor Forward to Secretary</p>
                                            <p class="t-meta-time">2 hrs ago</p>
                                            <p>Remarks: <span class="badge badge-success">Verified</span> </p>
                                        </div>
                                    </div> -->





                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('include.footer')