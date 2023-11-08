<!doctype html>

<?php
require_once 'database.php';
session_start();
if (!isset($_SESSION['nama'])) {
  header('location:index.php');
}
?>

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
              <a class="nav-link" href="indexadmin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addBrg.php">Update Katalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pesanan.php">Pesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak.php">Contact</a>
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
        <h1 class="heading text-center">Contact</h1>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <?php
        require_once 'database.php';
        $db = new Database();
        $hasil = $db->produkAl3();

        if ($hasil->num_rows > 0) {
          echo "<table class='table table-striped'>
		   <thead>
			<tr>					
			<th scope='col'>Name</th>
			<th scope='col'>Email</th>
			<th scope='col'>Message</th>
			</tr>
		    </thead>
		    <tbody>";
          while ($row = $hasil->fetch_assoc()) {
            $teks = "<tr>";
            $teks .= "<td>" . $row["name"] . "</td>";
            $teks .= "<td>" . $row["email"] . "</td>";
            $teks .= "<td>" . $row["message"] . "</td>";
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