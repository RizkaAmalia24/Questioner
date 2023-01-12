<?php
session_start();
if(@$_SESSION["superadmin"] == false){
    header("../index.php");
}
include('../koneksi.php');
$tambahan = "";
if(isset($_GET["angkatan"])){
    $tahun_from = $_GET["tahun_from"];
    $tahun_to = $_GET["tahun_to"];
    $tambahan = "WHERE tahun_angkatan BETWEEN '$tahun_from' AND '$tahun_to'";
}else if(isset($_GET["tgl_lulus"])){
    $tgl_from = $_GET["tgl_from"];
    $tgl_to = $_GET["tgl_to"];
    $tambahan = "WHERE tanggal_lulus BETWEEN '$tgl_from' AND '$tgl_to'";
}else if(isset($_GET["tgl_submit"])){
    $tgl_from = $_GET["tgl_from"];
    $tgl_to = $_GET["tgl_to"];
    $tambahan = "WHERE dikirim_sejak BETWEEN '$tgl_from' AND '$tgl_to'";
}

$tracer = mysqli_query($conn, "SELECT * FROM tb_tracer $tambahan");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WEB TRACER STMIK - SuperAdministrator</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>SUPERADMIN</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome,</span><h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="dashboard.php"><i class="fa fa-list"></i> Data Tracer</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Tracer</h3>
              </div>
            </div>


              <div class="clearfix"></div>

              <div class="col-md col-sm">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>TABLE</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="container">
                        <div class="form-group row">
                            <div class="col-1">
                                <h2>Filter</h2>
                            </div>
                            <div class="col-md-2 col-sm-2 ">
                                <select id="filter" class="form-control">
                                    <option>Pilih Filter</option>
                                    <option value="angkatan">Angkatan</option>
                                    <option value="tgl_lulus">Tanggal Lulus</option>
                                    <option value="tgl_submit">Tanggal Submit</option>
                                </select>
                            </div>
                            <?php if(!empty($tambahan)): ?>
                                <div class="col-md-2 col-sm-2">
                                    <a href="dashboard.php" class="btn btn-secondary">Hapus Filter</a>
                                </div>
                            <?php endif ?>
                            <div class="col-md-2 col-sm-2" id="filter-body">
                                
                            </div>
                        </div>
                    </div>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th></th>
                          <th>Nama</th>
                          <th>Umur</th>
                          <th>Jenis Kelamin</th>
                          <th>Status Nikah</th>
                          <th>Alamat</th>
                          <th>Pendidikan Lanjutan</th>
                          <th>Tahun Angkatan</th>
                          <th>Tanggal Lulus</th>
                          <th>Kerja Sebelum Lulus</th>
                          <th>Pengalaman Akademik</th>
                          <th>Mulai Cari Kerja</th>
                          <th>Jenis Pekerjaan</th>
                          <th>Dikirim Sejak</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1 ?>
                        <?php while($row = mysqli_fetch_object($tracer)): ?>
                            <tr>
                                <th scope="row" class="align-middle"><?= $no++ ?></th>
                                <td class="align-middle"><img src="../images/<?= $row->foto ?>" width="100px" height="100px"></td>
                                <td class="align-middle"><?= $row->nama ?></td>
                                <td class="align-middle"><?= $row->umur ?></td>
                                <td class="align-middle"><?= $row->jenis_kelamin ?></td>
                                <td class="align-middle"><?= $row->status_nikah ?></td>
                                <td class="align-middle"><?= $row->alamat ?></td>
                                <td class="align-middle"><?= $row->pendidikan ?></td>
                                <td class="align-middle"><?= $row->tahun_angkatan ?></td>
                                <td class="align-middle"><?= $row->tanggal_lulus ?></td>
                                <td class="align-middle"><?= $row->kerja_sebelum_lulus ?></td>
                                <td class="align-middle"><?= $row->pengalaman_akademik ?></td>
                                <td class="align-middle"><?= $row->mulai_cari_kerja ?></td>
                                <td class="align-middle"><?= $row->jenis_pekerjaan_saat_ini ?></td>
                                <td class="align-middle"><?= $row->dikirim_sejak ?></td>
                            </tr>
                        <?php endwhile ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script>
        $("#filter").change(function(){
            var val = $(this).find(":selected").val()
            if(val == "angkatan"){
                $("#filter-body").html(`
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    Dari Tahun
                                </div>
                                <div class="col">
                                    <input type="number" name="tahun_from" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    Sampai Tahun
                                </div>
                                <div class="col">
                                    <input type="number" name="tahun_to" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100 text-center">
                        <div class="col">
                            <input type="submit" class="btn btn-primary" name="angkatan" value="Filter"> </div>
                        </div>
                   </div>
                </form>
                `)
            }else if(val == "tgl_lulus"){
                $("#filter-body").html(`
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    Dari Tanggal
                                </div>
                                <div class="col">
                                    <input type="date" name="tgl_from" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    Sampai Tanggal
                                </div>
                                <div class="col">
                                    <input type="date" name="tgl_to" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100 text-center">
                        <div class="col">
                            <input type="submit" class="btn btn-primary" name="tgl_lulus" value="Filter"> </div>
                        </div>
                   </div>
                </form>
                `)
            }else if(val == "tgl_submit"){
                $("#filter-body").html(`
                <form>
                    <div class="row">
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    Dari Tanggal
                                </div>
                                <div class="col">
                                    <input type="date" name="tgl_from" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row my-2">
                                <div class="col">
                                    Sampai Tanggal
                                </div>
                                <div class="col">
                                    <input type="date" name="tgl_to" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100 text-center">
                        <div class="col">
                            <input type="submit" class="btn btn-primary" name="tgl_submit" value="Filter"> </div>
                        </div>
                   </div>
                </form>
                `)
            }else {
                $("#filter-body").html("")
            }
        })
        
    </script>
  </body>
</html>
