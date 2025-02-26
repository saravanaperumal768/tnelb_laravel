@include('include.top')
@include('include.header')
@include('include.navbar')
<style>
    .tab-content {
        padding: 0px 20px;
    }
</style>
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
                                    <h3 class="application_id_css">Application Id :<span style="color:#098501;"> {{ $applicant->application_id }}</span> </h3>
                                    <h4>Edit/View Applicant's Details</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="simple-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Personal Details</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Payment Status</button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Check List</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade " id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <div class="row mt-3 ">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <p><strong>Applicant Id:</strong></p>

                                                            <p><strong>Applicant Name:</strong></p>

                                                            <p><strong>Father's Name:</strong></p>

                                                            <p><strong>Address:</strong></p>

                                                            <p><strong>D.O.B & Age:</strong></p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p>{{ $applicant->application_id }}</p>

                                                            <p>{{ $applicant->applicant_name }}</p>

                                                            <p>{{ $applicant->fathers_name }}</p>

                                                            <p>{{ $applicant->applicants_address }}</p>

                                                            <p>{{ $applicant->d_o_b }} ({{ $applicant->age }} years old)</p>
                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="col-lg-3 " >
                                                    <img src="{{ asset('assets/images/photo_tnelb_1120_1740402300.jpg') }}" alt="Profile-img" width="150" height="150" class="img-fluid rounded">

                                                    <!-- @foreach($documents as $document)
                                                    <img src="{{ $document->upload_photo }}" alt="{{ $document->upload_photo }}" class="img-fluid rounded">
                                                    <img src="https://10.163.2.190:8001/storage/{{ $document->upload_photo }}" alt="Applicant Photo" class="img-fluid rounded">

                                                    @endforeach -->


                                                </div>



                                            </div>





                                            <h6 class="mt-4 mb-2">Educational Qualifications</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Degree</th>
                                                        <th>Institution</th>
                                                        <th>Year of Passing</th>
                                                        <th>Percentage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($educationalQualifications as $education)
                                                    <tr>
                                                        <td>{{ $education->educational_level }}</td>
                                                        <td>{{ $education->institute_name }}</td>
                                                        <td>{{ $education->year_of_passing }}</td>
                                                        <td>{{ $education->percentage }}%</td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">No educational details available.</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>

                                            <h6 class="mt-4 mb-2">Work Experience</h6>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Company Name</th>
                                                        <th>Designation</th>
                                                        <th>Years of Experience</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($workExperience as $experience)
                                                    <tr>
                                                        <td>{{ $experience->company_name }}</td>
                                                        <td>{{ $experience->designation }}</td>
                                                        <td>{{ $experience->experience }} years</td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td colspan="3" class="text-center">No work experience available.</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                        <div class="row mt-3">
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input type="checkbox" id="signature_form" name="signature_form" class="form-check-input">
                                                    <label class="form-check-label" for="signature_form">Applicant Signature in Application Form</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="sign_attached" name="sign_attached" class="form-check-input">
                                                    <label class="form-check-label" for="sign_attached">Applicant Sign attached by Officer</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="edu_certificate" name="edu_certificate" class="form-check-input">
                                                    <label class="form-check-label" for="edu_certificate">Educational Qualification Certificate</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="dob_proof" name="dob_proof" class="form-check-input">
                                                    <label class="form-check-label" for="dob_proof">Proof of D.O.B</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="photograph" name="photograph" class="form-check-input">
                                                    <label class="form-check-label" for="photograph">Photograph</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="specimen_signature" name="specimen_signature" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature">Specimen Signature</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="fees_details" name="fees_details" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature">Fees Details</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="age_details" name="age_details" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature">Age 18</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="experience_details" name="experience_details" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature">Two Years Experience after Degree/Diploma</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="all_doc_verification" name="all_doc_verification" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature">All Documents Filled by Applicant</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="safety_certificate" name="safety_certificate" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature">Safety Certificate/ Ust of Equipments</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="contract_copy" name="contract_copy" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature">Contract Copy of HT Works</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="ht_experience_cert" name="ht_experience_cert" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature">HT Experience Certificate in Specimen Format/ Transformer Details</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="experience_in_tamilnadu" name="experience_in_tamilnadu" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature"> Experience in TamilNadu</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="intimation_letter" name="intimation_letter" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature"> Intimation Letter</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="complete_experience_details" name="complete_experience_details" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature"> Complete Experience Details</label>
                                                </div>

                                                <div class="form-check">
                                                    <input type="checkbox" id="required_qualification_certificate" name="required_qualification_certificate" class="form-check-input">
                                                    <label class="form-check-label" for="specimen_signature"> Required Qualification Certificate</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                        <div class="row mt-3">
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

                                <label for="Notes " class="text-md-right" style="float: right;"> Notes</label>
                            </div>

                            <div class="col-lg-8 col-md-offset-2">
                                <textarea class="form-control" name="remarks" rows="4" cols="50">

                                 </textarea>
                            </div>


                        </div>

                        <div class="modal-footer mt-2">
                            <button class="btn btn-success " style="margin-right: 20px;" data-bs-dismiss="modal">Forward To Auditor</button>
                            <button class="btn btn-warning " style="margin-right: 20px;" data-bs-dismiss="modal">On Hold</button>
                            <button type="button" class="btn btn-danger">Reject</button>
                        </div>
                    </div>

                    <!-- ----------------------------- -->
                    <div id="timelineMinimal" class="col-lg-12 layout-spacing mt-4">
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





                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- -------------------------------------------- -->
            <!-- <div class="row">
                
            </div> -->

        </div>
    </div>
</div>



@include('include.footer')