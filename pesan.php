<!doctype html>

<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<title>Pesan</title>
</head>

<body style="background-color: #ff0000;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
				<h1 class="text-white">Order Now</h1>
				<form action="insPesan.php" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="l1" class="form-label text-white">Product Name</label>
						<input type="text" class="form-control" id="namabrg" name="tnb" placeholder="Product" required>
					</div>
					<div class="mb-3">
						<label for="l2" class="form-label text-white">Total Order</label>
						<input type="text" class="form-control" id="jml" name="tjml" placeholder="Total">
					</div>
					<div class="mb-3">
						<label for="l3" class="form-label text-white">Username</label>
						<input type="text" class="form-control" id="nama" name="tnl" placeholder="Name" required>
					</div>
					<div class="mb-3">
						<label for="l3" class="form-label text-white ">Address</label>
						<input type="text" class="form-control" id="alamat" name="tal" placeholder="Address" required>
					</div>
					<div class="mb-3">
						<label for="l6" class="form-label text-white">Proof of Payment</label>
						<input type="file" class="form-control" id="ket" name="foto">
					</div>

					<div class="mb-3">
						<button class="btn btn-primary" type="submit">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>