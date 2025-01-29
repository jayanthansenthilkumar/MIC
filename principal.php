<?php
require 'config.php';

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>MIC</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="css/dboardstyles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

    <style>
        .table-container {
            -ms-overflow-style: none;
        }

        .table-container {
            overflow: auto;
            width: 100%;
            height: 100%;

        }

        .fixed-size-table {
            width: 100%;
            table-layout: fixed;
        }

        .fixed-size-table th,
        .fixed-size-table td {
            width: 120px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .nav-tabs .nav-link {
            color: #0033cc;
        }

        .nav-tabs .nav-link.active {
            background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);
            color: white;
        }

        .modal-content {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            border-radius: 15px 15px 0px 0px;
        }

        .modal-header .close {
            font-size: 1.5rem;
            color: white;
            opacity: 1;
            transition: transform 0.3s ease;
        }

        .modal-header .close:hover {
            transform: rotate(90deg);
            color: #ff8080;
        }
    </style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="smain">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/srms33333.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="Logout"><i
                                        class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item active"> <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="principal"
                                aria-expanded="false"><img src="images/icon/dash.png" class="custom-svg-icon"
                                    alt="Dashboard Icon"><span class="hide-menu">&nbsp;Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="complaint"
                                aria-expanded="false"><img src="images/icon/feedback1.png" class="custom-svg-icon"
                                    alt="Dashboard Icon"><span class="hide-menu">&nbsp;Complaints</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Welcome Principal,</h4>
                        <div class="ml-auto text-right">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="bi bi-person-fill"></i></h1>
                                <h6 class="text-white">NAME</h6>
                                <h6 class="text-white">MURUGAN B.S</h6>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6  col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">ROLE</h6>
                                <h6 class="text-white">PRINCIPAL</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4  col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="bi bi-calendar-event"></i></h1>
                                <h6 class="text-white">DOB</h6>
                                <h6 class="text-white">07-10-1983</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <form class="zmdi-format-valign-top">
                                <div class="card-body">
                                    <div class="card">
                                        <!-------------------------dashboard------------------------------>
                                        <div class="tab-content tabcontent-border">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- <div class="card-header"> -->
                                                    <h4 class="card-title m-b-0"><b></b></h4><br>
                                                    <br>
                                                    <div class="row">
                                                        <!-- Pending -->
                                                        <div class="col-12 col-md-3" style="margin-bottom: 40px">
                                                            <div class="cir">
                                                                <div class="bo">
                                                                    <div class="content1">
                                                                        <div class="stats-box text-center p-3" style="background-color:orange;">
                                                                            <i class="fas fa-clock"></i>
                                                                            <h1 class="font-light text-white">
                                                                            <span id="pendingCount"></span>
                                                                            </h1>
                                                                            <small class="font-light">Pending</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Request -->
                                                        <div class="col-12 col-md-3">
                                                            <div class="cir">
                                                                <div class="bo">
                                                                    <div class="content1">
                                                                        <div class="stats-box text-center p-3" style="background-color:rgb(14, 86, 239);">
                                                                            <i class="fas fa-question"></i>
                                                                            <h1 class="font-light text-white">
                                                                            <span id="requestCount"></span>
                                                                            </h1>
                                                                            <small class="font-light">Request</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- In Progress -->
                                                        <div class="col-12 col-md-3">
                                                            <div class="cir">
                                                                <div class="bo">
                                                                    <div class="content1">
                                                                        <div class="stats-box text-center p-3" style="background-color:red;">
                                                                        <i class="fas fa-exclamation"></i>
                                                                            <h1 class="font-light text-white">
                                                                            <span id="inprogresscount"></span>
                                                                            </h1>
                                                                            <small class="font-light">In Progress</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- Completed -->
                                                        <div class="col-12 col-md-3">
                                                            <div class="cir">
                                                                <div class="bo">
                                                                    <div class="content1">
                                                                    <div class="stats-box text-center p-3" style="background-color:rgb(70, 160, 70);">
                                                                            <i class="mdi mdi-check"></i>
                                                                            <h1 class="font-light text-white">
                                                                            <span id="completedCount"></span>
                                                                            </h1>
                                                                            <small class="font-light">Completed</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center">
            <b>
                2024 © M.Kumarasamy College of Engineering All Rights Reserved.<br>
                Developed and Maintained by Technology Innovation Hub.
            </b>
        </footer>
    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    // Fetch the complaint counts when the page loads
    $(document).ready(function() {
      fetchComplaintCounts();
    });

    function fetchComplaintCounts() {
      $.ajax({
        url: 'diamondbackend.php', // URL to the PHP file
        method: 'POST',
        data: {}, // Additional data can be sent if needed
        dataType: 'json',
        success: function(response) {
          if (response.complainCount !== undefined && response.completedCount !== undefined) {
            $('#complainCount').text(response.complainCount);
            $('#completedCount').text(response.completedCount);
            $('#inprogresscount').text(response.inprogressCount);
            $('#pendingCount').text(response.pendingCount);
            $('#requestCount').text(response.requestCount);
            $('#reassignCount').text(response.reassignCount);


          } else {
            $('#complainCount').text("Error fetching data");
            $('#completedCount').text("Error fetching data");
            $('#inprogresscount').text("Error fetching data");
            $('#pendingCount').text("Error fetching data");
            $('#requestCount').text("Error fetching data");
            $('#reassignCount').text("Error fetching data");


          }
        },
        error: function() {
          $('#complainCount').text("Error with AJAX request");
          $('#completedCount').text("Error with AJAX request");
          $('#inprogresscount').text("Error with AJAX request");
          $('#pendingcount').text("Error with AJAX request");
          $('#requestCount').text("Error with AJAX request");
          $('#reassigncount').text("Error with AJAX request");

        }
      });
    }

  </script>
  
</body>

</html>