<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang - Pendaftaran Bimbel Online</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Pendaftaran Bimbel Online</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Pendaftaran</a>
             <li class="dropdown">
              
                            <a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><font color="white">Info Bimbel</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Jakarta, 23 Juni 2018 </li>
                                <li role="separator" class="divider"></li>
                                </br>
                                <li><a href="post.html">Primagama</a></li>
                                </br>
                                <li><a href="nc.html">New Concept</a></li>
                                
                        </ul>
                  </li>
            </li>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1></h1>
              <?php
error_reporting(0);
//membuat koneksi ke database
include "koneksi.php";
?>
 
<center> 
MENAMPILKAN DATA SISWA 
<br>
<br>

<!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->
<form action='tambah.php' method='POST'>
<table >
  <tr>
  <td> <input type='submit' name='tambah' value='Tambah siswa'> </td> 
  </tr>
</table>
</form>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='600' >  
<tr>
  <th> NO </th>
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

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['id'];
 echo "  
    <tr>
    <td><center>".$i."</center></td> 
    <td>".$data['nama']."</td>
    <td>".$data['Jenis_Kelamin']."</td>
    <td>".$data['Kelas']."</td>
    <td>".$data['alamat']."</td>
    <td>".$data['tanggal_pendaftaran']."</td>
    <td>".$data['tempat_tanggal_lahir']."</td>
    <td>".$data['agama']."</td>
    
    </tr> 
    ";
  $i++; 
}

?>

</table>
              <span class="subheading">This is what I do.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
