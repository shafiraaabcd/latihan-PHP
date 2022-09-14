<?php
include "../connect.php";

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
    <meta charset="UTF-8">
    <meta http-equlv="X-UA-Compatible" content="EI-Edge">    
    <title>Document</title></head>
<body>
    <h1>Tambah Data Matakuliah</h1>
    <form action="create.php" method="post">
        Kode: <input type="type" name="kode"><br>
        Matakuliah: <input type="text" name="nama_matkul"><br>
        SKS: <input type="type" name="sks"><br>
        Semester: <input type="type" name="semester"><br>

        <select name = "id_dosen" id="nama_dosen">
            <option value = "-">--Pilih salah satu--</option>
            <?php
            while ($data = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $data['id_dosen'];?>">
                <?php echo $data['nama_dosen'];?>
            </option>
            <?php
            }
            ?>
</select>
        <input type="submit" value="Simpan" name="btnSimpan">
</form>
</body></html>
