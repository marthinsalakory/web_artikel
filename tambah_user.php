<?php
include 'header.php';

if (isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $nim = $_POST['nim'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $terakhir_login = datetime();
    $result = mysqli_query($conn, "INSERT INTO `users`(`nama_lengkap`, `nim`, `username`, `password`, `terakhir_login`) VALUES ('$nama_lengkap','$nim','$username','$password','$terakhir_login')");
    $_SESSION['info'] = "Berhasil Menambahkan User";
    header('Location: users.php');
    exit;
}

?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Tambah User
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Tambah User
                    </li>
                </ol>
            </div>
        </div>
        <div class="row" style="height: 80vh;">
            <div class="col-lg-12">
                <form role="form" method="POST">
                    <div class="form-group">
                        <label class="form-label" for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                        <input autocomplete="off" required type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nim">Nim <span class="text-danger">*</span></label>
                        <input autocomplete="off" required type="text" class="form-control" name="nim" id="nim">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="username">Username <span class="text-danger">*</span></label>
                        <input autocomplete="off" required type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                        <input autocomplete="off" required type="password" class="form-control" name="password" id="password">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="users.php" class="btn btn-warning">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>