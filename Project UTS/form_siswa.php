<?php
include_once 'atas.php';?>
<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                 Tugas Praktikum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 1</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="array_buah.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Buah</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_fungsi.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Fungsi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_pop.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Pop</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_push.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Push</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_shift.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Shift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_siswa.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Siswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="array_unshift.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Array Unshift</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_konstan.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel Konstan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="variabel_system.php" class="nav-link active">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel System</p>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="variabel_user.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Variabel User</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 2</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">

                    <a href="form_belanja.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Belanja</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="form_nilai.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Nilai</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="form_siswa.php" class="nav-link active">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Form Siswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 3</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="atas.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Atas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="tampilan.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>tampilan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="bawah.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>bawah</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 4</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="data_lingkaran.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Lingkaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_mahasiswa.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="data_nilaimahasiswa.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Data Nilai Mahasiswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Praktikum 5</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="account_bank.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Account Bank</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="dispenser.php" class="nav-link">
                      <i class="nav-icon fas fa-code"></i>
                      <p>Dispenser</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Form Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum 2</li>
              <li class="breadcrumb-item active">Form Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card">
        <div class="card-body row">
          <div class="d-flex row">
          <div class="card-body">
              <?php
                if (isset($_POST['proses'])) {
                  $nama_siswa = $_POST['nama'];
                  $proses = $_POST['proses'];
                  $mata_kuliah =$_POST['matkul'];
                  $uts = $_POST['nilai_uts'];
                  $uas = $_POST['nilai_uas'];
                  $tugas = $_POST['nilai_tugas'];
                  $total = $uts + $uas + $tugas;
                  $alphabet = $total/3;
                  if ($alphabet <= 55){
                      $lulus = "Anda Tidak Lulus";
                  }else{
                      $lulus = "Selamat Anda Lulus";
                  }
                  if ($alphabet >= 85){
                      $grade = "A";
                  }elseif($alphabet >= 70){
                      $grade = "B";
                  }elseif($alphabet >= 56){
                      $grade = "C";
                  }elseif($alphabet >= 36){
                      $grade = "D";
                  }elseif ($alphabet >= 10){
                      $grade = "E";
                  }else{
                      $grade = "I(tidak ada nilai)";
                  }
                  
                  echo "Nama : $nama_siswa";
                  echo "<br/>Mata Kuliah : $mata_kuliah";
                  echo "<br/>Nilai UTS : $uts";
                  echo "<br/>Nilai UAS : $uas";
                  echo "<br/>Nilai Tugas : $tugas";
                  echo "<br/>Keterangan : $lulus";
                  echo "<br/>Grade : $grade";
                  echo "<br/> Data Telah di $proses";
                };
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
        </div>
    </aside>



<?php
require_once 'bawah.php';
?>