<div id="sidebar-menu">
  <ul>

    <li class="menu-title">Rental Ps</li>
    
    <li>
      <a href="index.php" class="waves-effect">
        <i class="mdi mdi-airplay"></i><span> Dashboard</span>
      </a>
    </li>

    <li>
      <?php 
      // menghitung data pelanggan
      $dataPelanggan = mysqli_query($conn, "SELECT * FROM tb_pelanggan");
      $jmlDataPelanggan = mysqli_num_rows($dataPelanggan);
      ?>
      <a href="?page=pelanggan" class="waves-effect">
        <i class="fa fa-users"></i>
        <span>Data Pelanggan<span class="badge badge-pill badge-primary float-right"><?= $jmlDataPelanggan; ?></span></span>
      </a>
    </li>
  
  <!-- jika level admin -->
  <?php if($_SESSION['level'] == 'admin') : ?>
    <li>
      <?php 
      // menghitung data user
      $dataUser = mysqli_query($conn, "SELECT * FROM tb_users");
      $jmlDataUser = mysqli_num_rows($dataUser);
      ?>
      <a href="?page=users" class="waves-effect">
        <i class="fa fa-users"></i>
        <span>Data Admin<span class="badge badge-pill badge-primary float-right"><?= $jmlDataUser; ?></span></span>
      </a>
    </li>

    <li>
    <?php 
      // menghitung data jenis
      $jenis = mysqli_query($conn, "SELECT * FROM tb_jenis");
      $jmljenis = mysqli_num_rows($jenis);
      ?>
      <a href="?page=jenis" class="waves-effect">
      <i class="fa fa-key"></i>
        <span>Jenis Layanan<span class="badge badge-pill badge-primary float-right">
          <!-- <?= $jmljenis; ?> -->
        </span></span>
      </a>
    </li>
  <?php endif; ?>
  
    <li>
      <?php 
      // menghitung data rental
      $rental = mysqli_query($conn, "SELECT * FROM tb_rental");
      $jmlperental = mysqli_num_rows($rental);
      ?>
      <a href="?page=rental" class="waves-effect">
        <i class="fa fa-shopping-cart"></i>
        <span>Transaksi rental<span class="badge badge-pill badge-primary float-right"><?= $jmlrental; ?></span></span>
      </a>
    </li>

    <li>
      <?php 
      // menghitung data pegeluaran
      $pengeluaran = mysqli_query($conn, "SELECT * FROM tb_pengeluaran");
      $jmlpengeluaran = mysqli_num_rows($pengeluaran);
      ?>
      <a href="?page=pengeluaran" class="waves-effect">
      <i class="fa fa-money"></i>
        <span>Data Pengeluaran<span class="badge badge-pill badge-primary float-right">
          <!-- <?= $jmlpengeluaran; ?> -->
        </span></span>
      </a>
    </li>

    <li>
      <a href="?page=laporan" class="waves-effect">
        <i class="fa fa-reorder"></i>
        <span>Data Laporan</span>
      </a>
    </li>

    <li>
      <a href="logout.php" class="waves-effect" onclick="return confirm('Apakah anda ingin logout ?');">
        <i class="mdi mdi-logout m-r-5 text-muted"></i>
        <span>Logout</span>
      </a>
    </li>

  </ul>
</div>
