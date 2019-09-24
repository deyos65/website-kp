<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $kategori['id']; ?>">
        <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
        <?php endif; ?>

        <div class="form-group col-lg-5">
            <label for="jenis_kategori">Jenis Kategori</label>
            <input type="text" class="form-control" id="jenis_kategori" name="jenis_kategori" placeholder="jenis_kategori" value="<?= $kategori['jenis_kategori']; ?>">
        </div>
       
        
        <button type="submit" name="edit" class="btn btn-primary ">Edit Save</button>

    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer --> 