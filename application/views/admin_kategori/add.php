<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form action="" method="post" enctype="multipart/multipart/form-data">

        <?php if (validation_errors()) : ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?= validation_errors(); ?>
                                            </div>
                                                                            <?php endif; ?>

        <div class="form-group col-lg-8">
            <label for="jenis_kategori">Name Kategori</label>
            <input type="text" class="form-control" id="jenis_kategori" name="jenis_kategori" placeholder="Name kategori ">
        </div>


        <button type="submit" name="add" class="btn btn-primary ">Add New Kategori</button>

    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->