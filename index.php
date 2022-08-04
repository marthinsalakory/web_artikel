<?php include 'header.php'; ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Semua Artikel
                </h1>
                <ol class="breadcrumb" style="position: relative;">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-users"></i> Semua Artikel
                    </li>
                    <a href="tulis.php" class="btn btn-primary" style="position: absolute; right: 0; transform: translate(0, -20%);"><i class="fa fa-plus"></i></a>
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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Tanggal</th>
                            <th class="text-center" scope="col">Penulis</th>
                            <th class="text-center" scope="col">Topik</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center" scope="row">1</th>
                            <td class="text-center"><?= datetime(); ?></td>
                            <td class="text-center">Aurelia Martha Mavalda Huwae</td>
                            <td class="text-center">Peran KKN Sebagai Upaya Pemersatu Masyarakat</td>
                            <td class="text-center">
                                <a href="detail.php?id=1" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="edit_artikel.php" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="hapus.php?hapus_artikel=1" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>