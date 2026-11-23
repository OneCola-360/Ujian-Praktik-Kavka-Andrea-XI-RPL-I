<?php
require("../../konek.php");
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'] ?? 'customer';
$queryid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM tb_user"), MYSQLI_ASSOC);
foreach ($queryid as $i);
$id = intval($i) + 1;
mysqli_query($konek, "INSERT INTO tb_user (id, username, pass, role, nama) VALUES ($id, '$username', '$password', '$role', '$nama')");
echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='../../main_menu.php'</script>";
?>