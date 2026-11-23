<?php
require("../../konek.php");
$tiket = $_POST['tiket'];
$user = $_POST['user'];
$jumlah = $_POST['jumlah'];
$queryid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM tb_transaksi"), MYSQLI_ASSOC);
foreach ($queryid as $i);
$id = intval($i) + 1;
$queryharga = mysqli_fetch_all(mysqli_query($konek, "SELECT harga FROM tb_tiket WHERE tb_tiket.id = $tiket"), MYSQLI_ASSOC);
foreach ($queryharga as $h);
$total = intval($h) * $jumlah;
mysqli_query($konek, "INSERT INTO tb_transaksi (id, id_user, id_tiket, jml_tiket, total_harga) VALUES ($id, $user, $tiket, $jumlah, $total");
echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='../../main_menu.php'</script>";
?>