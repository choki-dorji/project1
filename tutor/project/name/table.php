<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'zkteco');

?> 


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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="table.php"><i class="fas fa-table"></i><span>Time Table</span></a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="attendance.php"><i class="fas fa-table"></i><span>student Attendance</span></a></li>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION['Name']; ?></span><img class="border rounded-circle img-profile" src="assets/img/user.png"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
        </div>

       <div class="container">
        <table class="table table-bordered">
              <tr>
                <td colspan="9">GYALPOZHING COLLEGE OF INFORMATION TECHNOLOGY </td>
              </tr>
              <tr> <td colspan="9"> Timetable for Bachelor of Sciencec in Computer Science(Yr II - Spring 2021)</td></tr>
              <tr>
                <td colspan="2"></td>
                <th>9:00-10:00 AM</th>
                <th>10:00-11:00 AM</th>
                <th>11:15-12:15 PM </th>
                <th>12:15-1:15 PM</th>
                <th>2:15-3:15 PM</th>
                <th>3:15-4:15 PM</th>
              </tr>

              <tr>
                <td rowspan="4" style="font-weight: bold;">MONDAY </td>
               </tr>
              <tr>
                <th>MODULE</th>
                <td colspan="2">Assembly</td>
                <td colspan="2">PRW301</td>
                <td colspan="1">APC307</td>
                <td colspan="1">MAT306</td>
                <td></td>

              </tr>
              <tr>
                <th>TUTOR</th>
                <td colspan="2"></td>
                <td colspan="2">Mr. Muualem Teku</td>
                <td colspan="1">Karma Dorji </td>
                <td colspan="1">Kezang Yuden </td>
              </tr>
             <tr>
                <th>ROOM</th>
                <td colspan="2">MPH</td>
                <td colspan="2">LAB3</td>
              </tr>
              <td colspan="9"></td>
                
              <tr>
                <td rowspan="4" style="font-weight: bold;">TUESDAY</td>
               </tr>
              <tr>
                <th>MODULE</th>
                <td colspan="1"></td>
                <td colspan="1">APC307</td>
                <td colspan="1">APC305</td>
                <td colspan="1">APC306</td>
                <td></td>
              </tr>
              <tr>
                <th>TUTOR</th>
                <td colspan="1">Karma Dorji </td>
                <td colspan="1">Kezang Yuden </td>
                <td></td>
              </tr>
             <tr>
                <th>ROOM</th>
                <td colspan="1">Classroom 2</td>
                <td colspan="1">Classroom 2</td>
                <td></td>
                <td></td>
              </tr>
            <td colspan="9"></td>
              <tr>
                <td rowspan="4" style="font-weight: bold;">WEDNESDAY</td>
               </tr>
              <tr>
                <th>MODULE</th>
                <td colspan="1"></td>
                <td colspan="1">APC307</td>
                <td colspan="1">APC305</td>
                <td colspan="1">APC204APC306</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <th>TUTOR</th>
                <td colspan="1"></td>
                <td colspan="1">Karma Dorji</td>
                <td colspan="1">Tashi Phuntsho</td>
                <td colspan="1">Kinley Tshering</td>
                <td></td>
                <td></td>
              </tr>
             <tr>
                <th>ROOM</th>
                <td colspan="1"></td>
                <td colspan="1">Classroom 2</td>
                <td colspan="1">Classroom 2</td>
                <td colspan="1">Classroom 1</td>
                <td></td>
                <td></td>
              </tr>
              <td colspan="9"></td>
              <tr>
                <td rowspan="4" style="font-weight: bold;">THURSDAY</td>
               </tr>
              <tr>
                <th>MODULE</th>
                <td colspan="3">APC306</td>
                <td colspan="1">MATH306</td>
                <td colspan="1">APC305</td>
                <td colspan="1"></td>
              </tr>
              <tr>
                <th>TUTOR</th>
                <td colspan="3">Kinley Tshering</td>
                <td colspan="1">Kezang Yuden</td>
                <td colspan="1">Tashi Phuntsho</td>
                <td colspan="1"></td>>
              </tr>
             <tr>
                <th>ROOM</th>
                <td colspan="3">LAB3</td>
                <td colspan="1">Classroom 1</td>
                <td colspan="1">Classroom 2</td>
                <td colspan="1"></td>
                  </tr>
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