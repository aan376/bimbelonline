<?php
//membuat koneksi ke database
include "koneksi.php";
?>
 
<center> 
MENAMPILKAN DATA SISWA 
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='600'>  
<tr>
	<th> Nama </th>
	<th> Jenis Kelamin </th>
	<th> Kelas </th>
	<th> Alamat </th>
	<th> Tanggal Pendaftaran </th>
	<th> Tempat, Tanggal Lahir </th>
	<th> Agama </th>
	
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From siswa" ;  //menampikan SEMUA data dari tabel siswa

$hasil=mysql_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "	 
		<tr>
		<td>".$data['nama']."</td>
		<td>".$data['Jenis_Kelamin']."</td>
		<td>".$data['Kelas']."</td>
		<td>".$data['alamat']."</td>
		<td>".$data['tanggal_pendaftaran']."</td>
		<td>".$data['tempat_tanggal_lahir']."</td>
		<td>".$data['agama']."</td>
		
		</tr> 
		";
		
}

?>

</table>