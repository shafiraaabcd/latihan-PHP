<?php 
include '../connect.php'; //memakasi ../ karena connect.php ada diluar folder dosen

$query = "SELECT * FROM dosen";
$result = mysqli_query($connect, $query); //untuk mengeksekusi query dri dalam koneksi yg dibuat tadi
$num = mysqli_num_rows($result); //menghitung jumlah datanya
?>

<!DOCTYPE html>
<html lang="en">
    <head> <title> SiUniv</title></head>
    <body>
        <table border = '1'>
            <h2>Data Dosen</h2>
            <tr>
                <th>No. </th>
                <th>Nama Dosen </th>
                <th>Telepon </th>
                <th colspan='2'>Aksi </th>
</tr>
<?php 
if($num>0){
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td> $no </td>";
        echo "<td>".$data['nama_dosen']."</td>";
        echo "<td>".$data['telp']."</td>";
        echo "<td><a href='form-update.php?id_dosen=".$data['id_dosen']."'>Edit</a> |";
        echo "<td><a href='delete.php?id_dosen=".$data['id_dosen']."' onclick='return confirm (\"Apakah anda yakin ingin menghapus data?\")' >Hapus</a></td>";
        echo "</tr>";
        $no++;
    }
}
else{
    echo "<td colspan = '3'>Tidak ada data</td>";
}
?>
</table>