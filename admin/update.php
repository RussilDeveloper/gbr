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
                                        <h4>Update Doctor</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form class="mb-4" action="save.php" method="post">
                                  
                                  <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input " type="text" name="doctorname" value="<?php echo Details::getTableDetails($db,'doctor','id',$_GET['id'],'name') ?>">
                                    <label class="mdl-textfield__label" for="sample1">Doctor Name</label>
                                  </div>
                                   <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input " type="text" name="doctorspec" value="<?php echo Details::getTableDetails($db,'doctor','id',$_GET['id'],'spec') ?>">
                                    <label class="mdl-textfield__label" for="sample2">Doctor Specialist</label>
                                    
                                    <input class="" type="hidden" name="doctorID" value="<?php echo $_GET['id'] ?>">
                                  </div>
                                  <button class="btn-creative btn-6 btn-6a btn-rounded" name="doctorupdate">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>

<?php include(ROOT.'/template/footer.php') ?>  