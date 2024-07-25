<?php 
$koneksi=mysqli_connect('localhost','root','','pengangguran');
 if (isset($_POST['submit'])) {  
  $id_pekerjaan = $_POST['id_pekerjaan']; 
  $nama_perusahaan= $_POST['nama_perusahaan']; 
  $posisi_pekerjaan = $_POST['posisi_pekerjaan']; 
  $tanggal_mulai = $_POST['tanggal_mulai'];
  $tanggal_selesai = $_POST['tanggal_selesai'];
  $alasan_keluar = $_POST['alasan_keluar'];
 
// id_produk bernilai '' karena kita set auto increment 
$queryinput="INSERT INTO riwayatpekerjaan_muharram12(id_pekerjaan,nama_perusahaan,posisi_pekerjaan,tanggal_mulai,tanggal_selesai,alasan_keluar) 
VALUES ('$id_pekerjaan', '$nama_perusahaan', '$posisi_pekerjaan', '$tanggal_mulai', '$tanggal_selesai','$alasan_keluar')"; 
  $q=mysqli_query($koneksi,$queryinput); if ($q) { 
    // pesan jika data tersimpan 
    echo "<script>alert('Data kemacetan berhasil ditambahkan'); window.location.href='crud_riwayatpekerjaan.php'</script>"; 
  } else { 
    // pesan jika data gagal disimpan 
    echo "<script>alert('Data kemacetan ditambahkan'); window.location.href='crud_riwayatpekerjaan.php'</script>"; 
  } 
} else { 
  // jika coba akses langsung halaman ini akan diredirect ke halaman index 
    header('Location: crud_riwayatpekerjaan.php'); 
}