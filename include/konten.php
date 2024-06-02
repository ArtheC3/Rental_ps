<?php 

// menangkap page dan aksi dari url
$page = $_GET['page'];
$aksi = $_GET['aksi'];

// page/halaman home / dashboard
if ($page == "") {
  include "home.php";
}

// page pelanggan
if ($page == "pelanggan") {
  // halaman pelanggan
  if ($aksi == "") {
    include "page/pelanggan/pelanggan.php";
  }
  // tambah data pelanggan
  if ($aksi == "tambah") {
    include "page/pelanggan/tambah.php";
  }
  // hapus data pelanggan
  if ($aksi == "hapus") {
    include "page/pelanggan/hapus.php";
  }
  // ubah data pelanggan
  if ($aksi == "ubah") {
    include "page/pelanggan/ubah.php";
  }
  // upload foto pelanggan
  if ($aksi == "foto") {
    include "page/pelanggan/uploadfoto.php";
  }
}


// jika levelnya admin maka dapat megakses halaman ini
// halaman ini hanya bisa diakses admin
if ($_SESSION['level'] == 'admin') {
  // page users
  if ($page == "users") {
    // halaman users
    if ($aksi == "") {
      include "page/users/users.php";
    }
    // tambah users
    if ($aksi == ".tambah") {
      include "page/users/tambah.php";
    }
    // hapus users
    if ($aksi == "hapus") {
      include "page/users/hapus.php";
    }
    // ubah users
    if ($aksi == "ubah") {
      include "page/users/ubah.php";
    }
    // upload foto users
    if ($aksi == "foto") {
      include "page/users/uploadfoto.php";
    }
  }
} // sampai sini


// page transaksi rental
if ($page == "rental") {
  // menampilkan halaman rental
  if ($aksi == "") {
    include "page/rental/rental.php";
  }
  // menampilkan data yg sudah lunas
  if ($aksi == "rentallunas") {
    include "page/rental/rentallunas.php";
  }
  // menampilkan data yang belum lunas
  if ($aksi == "rentalbelumlunas") {
    include "page/rental/rentalbelumlunas.php";
  }
  // tambah transaksi
  // if ($aksi == "tambah") {
  //   include "page/rental/tambah.php";
  // }
  // hapus transaksi
  if ($aksi == "hapus") {
    include "page/rental/hapus.php";
  }
  // melunasi transaksi
  if ($aksi == "lunasi") {
    include "page/rental/lunasi.php";
  }
  // menampilkan detail dari transaksi
  if ($aksi == "detail") {
    include "page/detail_transaksi.php";
  }
  // baju diambil
  if ($aksi == "diambil") {
    include "page/rental/diambil.php";
  }
}


// page laporan
if ($page == "laporan") {
  if ($aksi == "") {
    include "page/laporan/laporan.php";
  }
  // if ($aksi == "detail") {
  //   include "page/detail_transaksi.php";
  // }
}



?>