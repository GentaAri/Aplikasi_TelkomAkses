<?php 
    include "include/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi Web</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
            <a class="navbar-brand" href="?pages=beranda">Telkom Akses</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="?pages=profile">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- sidebar -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <?php include "include/menu.php" ?> 
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <!-- user login -->


                    </div>
                </nav>
            </div>
            <!-- siderbar end -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php include "include/isi.php" ?> 
                    </div> 
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

<script type="text/javascript">   
        <?php   
        echo $a;   
        echo $b;
        echo $c; ?>  
        function changeValue1(id){  
          document.getElementById('position_title').value = position_title[id].position_title;  
          document.getElementById('level').value = level[id].level;
          document.getElementById('sub_unit').value = sub_unit[id].sub_unit;   
        };  
</script>
<script type="text/javascript">   
        <?php   
        echo $a1;?>  
        function changeValue2(id){  
          document.getElementById('sto').value = sto[id].sto;   
        };  
</script>
<script type="text/javascript">   
        <?php   
        echo $tr;
        echo $re;
        echo $biz;
        echo $dir;
        echo $un?>  
        function changeValue3(id){  
          document.getElementById('teritory').value = teritory[id].teritory;
          document.getElementById('regional').value = regional[id].regional;
          document.getElementById('bizpart_id').value = bizpart_id[id].bizpart_id; 
          document.getElementById('direktorat').value = direktorat[id].direktorat; 
          document.getElementById('unit').value = unit[id].unit;    
        };  
</script>
<script type="text/javascript">   
        <?php   
        echo $po;   
        echo $le;
        echo $su;
        echo $sg;
        echo $gf;
        echo $cs; ?>  
        function changeValue4(id){  
          document.getElementById('position_title').value = position_title[id].position_title;  
          document.getElementById('level').value = level[id].level;
          document.getElementById('sub_unit').value = sub_unit[id].sub_unit;
          document.getElementById('sub_group').value = sub_group[id].sub_group; 
          document.getElementById('group_fungsi').value = group_fungsi[id].group_fungsi; 
          document.getElementById('cost_center').value = cost_center[id].cost_center;    
        };  
</script>


        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

    </body>
</html>
