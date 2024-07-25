<?php 
// koneksinya 
$koneksi=mysqli_connect('localhost','root','','pengangguran'); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title> 
form input data program pelatihan
</title> 
</head> 
<body style='background-color:yellow;'> 
<table> 
<form method='POST' action='tambah_programpelatihan_muharram12.php'> 
<tr><td colspan='3'>Formulir Isi Data Program Pelatihan </td></tr> 
<tr> 
    <td>No individu</td> 
    <td>:</td> 
    <td><input type='text' name='id_individu'></td> 
</tr> 
<tr> 
    <td>pekerjaan</td> 
    <td>:</td> 
    <td><input type='text' name='id_pekerjaan'></td> 
</tr> 
<tr> 
    <td>nama program</td> 
    <td>:</td>
    <td><input type='text' name='nama_program'></td>
</tr> 
<tr> 
    <td>tanggal mulai</td> 
    <td>:</td> 
    <td> 
        <input type='date' name='tanggal_mulai'></td>
</tr> 
<tr> 
    <td>tanggal selesai</td> 
    <td>:</td> 
    <td> 
        <input type='date' name='tanggal_selesai'></td>
</tr>  
<tr><td colspan='3'><input type='submit' name='submit' value='simpan'></td></tr>
</form> 
</table> 
</body>
</html>
<table border="1"> 
    <tr> 
      <th>id individu</th> 
      <th>Id pekerjaan</th> 
      <th>nama program</th> 
      <th>tanggal mulai</th>
      <th>tanggal selesai</th>
      <th colspan="2">Aksi</th> 
    </tr> 
<?php 
    // Tampilkan semua data 
    $q = $koneksi->query("SELECT * FROM program_pelatihan_muharram12"); 
$id_individu = '1'; // nomor urut    
while ($dt = $q->fetch_assoc()) : 
    ?> 
<tr>   
      
      <td><?= $dt['id_individu'] ?></td> 
      <td><?= $dt['id_pekerjaan'] ?></td> 
      <td><?= $dt['nama_program'] ?></td> 
      <td><?= $dt['tanggal_mulai'] ?></td>
      <td><?= $dt['tanggal_selesai'] ?></td>
      <td><a href="update_programpelatihan.php?id=<?=$dt['id_individu']?>">Ubah</a></td> 
      <td><a href="delete_programpelatihan.php?id=<?=$dt['id_individu'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td> 
    </tr> 
<?php 
    endwhile; 
    ?> 
</table>

</body> 
</html>
