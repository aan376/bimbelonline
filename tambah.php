<?php

include "koneksi.php";
?>
<html>
<head>
	<title> Registrasi Peserta Seminar </title>
	<link href ="css_submit.css" rel="stylesheet" type="text/css">
	
	
</head>
<body style = 'margin : 20px; font : 16px arial;'>
	<center>
	<p> Registrasi Siswa Baru </p>
	
	<form method = 'POST' action = 'aksi_tambah.php'>
	<table border = '1' cellspacing = '1' cellpadding = '10'
	style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
	<tr>
		<td> Nama Siswa </td>
		<td width = '5' align = 'center'> : </td>
		<td> <input type = 'text' placeholder='Nama Siswa' name = 'nama' /> </td>
		</tr>
	<tr>
		<td> Jenis Kelamin </td>
		<td align = 'center'> : </td>
		<td> <input type = 'text' placeholder='Jenis Kelamin' name = 'Jenis_Kelamin' /> </td>
		</tr>
	<tr>
		<td> Kelas </td>
		<td align = 'center'> : </td>
		<td> <input type = 'text' placeholder='Kelas' name = 'kelas' /> </td>
		</tr>
		<tr>
		<td> Tanggal Pendaftaran </td>
		<td align = 'center'> : </td>
		<td> <input type = 'text' placeholder='tanggal_pendaftaran' name = 'tanggal_pendaftaran' /> </td>
		</tr>
		<tr>
		<td> Tempat, Tanggal Lahir </td>
		<td align = 'center'> : </td>
		<td> <input type = 'text' placeholder='tempat_tanggal_lahir' name = 'tempat_tanggal_lahir' /> </td>
		</tr>
		<tr>
		<td> Agama </td>
		<td align = 'center'> : </td>
		<td> <input type = 'text' placeholder='agama' name = 'agama' /> </td>
		</tr>
	<tr>
		<td> Alamat </td>
		<td width = '5' align = 'center'> : </td>
		<td> <textarea name = 'alamat' placeholder='Alamat' ></textarea> </td>
		</tr>
		
	
		
	<tr>
	<td colspan = '3' align = 'center'>
	<input type = 'submit' name = 'submit' value = 'Submit'/>
	<input type = 'reset' name = 'Reset' value = 'Reset' /> </td>
	</tr>
</table>
<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>