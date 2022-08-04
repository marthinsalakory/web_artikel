<?php

include 'header.php';
$id = $_GET['id'];
$row = find('artikel', 'id', $id);
if (isset($_POST['submit'])) {
    $topik = $_POST['topik'];
    $tanggal = datetime();
    $penulis = user()->nama_lengkap;
    $isi = $_POST['isi'];
    if ($_FILES['gambar']['error'] == 4) {
        $gambar = $row->gambar;
    } else {
        unlink('uploads/' . $row->gambar);
        $ext = $_FILES['gambar']['name'];
        $ext = explode('.', $ext);
        $ext = end($ext);
        $gambar = uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'uploads/' . $gambar);
    }
    $result = mysqli_query($conn, "UPDATE `artikel` SET `topik`='$topik',`tanggal`='$tanggal',`penulis`='$penulis',`isi`='$isi',`gambar`='$gambar' WHERE id = $id");
    $_SESSION['info'] = "Berhasil Mengubah Artikel";
    header('Location: index.php');
    exit;
}

?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Artikel
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Edit Artikel
                    </li>
                </ol>
            </div>
        </div>
        <div class="row" style="height: 80vh;">
            <div class="col-lg-12">
                <form role="form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label" for="topik">Topik <span class="text-danger">*</span></label>
                        <input required autocomplete="off" class="form-control" name="topik" id="topik" value="<?= $row->topik; ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="gambar">Gambar</label>
                        <input autocomplete="off" class="form-control" name="gambar" id="gambar" type="file">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="isi">Isi <span class="text-danger">*</span></label>
                        <textarea required autocomplete="off" class="form-control" name="isi" id="isi" rows="10"><?= $row->isi; ?></textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>