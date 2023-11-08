<?php
require_once 'database.php';
$name = $_POST['tname'];
$email = $_POST['temail'];
$message = $_POST['tms'];

if (isset($_POST['submit'])) {
	$db = new Database();
	$hasil = $db->insKontak($name, $email, $message);
	if ($hasil)
		echo "
	<script>
	alert('pesan terkirim');
	window.location.href='index.php';
	</script>
	";
	else
		echo "Penambahan data gagal..";
} else
	echo "Sorry, there was an error uploading your file.";
