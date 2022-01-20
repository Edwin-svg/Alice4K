<?php
include 'koneksi.php';
session_start ();
if (isset($_SESSION['username'])) {

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Nama Lengkap
							</div>
							<div class="cell">
								Alamat
							</div>
							<div class="cell">
								Nomor Hp
							</div>
							<div class="cell">
								Status
							</div>
						</div>

						
                            <?php 
 $sql = "SELECT * FROM buang order by kode desc"; 
 $hasil = mysqli_query($conn,$sql);
 while ($ok=mysqli_fetch_array($hasil)):  ?><div class="row">
							<div class="cell" data-title="Full Name">
								 <?php echo $ok['nama'];?>
							</div>
							<div class="cell" data-title="Age">
                            <?php echo $ok['alamat'];?>
							</div>
							<div class="cell" data-title="Job Title">
                            <?php echo $ok['nohp'];?>
							</div>
							<div class="cell" data-title="Location">
                            <?php echo $ok['status'];?>
							</div></div>
                            <?php endwhile;
 
?>
						

					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php }
else {
    header("Location: form.php");
}
?>