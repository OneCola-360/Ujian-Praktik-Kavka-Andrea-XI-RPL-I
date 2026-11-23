<?php 
require("../../konek.php");
$queryid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM tb_tiket"), MYSQLI_ASSOC);
foreach ($queryid as $i);
$id = intval($i) + 1;
$kategori = $_POST['kategori'] ?? 'Umum';
$harga = $_POST['harga'];
mysqli_query($konek, "INSERT INTO tb_tiket (id, kategori, harga) VALUES ($id, '$kategori', $harga)");
echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='../../main_menu.php'</script>";
?>