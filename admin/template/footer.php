            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                        <li class="list-inline-item">
                            
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2022 BCC Marcom</p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN PROFILE SIDEBAR  -->
    <aside class="profile-sidebar text-center">
        <div class="profile-content profile-content-scroll">
            <div class="usr-profile">
                <i class="flaticon-user-7" style="font-size:40px;"></i>
            </div>
            <p class="user-name mt-4 mb-4">Admin</p>
            
            <div class="user-links text-left">
                <ul class="list-unstyled">
                    
                    <li><a href="users/users/logout.php"><i class="flaticon-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </aside>
    <!--  BEGIN PROFILE SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="plugins/mdl/material.min.js"></script>    
    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="plugins/charts/sparklines/jquery.sparkline.min.js"></script>
    <script src="plugins/table/datatable/datatables.js"></script>
    <script>
        $(document).ready(function() {
            $('#alter_pagination').DataTable( {
                "pagingType": "full_numbers",
                "language": {
                    "paginate": {
                      "first": "<i class='flaticon-left-arrow'></i>",
                      "previous": "<i class='flaticon-arrow-left-1'></i>",
                      "next": "<i class='flaticon-arrow-right'></i>",
                      "last": "<i class='flaticon-right-arrow'></i>",
                    },
                    "info": "Showing page _PAGE_ of _PAGES_"
                },
                drawCallback: function () {
                    $(".sparkline").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
                        type: 'line',
                        width: '60',
                        height: '20',
                        lineColor: '#1a73e9',
                        fillColor: '#c2d5ff',
                        spotColor: 'transparent',
                        minSpotColor: 'transparent',
                        maxSpotColor: 'transparent',
                        highlightSpotColor: 'transparent',
                        highlightLineColor: 'transparent',
                    });
                }
            });
        } );
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>