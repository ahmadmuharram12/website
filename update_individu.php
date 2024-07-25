<?php
$koneksi=mysqli_connect('localhost','root','','pengangguran');
if (isset($_GET['id_individu'])) {
 $id_individu = $_GET['id_individu'];
$q = $koneksi->query("SELECT * FROM individu WHERE id_individu = '$id_individu'");
foreach ($q as $dt) :
 ?>
 <h2>Halaman Ubah Data</h2>
<form action="proses_updateabdul.php" method="post">
 <input type="text" name="id_kasus" value="<?= $dt['id_kasus'] ?>">
 <input type="data" name="tgl_kasus" value="<?= $dt['tgl_kasus'] ?>">
 <input type="text" name="kota" value="<?= $dt['kota'] ?>">
 <input type="text" name="total_kasus" value="<?= $dt['total_kasus'] ?>">
 <input type="text" name="total_kematian" value="<?= $dt['total_kematian'] ?>">
 <input type="text" name="total_sembuh" value="<?= $dt['total_sembuh'] ?>">
 <input type="submit" name="submit" value="Ubah Data">
 </form>
<?php
 endforeach;
}
?>