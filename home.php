<?php
session_start();
if(!isset($_SESSION['userid'])){
    header("location:login.php");
}
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <h1>Home</h1>
        <p> Welcome <b><?=$_SESSION['namalengkap']?></b></p>

        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="Foto.php">Foto</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </body>
    </html>
