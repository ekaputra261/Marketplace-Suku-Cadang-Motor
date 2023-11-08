<?php
require_once 'database.php';
$db = new Database();
$hasil = $db->produkAl4();
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $data = mysqli_fetch_array($hasil);
    if ($nama == $data['nama']) {
        if ($password == $data['password']) {
            header('location:index.php');
        } else {
            header('location:login.php?pesan=password salah!');
        }
    } else {
        header('location:login.php?pesan=username salah!');
    }
}
