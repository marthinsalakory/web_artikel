<?php include 'header.php'; ?>

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
                        <label class="form-label" for="topik">Topik</label>
                        <input class="form-control" name="topik" id="topik">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="gambar">Gambar</label>
                        <input class="form-control" name="gambar" id="gambar" type="file">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="isi">Isi</label>
                        <textarea class="form-control" name="isi" id="isi" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="index.php" class="btn btn-warning">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>