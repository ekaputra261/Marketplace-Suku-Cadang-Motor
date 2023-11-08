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
        <a class="navbar-brand" href="#">Spare Part Motor Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
          <ul class="navbar-nav" id="navbar-spy">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
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

  <section class="home section-margin" id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="heading">Prioritize Quality and Durable Products </h1>
          <p class="subheading text-white">For your comfort and safety</p>
          <div class="btn-home mt-5">
            <a href="#product" class="bb py-2 px-3">Buy Now</a>
            <a href="login.php" class="bb me-3 py-2 px-3">Sign In</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product section-margin" id="product">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <h1 class="heading text-center">Product</h1>
          <p class="subheading text-center">product list</p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/p1.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Shockbreaker</h5>
              <a href="pesan.php" class="btn btn-primary">Rp. 350.000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/p2.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Coolant</h5>
              <a href="pesan.php" class="btn btn-primary">Rp. 50.000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/p5.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Spark Plug / Busi</h5>
              <a href="pesan.php" class="btn btn-primary">Rp. 100.000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/p3.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Battery / Aki</h5>
              <a href="pesan.php" class="btn btn-primary">Rp. 500.000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/p4.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Drive Belt</h5>
              <a href="pesan.php" class="btn btn-primary">Rp. 100.000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/p6.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bearing</h5>
              <a href="pesan.php" class="btn btn-primary">Rp. 50.000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/p8.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Disc Clutch</h5>
              <a href="pesan.php" class="btn btn-primary">Rp. 200.000</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/p7.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Drive Chain Kit</h5>
              <a href="pesan.php" class="btn btn-primary">Rp. 300.000</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="katalog section-margin" id="katalog">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <h1 class="heading text-center">Catalog</h1>
          <p class="subheading text-center">available items</p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <?php
          require_once 'database.php';
          $db = new Database();
          $hasil = $db->produkAll();
          echo "<a href='addBrg.php' class='btn btn-primary text-white'>Update Katalog</a> <hr>";
          if ($hasil->num_rows > 0) {
            echo "<table class='table table-striped'>
		   <thead>
			<tr>					
			<th scope='col'>ID</th>
			<th scope='col'>Nama</th>
			<th scope='col'>Harga</th>
			<th scope='col'>Stok</th>
			<th scope='col'>Keterangan</th>
			<th scope='col'>Foto</th>
      <th scope='col'>Edit</th>
			<th scope='col'>Hapus</th>
			</tr>
		    </thead>
		    <tbody>";
            while ($row = $hasil->fetch_assoc()) {
              $teks = "<tr>";
              $teks .= "<td>" . $row["id"] . "</td>";
              $teks .= "<td>" . $row["nama"] . "</td>";
              $teks .= "<td>" . $row["hrg"] . "</td>";
              $teks .= "<td>" . $row["jml"] . "</td>";
              $teks .= "<td>" . $row["keterangan"] . "</td>";
              $teks .= "<td><img src='img/" . $row["foto"] . "' style='width:100px;height:100px;'></img></td>";
              $teks .= "<td><a class='btn btn-primary text-white' href='editBrg.php?id=" . htmlentities($row["id"]) . "'>Edit</a></td>";
              $teks .= "<td><a class='btn btn-primary text-white' href='delBrg.php?id=" . htmlentities($row["id"]) . "'>Delete</a></td>";
              $teks .= "</tr>";
              echo $teks;
            }
            echo "</tbody>
			      </table>";
          } else {
            echo "jml rec: 0 ";
          }
          //$conn->close();
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="order section-margin" id="order">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <h1 class="heading text-center">Your Order</h1>
          <p class="subheading text-center">items</p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <?php
          require_once 'Database.php';
          $db = new Database();
          $hasil = $db->produkAl2();
          if ($hasil->num_rows > 0) {
            echo "<table class='table table-striped'>
            <thead>
              <tr>
                <th scope='col'>Product name</th>
                <th scope='col'>Total order</th>
                <th scope='col'>Username</th>
                <th scope='col'>Address</th>
              </tr>
            </thead>
            <tbody>";
            while ($row = $hasil->fetch_assoc()) {
              $teks = "<tr>";
              $teks .= "<td>" . $row["namabrg"] . "</td>";
              $teks .= "<td>" . $row["jml"] . "</td>";
              $teks .= "<td>" . $row["nama"] . "</td>";
              $teks .= "<td>" . $row["alamat"] . "</td>";
              $teks .= "</tr>";
              echo $teks;
            }
            echo "</tbody>
          </table>";
          } else {
            echo "jml rec: 0 ";
          }
          //$conn->close();
          ?>

        </div>
      </div>
    </div>
  </section>

  <section class="contact section-margin" id="contact">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <h1 class="heading text-center">contact</h1>
          <p class="subheading text-center">your comments are useful for us</p>
        </div>
      </div>
      <div class="row mt-5 mb-5">
        <div class="col-lg-6">
          <img src="img/1.jpg" class="img-fluid rounded-3" alt="">
          <img src="img/2.jpg" class="img-fluid rounded-3" alt="">
        </div>
        <div class="col-lg-6">
          <form action="" method="post" enctype="multipart/form-data">

            <!-- Name input -->
            <div class="mb-3">
              <label class="form-label" for="name">Name</label>
              <input class="form-control" id="name" name="tname" type="text" placeholder="Name" />
            </div>

            <!-- Email address input -->
            <div class="mb-3">
              <label class="form-label" for="email">Email Address</label>
              <input class="form-control" id="email" name="temail" type="email" placeholder="Email Address" />
            </div>

            <!-- Message input -->
            <div class="mb-3">
              <label class="form-label" for="message">Message</label>
              <textarea class="form-control" id="message" name="tms" type="text" placeholder="Message" style="height: 10rem;"></textarea>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
              <button class="btn btn-primary btn-lg" id="submit" name="submit" type="submit">Submit</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>

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