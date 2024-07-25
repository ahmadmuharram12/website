<?php 
$koneksi=mysqli_connect('localhost','root','','pengangguran');
 if (isset($_POST['submit'])) {  
  $id_individu = $_POST['id_individu']; 
  $id_pekerjaan = $_POST['id_pekerjaan']; 
  $nama_program = $_POST['nama_program']; 
  $tanggal_mulai = $_POST['tanggal_mulai'];
  $tanggal_selesai = $_POST['tanggal_selesai'];
 
// id_produk bernilai '' karena kita set auto increment 
$queryinput="INSERT INTO program_pelatihan_muharram12(id_individu,id_pekerjaan,nama_program,tanggal_mulai,tanggal_selesai) 
VALUES ('$id_individu', '$id_pekerjaan', '$nama_program', '$tanggal_mulai', '$tanggal_selesai')"; 
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