<?php
require 'functions.php';
//bila tidak ada id di URL
if (!isset($_GET['id'])) {
	header("location: index.php");
	exit;
}
//ambil id dari url
$id = $_GET['id'];
//query mahasiswa berdasarkan id
$b = query("SELECT * FROM barang WHERE id = $id");
//cek apaah tombol ubah sudah di klik
if (isset($_POST['ubah'])) {
	if (ubah($_POST)) {
		echo "<script>
alert ('data berhasil diubah');
document.location.href='index.php';
</script>";
	}
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Ubah Data Mahasiswa</title>
	<style type="text/css">
		<!-- 
		body {
			font: 100% Verdana, Arial, Helvetica, sans-serif;
			background: #666666;
			margin: 0;
			/* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
			padding: 0;
			text-align: center;
			/* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
			color: #000000;
		}


		.twoColElsLt #container {
			width: 46em;
			/* this width will create a container that will fit in an 800px browser window if text is left at browser default font sizes */
			background: #FFFFFF;
			margin: 0 auto;
			/* the auto margins (in conjunction with a width) center the page */
			border: 1px solid #000000;
			text-align: left;
			/* this overrides the text-align: center on the body element. */
		}


		.twoColElsLt #sidebar1 {
			float: left;
			width: 12em;
			/* since this element is floated, a width must be given */
			background: #EBEBEB;
			/* the background color will be displayed for the length of the content in the column, but no further */
			padding: 100px 0;
			/* top and bottom padding create visual space within this div */
		}

		.twoColElsLt #sidebar1 h3,
		.twoColElsLt #sidebar1 p {
			margin-left: 10px;
			/* the left and right margin should be given to every element that will be placed in the side columns */
			margin-right: 10px;
		}


		.twoColElsLt #mainContent {
			margin: 0 1.5em 0 13em;
			/* the right margin can be given in ems or pixels. It creates the space down the right side of the page. */
		}

		/* Miscellaneous classes for reuse */
		.fltrt {
			/* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
			float: right;
			margin-left: 8px;
		}

		.fltlft {
			/* this class can be used to float an element left in your page */
			float: left;
			margin-right: 8px;
		}

		.clearfloat {
			/* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain a float */
			clear: both;
			height: 0;
			font-size: 1px;
			line-height: 0px;
		}
		-->
	</style>
</head>

<body class="twoColElsLt">

	<div id="container">
		<div id="sidebar1">
			<h3><a href="index.php">MENU</a></h3>
			<p><a href="ttambah.php">Tambah barang</a></p>
			<p><a href="tlihat.php">Lihat Barang</a></p>
		  <p><a href="inpo.php">Info</a></p>
			<!-- end #sidebar1 -->
		</div>
		<div id="mainContent">
			<h1> Ubah Data </h1>
			<form action="" method="POST">
				<input type="hidden" name="id" value=<?= $b['id']; ?>>
				<ul>
					<li>
						<label>
							Nama :
							<input type="text" name="nama" autofocus required value=<?= $b['nama']; ?>>
						</label>
					</li>
					<li>
						<label>
							NIM :
							<input type="text" name="jenis" required required value=<?= $b['jenis']; ?>>
						</label>
					</li>
					<li>
						<label>
							E-mail :
							<input type="text" name="jumlah" required required value=<?= $b['jumlah']; ?>>
						</label>
					</li>
					<li>
						<label>
							Jurusan :
							<input type="text" name="penempatan" required required value=<?= $b['penempatan']; ?>>
						</label>
					</li>
					<li>
						<label>
							Gambar :
							<input type="text" name="gambar" required required value=<?= $b['gambar']; ?>>
						</label>
					</li>
					<li>
						<button type="submit" name="ubah"> Ubah Data! </button>
					</li>
				</ul>
			</form>
			<!-- end #mainContent -->
		</div>
		<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
		<!-- end #container -->
	</div>
</body>

</html>