<?php
session_start();
if(!isset($_SESSION['userid'])){
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
</head>
<body>
    <h1>Album</h1>
    <p>Welcome <b><?=$_SESSION['namalengkap']?></b></p>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <form action="tambah-album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum" id="namaalbum"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" id="deskripsi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <table border="1" cellpadding=5 cellspacing=0>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggaldibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $userid=$_SESSION['userid'];
        $sql=mysqli_query($conn, " SELECT * From album where userid='$userid'");
        while($data=mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?=$data['albumid']?></td>
                <td><?=$data['namaalbum']?></td>
                <td><?=$data['deskripsi']?></td>
                <td><?=$data['tanggaldibuat']?></td>
                <td>
                <a href="hapus-album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                <a href="edit-album.php?albumid=<?=$data['albumid']?>">Edit</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>