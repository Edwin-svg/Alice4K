<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
  $nm =$_POST['nama'];
  $nh =$_POST['nohp'];
  $alm =$_POST['alm'];
  $st='Menunggu Konfirmasi';
  $kd = uniqid(2).rand(2,100);
  if (!empty($nh)) {
    $sql = "INSERT INTO buang(kode,nama,alamat,nohp,status) VALUES ('".$kd."','".$nm."','".$alm."','".$nh."','".$st."')";
    $kedip = mysqli_query($conn,$sql);
    if ($kedip) {
      echo "<script>alert('TELAH TERINPUT SILAHKAN MENUNGGU PROSES !')</script>";
      
    }
    else {
      echo "<script>alert('yahaha gagal!')</script>";
    }

  }
}

 elseif (isset($_POST['wehehe'])) {
  $nm =$_POST['nama'];
  $nh =$_POST['nohp'];
  $alm =$_POST['alm'];
  $jnk =$_POST['jn'];
  $st='Menunggu Konfirmasi';
  $kd = uniqid(2).rand(2,100);
  if (!empty($nh)) {
    $sql = "INSERT INTO jual(kode,nama,alamat,Jenis,nohp,status) VALUES ('".$kd."','".$nm."','".$alm."','".$jnk."','".$nh."','".$st."')";
    $kedip = mysqli_query($conn,$sql);
    if ($kedip) {
      echo "<script>alert('TELAH TERINPUT Harap Bersabarsss !')</script>";
      
    }
    else {
      echo "<script>alert('yahaha gagal!')</script>";
    }

  }
}
?>

