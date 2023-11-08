<?php
require_once 'database.php';
include "uploadFoto.php";
$namabrg = $_POST['tnb'];
$jml = $_POST['tjml'];
$namalkp = $_POST['tnl'];
$alamat = $_POST['tal'];

if (upload_foto($_FILES["foto"])) {
  $foto = $_FILES["foto"]["name"];
  $db = new Database();
  $hasil = $db->insPesanan($namabrg, $tjml, $namalkp, $alamat, $foto);
  if ($hasil)
    header("location:index.php");
  else
    echo "Penambahan data gagal..";
} else
  echo "Sorry, there was an error uploading your file.";
