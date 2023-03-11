<?php include('users/includes/init.php');?>
<?php include(ROOT.'/template/header.php') ?>

                <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div>

                <div class="row layout-spacing ">

                    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-sales-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-line-chart"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h2>Today Appointment</h2>
                                        <h3><?php echo Details::getTableDetailsCount($db,'register','appdate',date('Y-m-d')) ?></h3>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    
                </div>

<?php include(ROOT.'/template/footer.php') ?>             

