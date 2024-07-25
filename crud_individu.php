<?php 
// koneksinya 
$koneksi=mysqli_connect('localhost','root','','pengangguran'); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title> 
form input data individu
</title> 
</head> 
<body style='background-color:yellow;'> 
<table> 
<form method='POST' action='tambah_individu_muharram12.php'> 
<tr><td colspan='3'>Formulir Isi Data individu Pengangguran </td></tr> 
<tr> 
    <td>No individu</td> 
    <td>:</td> 
    <td><input type='text' name='id_individu'></td> 
</tr> 
<tr> 
    <td>Nama</td> 
    <td>:</td> 
    <td><input type='text' name='nama'></td> 
</tr> 
<tr> 
    <td>Usia</td> 
    <td>:</td>
    <td><input type='text' name='usia'></td>
</tr> 
<tr> 
    <td>Jenis Kelamin</td> 
    <td>:</td> 
    <td> 
        <input type='text' name='jenkel'></td>
</tr> 
<tr> 
    <td>pendidikan</td> 
    <td>:</td> 
    <td> 
        <input type='text' name='pendidikan'></td>
</tr> 
<tr>
    <td>status</td>
    <td>:</td>
    <td>
        <input type='text' name='status'></td>
</tr>
<tr><td colspan='3'><input type='submit' name='submit' value='simpan'></td></tr>
</form> 
</table> 
</body>
</html>
<table border="1"> 
    <tr> 
      <th>id individu</th> 
      <th>nama</th> 
      <th>usia </th> 
      <th>jenis kelamin</th>
      <th>pendidikan</th>
      <th>status</th>
      <th colspan="2">Aksi</th> 
    </tr> 
<?php 
    // Tampilkan semua data 
    $q = $koneksi->query("SELECT * FROM individu_muharram12"); 
$id_individu = '1'; // nomor urut    
while ($dt = $q->fetch_assoc()) : 
    ?> 
<tr>   
      
      <td><?= $dt['id_individu'] ?></td> 
      <td><?= $dt['nama'] ?></td> 
      <td><?= $dt['usia'] ?></td> 
      <td><?= $dt['jenkel'] ?></td>
      <td><?= $dt['pendidikan'] ?></td>
      <td><?= $dt['status'] ?> </td>
      <td><a href="update_individu_muharram12.php?id=<?=$dt['id_individu']?>">Ubah</a></td> 
      <td><a href="delete_individu_muharram12.php?id=<?=$dt['id_individu'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td> 
    </tr> 
<?php 
    endwhile; 
    ?> 
</table>

</body> 
</html>
