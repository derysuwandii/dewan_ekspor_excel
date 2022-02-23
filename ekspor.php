<?php
//Menggabungkan dengan file koneksi yang telah kita buat :D
include 'koneksi.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil-ekspor-dewan.xls");
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div align="center">
		<h2>Cara Ekspor Data/Laporan ke Excel Dengan Mudah Menggunakan HTML Tanpa Plugin dari Database MySQL</h2>

		<table border="1">
	    	<thead>
	    		<tr>
	    			<td>No</td>
	    			<td>Nama Mahasiswa</td>
	    			<td>Alamat</td>
	    			<td>Jenis Kelamin</td>
	    			<td>Tanggal Masuk</td>
	    		</tr>
	    	</thead>
	    	<tbody>
				<?php
			        $no = 1;
			        $query = "SELECT * FROM tbl_mahasiswa ORDER BY nama_mahasiswa ASC";
			        $dewan1 = $db1->prepare($query);
			        $dewan1->execute();
			        $res1 = $dewan1->get_result();

			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				            $nama_mahasiswa = $row['nama_mahasiswa'];
				            $alamat = $row['alamat'];
				            $jenis_kelamin = $row['jenis_kelamin'];
				            $tgl_masuk = $row['tgl_masuk'];

							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$nama_mahasiswa."</td>";
								echo "<td>".$alamat."</td>";
								echo "<td>".$jenis_kelamin."</td>";
								echo "<td>".$tgl_masuk."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='5'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
	    	</tbody>
	    </table>

	    <p>www.dewankomputer.com</p>
    </div>

</body>
</html>