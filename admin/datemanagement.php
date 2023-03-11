<?php include('users/includes/init.php');?>
<?php include(ROOT.'/template/header.php') ?>

                <div class="page-header">
                    <div class="page-title">
                        <h3>Date Management</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Create Appointment on Date</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                   
                                  <div class="mdl-textfield mdl-js-textfield">
                                    <select class="form-control-rounded form-control doctorID">
                                        <option>Select Doctor</option>
                                        <?php echo Clients::loadDoctorDroupdown($db) ?>
                                    </select>
                                   
                                  </div>
                                  <div class="mdl-textfield mdl-js-textfield row">
                                    <p class="col-md-12" style="padding: 0px;color:#000">Select Date</p>
                                    <input class="col-md-12 mdl-textfield__input doctordate" type="date" id="sample2">
                                  </div>
                                  <div class="mdl-textfield mdl-js-textfield row">
                                    <p class="col-md-12" style="padding: 0px;color:#000">From Time</p>
                                    <input class="col-md-12 mdl-textfield__input doctorfromtime" type="time" id="sample2">
                                  </div>
                                  <div class="mdl-textfield mdl-js-textfield row">
                                    <p class="col-md-12" style="padding: 0px;color:#000">To Time</p>
                                    <input class="col-md-12 mdl-textfield__input doctortotime" type="time" id="sample2">
                                  </div>
                                  <button class="btn-creative btn-6 btn-6a btn-rounded" id="doctordate">Create</button>
                          
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 col-sm-6  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Doctors Date List</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div id="loadDoctorDateList">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php include(ROOT.'/template/footer.php') ?>  
<script src="js/dateman.js"></script>