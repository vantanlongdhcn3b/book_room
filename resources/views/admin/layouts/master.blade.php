<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>SoSo Hotel </title>
    <!-- Bootstrap -->
    <link href="admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin_asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin_asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="admin_asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="admin_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="admin_asset/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
 <!-- Datatables -->
 <link href="admin_asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="admin_asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="admin_asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="admin_asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="admin_asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="admin_asset/build/css/custom.min.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="admin_asset/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">

        <div class="main_container">
            <div class="col-md-3 left_col">
               @include('admin.layouts.hearder')
            </div>
           
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu" style="margin: 0px;">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Long
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Thông tin</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Cài Đặt</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Giúp Đỡ</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                        Đăng Xuất</a>
                                </div>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <!-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <!-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <!-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <!-- <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- /top navigation -->

           
<div class="container">
@yield('content')
</div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
           By Hiền-Long <a href="/">3b</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="admin_asset/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="admin_asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="admin_asset/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="admin_asset/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="admin_asset/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="admin_asset/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="admin_asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="admin_asset/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="admin_asset/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="admin_asset/vendors/Flot/jquery.flot.js"></script>
    <script src="admin_asset/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="admin_asset/vendors/Flot/jquery.flot.time.js"></script>
    <script src="admin_asset/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="admin_asset/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="admin_asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="admin_asset/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="admin_asset/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="admin_asset/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="admin_asset/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="admin_asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="admin_asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="admin_asset/vendors/moment/min/moment.min.js"></script>
    <script src="admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="admin_asset/build/js/custom.min.js"></script>
        <!-- Datatables -->
        <script src="admin_asset/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="admin_asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="admin_asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="admin_asset/vendors/jszip/dist/jszip.min.js"></script>
    <script src="admin_asset/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="admin_asset/vendors/pdfmake/build/vfs_fonts.js"></script>
	  <!-- Dropzone.js -->
    <script src="admin_asset/vendors/dropzone/dist/min/dropzone.min.js"></script>
  </body>
</html>
