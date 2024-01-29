<?php


// cari data
function cari($keyword)
{
  $conn = koneksi();
  $query = "SELECT * FROM barang WHERE nama LIKE '%$keyword%' OR jenis LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// hapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $jenis = htmlspecialchars($data['jenis']);
  $jumlah = htmlspecialchars($data['jumlah']);
  $penempatan = htmlspecialchars($data['penempatan']);
  $gambar = htmlspecialchars($data['gambar']);
  $query = "UPDATE barang SET
nama = '$nama',
jenis = '$jenis',
jumlah = '$jumlah',
penempatan = '$penempatan',
gambar = '$gambar'
WHERE id ='$id'
";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

//tambah data
function tambah($data)
{
  $conn = koneksi();
  $nama = htmlspecialchars($data['nama']);
  $jenis = htmlspecialchars($data['jenis']);
  $jumlah = htmlspecialchars($data['jumlah']);
  $penempatan = htmlspecialchars($data['penempatan']);
  $gambar = htmlspecialchars($data['gambar']);
  $query = "INSERT INTO barang
VALUES ('', '$nama', '$jenis', '$jumlah', '$penempatan','$gambar')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

// koneksi
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'inventori');
}
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  # jika data hanya 1
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// koneksi 2
$mysqli = new mysqli("localhost", "root", "", "inventori");
