<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Barang</h3>
<hr/>
<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_warung";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_barang");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($id_barang,$nama_barang,$stock,$harga_beli,$harga_jual)
	{
		mysqli_query($this->koneksi,"insert into tb_barang values ('','','$nama_barang','$stock','$harga_beli','$harga_jual')");
	}
}
?>
<form method="post" action="proses_barang.php?action=add">
<table>
    <tr>
		<td>ID Barang</td>
		<td>:</td>
		<td><input type="text" name="id_barang"/></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="nama_barang"/></td>
	</tr>
	<tr>
		<td>Stock</td>
		<td>:</td>
		<td><input type="text" name="stock"/></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td>:</td>
		<td><input type="text" name="harga_beli"/></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td>:</td>
		<td><input type="text" name="harga_jual"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>