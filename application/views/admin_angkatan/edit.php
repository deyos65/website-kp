<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $angkatan['id']; ?>">
        <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
        <?php endif; ?>

        <div class="form-group col-lg-5">
            <label for="nama">Nama Angkatan</label>
            <input type="text" class="form-control" id="nama_angkatan" name="nama_angkatan" placeholder="Nama Angkatan" value="<?= $angkatan['nama_angkatan']; ?>">
        </div>
        <div class="form-group col-lg-5">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" value="<?= $angkatan['tahun']; ?>">
        </div>
        
        <button type="submit" name="edit" class="btn btn-primary ">Edit Save</button>

    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer --> 