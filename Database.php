<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'dborder');

class Database
{
	public $conn;
	function __construct()
	{
		$this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	}
	public function insProduk($id, $nama, $hrg, $jml, $ket, $foto)
	{
		$sql = "insert into barang (id,nama,hrg,jml,keterangan,foto) values ('$id','$nama',$hrg,$jml,'$ket','$foto')";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function insPesanan($namabrg, $jml, $namalkp, $alamat, $foto)
	{
		$sql = "insert into bayar (namabrg,jml,nama,alamat,foto) values ('$namabrg','$jml','$namalkp','$alamat','$foto')";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function insRegister($kode_user, $nama, $email, $telp, $password, $peran)
	{
		$sql = "insert into user (kode_user,nama,email,telp,password,peran) values ('$kode_user', '$nama', '$email', '$telp', '$password', '$peran')";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function insKontak($name, $email, $message)
	{
		$sql = "insert into kontak (name,email,message) values ('$name','$email','$message')";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function produkAl4()
	{
		$sql = "select * from user";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function produkAl3()
	{
		$sql = "select * from kontak";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function produkAl2()
	{
		$sql = "select * from bayar";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function produkAll()
	{
		$sql = "select * from barang";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function getFoto($id)
	{
		$sql = "select foto from barang where id='$id'";
		$hasil = $this->conn->query($sql);
		while ($row = $hasil->fetch_assoc()) {
			$foto = $row['foto'];
		}
		return $foto;
	}
	public function getFotoo($namabrg)
	{
		$sql = "select foto from bayar where namabrg='$namabrg'";
		$hasil = $this->conn->query($sql);
		while ($row = $hasil->fetch_assoc()) {
			$foto = $row['foto'];
		}
		return $foto;
	}
	public function produk($id)
	{
		$sql = "select * from barang where id='$id'";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
	public function updProduk($id, $nama, $hrg, $jml, $ket, $foto)
	{
		if ($foto == "")
			$sql = "update barang set nama='$nama',hrg='$hrg',jml='$jml',keterangan='$ket' where id='$id'";
		else
			$sql = "update barang set nama='$nama',hrg='$hrg',jml='$jml',keterangan='$ket',foto='$foto' where id='$id'";

		$hasil = $this->conn->query($sql);
		return $hasil;
	}

	public function delProduk($id)
	{
		$sql = "delete from barang where id=$id";
		$hasil = $this->conn->query($sql);
		return $hasil;
	}
}
