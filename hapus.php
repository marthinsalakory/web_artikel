<?php
include 'function.php';

if (isset($_GET['hapus_artikel'])) {
    $id = $_GET['hapus_artikel'];
    mysqli_query($conn, "DELETE FROM `artkel` WHERE id = $id");
    $_SESSION['info'] = "Berhasil Menghapus Artikel";
    header('Location: index.php');
    exit;
} else if (isset($_GET['hapus_user'])) {
    $id = $_GET['hapus_user'];
    mysqli_query($conn, "DELETE FROM `users` WHERE id = $id");
    $_SESSION['info'] = "Berhasil Menghapus User";
    header('Location: users.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}
