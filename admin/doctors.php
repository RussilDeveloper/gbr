<?php include('users/includes/init.php');?>
<?php include(ROOT.'/template/header.php') ?>

                <div class="page-header">
                    <div class="page-title">
                        <h3>Doctor Management</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Create Doctor</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form class="mb-4">
                                  
                                  <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input doctorname" type="text" id="sample1">
                                    <label class="mdl-textfield__label" for="sample1">Doctor Name</label>
                                  </div>
                                   <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input doctorspec" type="text" id="sample2">
                                    <label class="mdl-textfield__label" for="sample2">Doctor Specialist</label>
                                  </div>
                                  <button class="btn-creative btn-6 btn-6a btn-rounded" id="doctor">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 col-sm-6  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Doctors List</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div id="loadDoctorList">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php include(ROOT.'/template/footer.php') ?>  
<script src="js/doctor.js"></script>