<?php 
$koneksi=mysqli_connect('localhost','root','','pengangguran');
 if (isset($_POST['submit'])) {  
  $id_individu = $_POST['id_individu']; 
  $nama = $_POST['nama']; 
  $usia = $_POST['usia']; 
  $jenkel = $_POST['jenkel'];
  $pendidikan = $_POST['pendidikan'];
  $status = $_POST['status'];
 
// id_produk bernilai '' karena kita set auto increment 
$queryinput="INSERT INTO individu_muharram12(id_individu,nama,usia,jenkel,pendidikan,status) 
VALUES ('$id_individu', '$nama', '$usia', '$jenkel', '$pendidikan','$status')"; 
  $q=mysqli_query($koneksi,$queryinput); if ($q) { 
    // pesan jika data tersimpan 
    echo "<script>alert('Data kemacetan berhasil ditambahkan'); window.location.href='crud_individu.php'</script>"; 
  } else { 
    // pesan jika data gagal disimpan 
    echo "<script>alert('Data kemacetan ditambahkan'); window.location.href='crud_individu.php'</script>"; 
  } 
} else { 
  // jika coba akses langsung halaman ini akan diredirect ke halaman index 
    header('Location: crud_individu.php'); 
}