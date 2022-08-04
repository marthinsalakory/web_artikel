<?php
include 'header.php';
$row = find('artikel', 'id', $_GET['id']);
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Detail Artikel
                </h1>
                <ol class="breadcrumb" style="position: relative;">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-users"></i> Detail Artikel
                    </li>
                    <a href="index.php" class="btn btn-primary" style="position: absolute; right: 0; transform: translate(0, -20%);"><i class="fa fa-rotate-left"></i></a>
                </ol>
            </div>
        </div>

        <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <strong>Selamat Datang</strong>
                        </div>
                    </div>
                </div> -->
        <!-- /.row -->

        <div class="row" style="height: 80vh;">
            <div class="col-lg-12">
                <img src="uploads/<?= $row->gambar; ?>" width="100%" height="300px">
                <h3><?= $row->topik; ?></h3>
                <p>ditulis oleh <a href="users.php"><?= $row->penulis; ?></a> pada <?= $row->tanggal; ?></p>
                <h4><?= nl2br($row->isi); ?></h4>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>