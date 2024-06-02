<?php
  include "../include/koneksi.php";

  // mengambil data id dari url
  $id_rental = $_GET['id'];

  // menampilkan data transaksi
  $query = "SELECT * FROM `tb_rental` INNER JOIN `tb_pelanggan` ON `tb_rental`.`pelangganid` = `tb_pelanggan`.`pelangganid` INNER JOIN `tb_users` ON `tb_users`.`userid` = `tb_rental`.`userid` INNER JOIN `tb_jenis` ON `tb_jenis`.`kd_jenis` = `tb_rental`.`kd_jenis` WHERE `tb_renta`.`id_rental` = '$id_rental'";
  $result = mysqli_query($conn, $query); 
  $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice <?= $row['id_rental']; ?></title>
  <link href="../assets/plugins/morris/morris.css" rel="stylesheet">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<!-- ketika halaman onload, maka auto print -->
<body onload="window.print()">
<h2>rental ps</h2>
<table width='100%'>
  <tr>
    <td>
        Depok RT 01/06, Bandardawung, sleman, yogyakarta <br>
        No. Hp / WA : 088881111 <br>
        Email : Rental@gmail.com <br>
        Jam Operasional : Senin – Minggu : 08.00 – 19.00 wib
    </td>
    <td align="right">
      <p style="text-align: right;"> <b>Tanggal : </b> <?= date('Y-m-d H:i:s');; ?></p>
    </td>
  </tr>
</table>
<hr style="border:0; border-top: 5px double #8c8c8c;">

<table>
            <tr>
              <th align="left">No. Order</th>
              <td>:</td>
              <td><?= $row['id_rental']; ?></td>
            </tr>
            <tr>
              <th align="left">Nama Pelanggan</th>
              <td>:</td>
              <td><?= $row['pelanggannama']; ?></td>
            </tr>
            <tr>
              <th align="left">Alamat</th>
              <td>:</td>
              <td><?= $row['pelangganalamat']; ?></td>
            </tr>
            <tr>
              <th align="left">Jenis Kelamin</th>
              <td>:</td>
              <td><?= $row['pelangganjk']; ?></td>
            </tr>
            <tr>
              <th align="left">No. Telp</th>
              <td>:</td>
              <td><?= $row['pelanggantelp']; ?></td>
            </tr>
            <tr>
              <th align="left">Tanggal Selesai</th>
              <td>:</td>
              <td><?= $row['tgl_selesai']; ?></td>
            </tr>
            <tr>
              <th align="left">Catatan rental</th>
              <td>:</td>
              <td><?= $row['catatan']; ?></td>
            </tr>
            <tr>
              <th align="left">Status Pembayaran</th>
              <td>:</td>
              <td><?= ($row['status_pembayaran'] == 1) ? '<nav class="badge badge-success">Lunas</nav>' : '<nav class="badge badge-danger">Belum Lunas</nav>'; ?></td>
            </tr>
            <tr>
              <th align="left">Status Pengambilan Baju</th>
              <td>:</td>
              <td><?= ($row['status_pengambilan'] == 1) ? '<nav class="badge badge-success">Sudah Diambil</nav>' : '<nav class="badge badge-danger">Belum Diambil</nav>'; ?></td>
            </tr>
            <tr>
              <th align="left">Kasir</th>
              <td>:</td>
              <td><?= $row['username']; ?></td>
            </tr>
          </table>
<br>
<!-- data transaksi -->
<table width='100%' cellpadding='5' cellspacing='0' border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal Terima</th>
        <th>Jenis Layanan</th>
        <th>Tanggal Selesai</th>
        <th>Berat Cucian</th>
        <th>Harga/Kg</th>
        <th>Total Bayar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= "1"; ?></td>
        <td><?= $row['tgl_terima']; ?></td>
        <td><?= $row['jenis_rental']; ?></td>
        <td><?= $row['tgl_selesai']; ?></td>
        <td><?= $row['jml_kilo']; ?> Kg</td>
        <td>Rp. <?= number_format($row['tarif']); ?></td>
        <td>Rp. <?= number_format($row['totalbayar']); ?></td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <th colspan="6" style="text-align: center;">TOTAL PESANAN</th>
        <th>Rp. <?= number_format($row['totalbayar']); ?></th>
      </tr>
    </tbody>
  </table>

  <h3>Keterangan :</h3>
  <p>
    <ol>
      <li>Pengambilan cucian harus membawa nota</li>
      <li>Cucian luntur bukan tanggung jawab kami</li>
      <li>Hitung dan periksa sebelum pergi</li>
      <li>Cucian yang rusak/mengkerut karena sifat kain tidak dapat kami ganti</li>
      <li>Cucian yang tidak diambil lebih dari 1 bulan bukan tanggung jawab kami</li>
    </ol>
  </p>
</body>

<script src="../assets/plugins/datatables/vfs_fonts.js"></script>

</html>