<?php
error_reporting(0);
session_start ();
if (isset($_SESSION['username'])) {
  $hl= $_GET['hl'];
 if($hl=='buang')
 {
?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="buang.css">

    <title>Buang Sampah</title>
  </head>
  <body>

    <div class="container">
      <form action="index.php" method="post">

        <div class="judul">Buang Sampah</div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap...">
        </div>

        <div class="mb-3">
          <label for="exampleInput
          Password1" class="form-label">Nomor Hp</label>
          <input type="text" name="nohp" class="form-control" placeholder="Nomor Hp...">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1"  class="form-label">Alamat</label>
          <input type="text" name="alm" class="form-control" placeholder="Alamat...">
        </div>
        <button type="submit" name="submit"class="btn btn-primary">BUANG SAMPAH</button>
        <a href="tabel.php" style="text-decoration: none;" class="test">Riwayat</a>

      </form>
    </div>









    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
<?php } elseif ($hl=='jual') {

?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="jual.css">

    <title>Jual Sampah</title>
  </head>
  <body>

    <div class="container">
      <form action="index.php" method="post">

        <div class="judul">Jual Sampah</div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap...">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nomor Hp</label>
          <input type="text" name="nohp" class="form-control" placeholder="Nomor Hp...">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Alamat</label>
          <input type="text" name="alm" class="form-control" placeholder="Alamat...">
        </div>
        <label class="js">Jenis Sampah</label>
         <br>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jn" id="inlineRadio1" value="ORGANIK">
          <label class="form-check-label" for="inlineRadio1">Organik</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jn" id="inlineRadio2" value="ANORGANIK">
          <label class="form-check-label" for="inlineRadio2">Anorganik</label>
        </div>
        <br>

        <button type="submit" name="wehehe" class="btn btn-primary">JUAL SAMPAH</button>
        <a href="tabel2.php" style="text-decoration: none;" class="test">Riwayat</a>

      </form>
    </div>









    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>

<?php
 }
   else  {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- My css -->
    <link rel="stylesheet" href="test.css">

    <!-- my fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Viga&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        
        </style>

    <title>Apel</title>
  </head>
  <body>

    <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light navigasi">
            <div class="container">
              <a class="navbar-brand" href="#" style="color: white;">Alice Peduli <span>Lingkungan</span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                  <a class="nav-link" href="#" style="color: white;">Home</a>
                  <a class="nav-link" href="#about" style="color: white;">About</a>
                  <a class="nav-link" href="#" style="color: white;">Contact</a>
                  <a class="nav-link" href="logout.php" style="color: white;">logout</a>

                </div>
              </div>
            </div>
            </nav>
    <!-- Akhir Navbar -->


    <!-- Jumbotroon -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Mari <span>Wujudkan</span><br><span>Sorong</span> Bebas Sampah</h1>
          <img src="img/bulan1.svg" alt="">
        </div>
      </div>
    <!-- Akhir Jumbotroon -->

    <!-- Info panel -->
    <div class="container">
      <div class="row justify-content-center" id="about">
        <div class="col-10 info-panel">
          <div class="row">

            <div class="col-lg" id="panel">
              <img src="img/alien.svg" alt="" class="float-left">
              <a href="index.php?hl=jual" style="text-decoration: none;"><h4 >Jual Sampah</h4></a>
              <p>Tukarkan Sampah Anda dengan Uang</p>
            </div>

            <div class="col-lg">
              <img src="img/alien2.svg" alt="" class="float-left">
              <a href="index.php?hl=buang" style="text-decoration: none;"><h4>Buang Sampah</h4></a>
              <p>Panggil petugas kebersihan</p>
            </div>

            <div class="col-lg">
              <img src="img/alien3.svg" alt=""class="float-left" >
              <a href="coba.html" target="_blank" style="text-decoration: none;"><h4>Edukasi</h4></a>
              <p>Mari belajar tentang jenis-jenis sampah</p>
            </div>

          </div>
        </div>
      </div>      
    </div>
    <!-- Akhir info panel -->


    <!-- About -->
    <div class="jumbotron2 jumbotron-fluid">
      <div class="container">
      
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10 info-panel2">
            <h1 class="display-4" style="font-weight: bold;">About</h1>
            <div class="row">
              <div class="col-lg">
                <img src="img/astronot.svg" alt="">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa odio cumque, eum aut expedita et odit placeat at tempore, adipisci inventore amet nobis. Ipsam quo, deleniti aliquid quasi aperiam animi magnam neque! Itaque deleniti cumque modi provident, laudantium labore veniam aliquid neque aspernatur excepturi, inventore illo eos quos adipisci exercitationem possimus eaque ullam nobis, nihil nulla! Exercitationem aperiam earum, vitae maiores impedit, voluptatum modi magni eveniet, doloremque sint voluptates reiciendis ipsum suscipit rerum commodi corporis minus? Harum quae dolor illo minus fugit, hic, sapiente soluta voluptatibus ullam explicabo exercitationem distinctio veniam rem numquam rerum quas? Modi id a earum ex!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!-- akhir About -->


      <!-- contact -->
      <div class="jumbotron3 jumbotron-fluid">
        <div class="container">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-10 info-panel3">
                <h1 class="display-4"  style="font-weight: bold;">Contact</h1>
                <div class="row">
                  <div class="col-lg">
                    <img src="img/ufo.svg" alt="" class="float-left">
                    <a href="#" style="text-decoration: none;"><h4>Telepon</h4></a>
                    <p>082397034309</p>
                  </div>
    
                  <div class="col-lg">
                    <img src="img/star.svg" alt="" class="float-left">
                    <a href="#" style="text-decoration: none;"><h4>Email</h4></a>
                    <p>edwinsyah@gmail.com</p>
                  </div>
    
                  <div class="col-lg">
                    <img src="img/bulan.svg" alt=""class="float-left" >
                    <a href="#" style="text-decoration: none;"><h4>Alamat</h4></a>
                    <p>Kampus Ums</p>
                  </div>
    
                </div>
              </div>
            </div>      
          </div>
        </div>
      </div>
      <!-- akhir contact -->












    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
<?php
} }
else {
    header("Location: form.php");
}
?>