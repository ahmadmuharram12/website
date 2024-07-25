<?php 
// koneksinya 
$koneksi=mysqli_connect('localhost','root','','pengangguran'); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title> 
form input data riwayat pekerjaan
</title> 
</head> 
<body style='background-color:yellow;'> 
<table> 
<form method='POST' action='tambah_data_riwayat.php'> 
<tr><td colspan='3'>Formulir Isi Data riwayat pekerjaan </td></tr> 
<tr> 
    <td>Pekerjaan</td> 
    <td>:</td> 
    <td><input type='text' name='id_pekerjaan'></td> 
</tr> 
<tr> 
    <td>Nama Perusahaan</td> 
    <td>:</td> 
    <td><input type='text' name='nama_perusahaan'></td> 
</tr> 
<tr> 
    <td>Posisi Pekerjaan</td> 
    <td>:</td>
    <td><input type='text' name='posisi_pekerjaan'></td>
</tr> 
<tr> 
    <td>Tanggal Mulai</td> 
    <td>:</td> 
    <td> 
        <input type='date' name='tanggal_mulai'></td>
</tr> 
<tr> 
    <td>Tanggal Selesai</td> 
    <td>:</td> 
    <td> 
        <input type='date' name='tanggal_selesai'></td>
</tr> 
<tr> 
    <td>Alasan Keluar</td> 
    <td>:</td> 
    <td> 
        <input type='text' name='alasan_keluar'></td>
</tr> 
<tr><td colspan='3'><input type='submit' name='submit' value='simpan'></td></tr>
</form> 
</table> 
</body>
</html>
<table border="1"> 
    <tr> 
      <th>Pekerjaan</th> 
      <th>Nama Perusahaan</th> 
      <th>Posisi Pekerjaan</th> 
      <th>Tanggal Mulai</th>
      <th>Tanggal Selesai</th>
      <th>Alasan Keluar</th>
      <th colspan="2">Aksi</th> 
    </tr> 
<?php 
    // Tampilkan semua data 
    $q = $koneksi->query("SELECT * FROM riwayatpekerjaan_muharram12"); 
$id_pekerjaan = '1'; // nomor urut    
while ($dt = $q->fetch_assoc()) : 
    ?> 
<tr>   
      
      <td><?= $dt['id_pekerjaan'] ?></td> 
      <td><?= $dt['nama_perusahaan'] ?></td> 
      <td><?= $dt['posisi_pekerjaan'] ?></td> 
      <td><?= $dt['tanggal_mulai'] ?></td>
      <td><?= $dt['tanggal_selesai'] ?></td>
      <td><?= $dt['alasan_keluar'] ?></td>
      <td><a href="update_riwayatpekerjaan.php?id=<?=$dt['id_pekerjaan']?>">Ubah</a></td> 
      <td><a href="delete_riwayatpekerjaan.php?id=<?=$dt['id_pekerjaan'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td> 
    </tr> 
<?php 
    endwhile; 
    ?> 
</table>

</body> 
</html>
