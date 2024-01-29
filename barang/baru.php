<?php
require 'functions.php';
$barang = query("SELECT * FROM barang");

//bila tombol cari di klik
if (isset($_POST['cari'])) {
	$barang = cari($_POST['keyword']);
}
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Lihat Barang</title>
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
			/* the background color will be displayed for the length of the content in the column, but no further */
			padding: 100px 0;
			background-color: #EBEBEB;
			/* top and bottom padding create visual space within this div */
			background-position: 100% 100%;
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
			<center>
				<h1>Data Baru Dimasukan</h1>
			</center>

			<table border="0" align="center">
				<?php
				$tampil = mysqli_query($mysqli, "select * from barang ORDER BY id DESC LIMIT 1");
				$no = 1;
				while ($hasil = mysqli_fetch_array($tampil)) {
				?>
					<tr>
						<td height="45" colspan="3"><div align="center"><img src="img/<?= $hasil['gambar']; ?>"></div></td>
					</tr>
					<tr>
						<td width="112">Nama</td>
						<td width="7">:</td>
						<td width="126"><?php echo $hasil['nama']; ?></td>
			  </tr>
					<tr>
						<td>Jenis</td>
						<td>:</td>
						<td><?php echo $hasil['jenis']; ?></td>
			  </tr>
                    <tr>
						<td>Jumlah</td>
						<td>:</td>
						<td><?php echo $hasil['jumlah']; ?></td>
					</tr>
                    <tr>
						<td>Penempatan</td>
						<td>:</td>
						<td><?php echo $hasil['penempatan']; ?></td>
					</tr>
				<?php
				}
				?>
			</table>
		  <!-- end #mainContent -->
		</div>
		<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
		<!-- end #container -->
	</div>

</body>

</html>