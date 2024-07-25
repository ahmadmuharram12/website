<?php
$koneksi=mysqli_connect('localhost','root','','pengangguran');
if (isset($_GET['id_individu'])) {
 $id_individu = $_GET['id_individu'];
// perintah hapus data berdasarkan id yang dikirimkan
 $q = $koneksi->query("DELETE FROM individu WHERE id_individu='$id_individu'");
// cek perintah
 if ($q) {
 // pesan apabila hapus berhasil
 echo "<script>alert('Data berhasil dihapus'); window.location.href='crud_individu.php'</script>";
 } else {
 // pesan apabila hapus gagal
 echo "<script>alert('Data berhasil dihapus'); window.location.href='crud_individu.php'</script>";
 }
} else {
 // jika mencoba akses langsung ke file ini akan diredirect ke halaman utama
 header('Location:crud_individu.php');
}
?>
