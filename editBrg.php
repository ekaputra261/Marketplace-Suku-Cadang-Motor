<?php
require_once 'database.php';
$db = new Database();

$id = $_GET['id'];
$hasil = $db->produk($id);

while ($row = $hasil->fetch_assoc()) {
	$nama = $row['nama'];
	$hrg = $row['hrg'];
	$jml = $row['jml'];
	$ket = $row['keterangan'];
	$foto = $row['foto'];
}
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>kelompok</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-spy" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">Admin Spare Part Motor Store</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
					<ul class="navbar-nav" id="navbar-spy">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#product">Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#katalog">Catalog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#order">Order</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Log out</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<h1 class="heading text-center">Catalog Update</h1>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col">
				<form action="updBrg.php" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="l1" class="form-label">Product ID</label>
						<input type="text" class="form-control" id="id" name="tid" value="<?= $id; ?>" readonly>
					</div>
					<div class="mb-3">
						<label for="l2" class="form-label">Product name</label>
						<input type="text" class="form-control" id="nama" name="tnama" value="<?= $nama; ?>">
					</div>
					<div class="mb-3">
						<label for="l3" class="form-label">Price</label>
						<input type="text" class="form-control" id="hrg" name="thrg" value="<?= $hrg; ?>">
					</div>
					<div class="mb-3">
						<label for="l4" class="form-label">Keterangan</label>
						<input type="text" class="form-control" id="ket" name="tket" value="<?= $ket; ?>">
					</div>
					<div class="mb-3">
						<label for="l4" class="form-label">Stock</label>
						<input type="text" class="form-control" id="jml" name="jml" value="<?= $jml; ?>">
					</div>
					<div class="mb-3">
						<label for="l6" class="form-label">Picture</label>
						<input type="file" class="form-control" id="foto" name="foto">
						<input type='hidden' name='foto_lama' value="<?= $foto; ?>">
						<img src="img/<?php echo $foto; ?>" width="150px" height="120px" />
						<input type="checkbox" name="ubah_foto" value="true">Ceklis to change photo<br>
					</div>
					<div class="mb-3">
						<button class="btn btn-primary" type="submit">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<footer class="text-center text-white" style="background-color: #ff0000;">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: #ff0000;">
			© 2022 Copyright:
			<a class="text-white" href="https://mdbootstrap.com/">Tugas Kelompok PWL</a>
		</div>
		<!-- Copyright -->
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>