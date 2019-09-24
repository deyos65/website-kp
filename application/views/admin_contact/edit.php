<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $contact['id']; ?>">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="form-group col-lg-5">
                <label for="gmail">gmail </label>
                <input type="text" class="form-control" id="gmail" name="gmail" placeholder="gmail" value="<?= $contact['gmail']; ?>">
            </div>
            <div class="form-group col-lg-5">
                <label for="facebook">facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook" value="<?= $contact['facebook']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-5">
                <label for="youtube">youtube</label>
                <input type="text" class="form-control" id="youtube" name="youtube" placeholder="youtube" value="<?= $contact['youtube']; ?>">
            </div>
            <div class="form-group col-lg-5">
                <label for="telephone">telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="example 628******" value="<?= $contact['telephone']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-5">
                <label for="whatsapp">whatsapp</label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="example 628******" value="<?= $contact['whatsapp']; ?>">
            </div>
            <div class="form-group col-lg-5">
                <label for="whatsapp">whatsapp Danus</label>
                <input type="text" class="form-control" id="whatsapp_danus" name="whatsapp_danus" placeholder="example 628******" value="<?= $contact['whatsapp_danus']; ?>">
            </div>
        </div>
        <button type="submit" name="edit" class="btn btn-success ">Edit Save</button>

    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->