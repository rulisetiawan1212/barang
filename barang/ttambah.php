<?php
require 'functions.php';
//cek apaah tombol tambah sudah di klik
if (isset($_POST['tambah'])) {
	if (tambah($_POST)) {
		echo "<script>
alert ('data berhasil ditambahkan');
document.location.href='baru.php';
</script>";
	}
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Tambah Data </title>
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
			<p><a href="logout.php"> logout </a></p>
			<!-- end #sidebar1 -->
		</div>
		<div id="mainContent">
			<h1> Tambah Barang </h1>
			<form action="" method="POST">
				<table width="472" border="0">
					<tr>
						<td width="105">Nama</td>
						<td width="22">:</td>
						<td width="331"><input type="text" name="nama" autofocus required></td>
					</tr>
					<tr>
						<td>Jenis</td>
						<td>:</td>
						<td><input type="text" name="jenis" required></td>
					</tr>
					<tr>
						<td>Jumlah</td>
						<td>:</td>
						<td><input type="text" name="jumlah" required></td>
					</tr>
					<tr>
						<td>Penempatan</td>
						<td>:</td>
						<td><input type="text" name="penempatan" required></td>
					</tr>
					<tr>
						<td>Gambar</td>
						<td>:</td>
						<td><input type="text" name="gambar" value="nophoto.jpg" required></td>
					</tr>
					<tr>
						<td><button type="submit" name="tambah"> Tambah Data! </button></td>
						<td></td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</form>
			<!-- end #mainContent -->
		</div>
		<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
		<!-- end #container -->
	</div>
</body>

</html>