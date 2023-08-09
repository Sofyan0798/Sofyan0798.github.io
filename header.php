<?php
include "includes/config.php";
session_start();
if(!isset($_SESSION['nama_lengkap'])){
	echo "<script>location.href='login.php'</script>";
}
$config = new Config();
$db = $config->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SMK Islam Annur Losari</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.php"><img src="annur2.png" height="40 px" width="40 px"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php
		if($_SESSION['username'] == 'admin'){
		?>
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="nilai.php"> Bobot Nilai</a></li>
					<li><a href="kriteria.php">Kriteria</a></li>
					<li><a href="alternatif.php">Siswa</a></li>
					<li><a href="rangking.php">Penilaian</a></li>
					<li><a href="laporan.php">Laporan</a></li>
				</ul>
		<?php
			}else{
		?>
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="alternatif.php">Siswa</a></li>
					<li><a href="rangking.php">Penilaian</a></li>
					<li><a href="laporan.php">Laporan</a></li>
					</ul>
		<?php
			}
		?>
		  
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="profil.php"><?php echo $_SESSION['nama_lengkap'] ?></a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<?php
			if($_SESSION['username'] == 'admin'){
			?>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="user.php">Manejer Pengguna</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="logout.php">Logout</a></li>
				<?php
				}else{
			?>
				<li><a href="profil.php">Profil</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="logout.php">Logout</a></li>
			<?php
				}
			?>

			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  
    <div class="container">