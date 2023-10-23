<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>

<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah_data.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Stock</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Action</th>
		</tr>
	    <?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $row['id_barang'];?></td>
				<td><?= $row['nama_barang']; ?></td>
				<td><?= $row['stock']; ?></td>
				<td><?= $row['harga_beli']; ?></td>
				<td><?= $row['harga_jual']; ?></td>
				<td>
					<a href="edit.php?id=<?= ['id_barang']; ?>">Update</a>
					<a href="hapus.php?id=<?= ['id_barang']; ?>">Delete</a>
				</td>
			</tr>
		<?php 
	} ?>
	
	</table>
</body>
</html>