<?php 

$id = $_GET['id'];

// menghapus data transaksi rental
$result = mysqli_query($conn, "DELETE FROM tb_rental WHERE tb_rental = '$id'");

if ($result) {
  echo "
  <script>
    alert('Data Transaksi berhasil dihapus');
    window.location.href = '?page=rental';
  </script>
";
}

?>