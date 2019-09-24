<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php echo form_open_multipart('admin_angkatan/add'); ?>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <div class="form-group col-lg-8">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama_angkatan" name="nama_angkatan" placeholder="Nama Angkatan">
    </div>
    <div class="form-group col-lg-8">
        <label for="tahun">Tahun</label>
        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
    </div>


    <button type="submit" name="add" class="btn btn-primary ">Add New Angkatan</button>

    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->