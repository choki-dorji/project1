<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Time Table</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>GCIT</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="table.html"><i class="fas fa-table"></i><span>Time Table</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="attendance.php"><i class="fas fa-table"></i><span>Your Attendance</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        
                        
                            
                            
                            
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">  <?php echo $_SESSION['Name']; ?>
</span><img class="border rounded-circle img-profile" src="<?php echo $_SESSION['img']; ?>"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                            <a class="dropdown-item" role="presentation" href="#">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                                                
                                            </i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
        </div>

        <div class="container">
  <h2>Time Table</h2>
  <p>BScCS Third Year:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
        <th>9-10</th>
        <th>10-11</th>
        <th>11-11:15</th>
        <th>11:15-12:15</th>
        <th>12:15-1:15</th>
        <th>1:15-2:15</th>
        <th>2:15-3:15</th>
        <th>3:15-4:15</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Monday</td>
        <td colspan="2" style="text-align: center;">Assembly</td>
        <td rowspan="5" style="text-align: center;"><br>B<br>R<br>E<br>A<br>K</td>
        <td colspan="2" style="text-align: center;">PRW301</td>
        <td rowspan="5" style="text-align: center;"><br>L<br>U<br>N<br>C<br>H</td>
        <td colspan="1" style="text-align: center;">APC307</td>
        <td colspan="1" style="text-align: center;">MAT306</td>

      </tr>

      <tr>
        <td>Tuesday</td>
        <td colspan="1" style="text-align: center;"></td>
        <td colspan="1" style="text-align: center;">MAT306</td>
        <td colspan="1" style="text-align: center;">APC305</td>
        <td colspan="1" style="text-align: center;">MAT306</td>
        <td colspan="1" style="text-align: center;">APC306</td>
        <td colspan="1" style="text-align: center;">APC307</td>
        
      </tr>
      <tr>
        <td>Wednesday</td>
        <td colspan="1" style="text-align: center;"></td>
        <td>APC307</td>
        <td>APC305</td>
        <td colspan="1" style="text-align: center;">APC306</td>
        <td colspan="1" style="text-align: center;"></td>
        <td></td>
      </tr>
      <tr>
        <td>Thursday</td>
        <td colspan="2" style="text-align: center;">APC306</td>
        <td colspan="1" style="text-align: center;">APC306</td>
        <td colspan="1" style="text-align: center;">MAT306</td>
        <td colspan="1" style="text-align: center;">APC305</td>
        <td></td>
      </tr>
      <tr>
        <td>Friday</td>
        <td colspan="2" style="text-align: center;">APC307</td>
        <td colspan="1" style="text-align: center;">APC307</td>
        <td colspan="1" style="text-align: center;">APC306</td>

        <td></td>
        <td></td>
        
      </tr>
    </tbody>
  </table>
</div>

        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright ?? 2021</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>