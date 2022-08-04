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

        <?php if (isset($_SESSION['info'])) : ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i> <strong><?= $_SESSION['info']; ?></strong>
                    </div>
                </div>
            </div>
            <?php unset($_SESSION['info']); ?>
        <?php endif; ?>

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
                        <?php foreach (findAll('artikel') as $a) : ?>
                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td class="text-center"><?= $a['tanggal']; ?></td>
                                <td class="text-center"><?= $a['penulis']; ?></td>
                                <td class="text-center"><?= $a['topik']; ?></td>
                                <td class="text-center">
                                    <a href="detail.php?id=<?= $a['id']; ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="edit_artikel.php?id=<?= $a['id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="hapus.php?hapus_artikel=<?= $a['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>