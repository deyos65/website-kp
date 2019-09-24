<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
    <p><?php echo $this->session->flashdata('msg') ?></p>
    <?php echo form_open("Admin_article/edit_action", array('enctype' => 'multipart/form-data')); ?>

    <input type="hidden" name="id" value="<?= $article['id']; ?>">
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <div class="row justify-content-center mb-2 ">


        <div class="col-sm-5 ">
            <img src=" <?= base_url('assets/img/artikel/') . $article['image']; ?>" class="img-thumbnail img-fluid " style=" width:22rem; height: 15rem;" alt="">
        </div>
        <div class="col-sm-3 custom-file">
            <input type="file" class="custom-file-input" name="image" id="image">
            <label class="custom-file-label" for="poto_profil">Update Image</label>
            <p class=""><small class="text-muted">max image 2,5 MB</small></p>
        </div>

    </div>
    <div class="row ">
        <div class="form-group col-lg-3">
            <label for="judul">judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="judul Lengkap" value="<?= $article['judul']; ?>">
        </div>
        <div class="form-group col-lg-3">
            <label for="kategori">kategori awal</label>
            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="kategori Lengkap" value="<?= $article['jenis_kategori']; ?>" readonly>
        </div>
        <div class="form-group col-lg-3">
            <label for="periode">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-control">
                <option value="">update Kategori</option>

                <?php foreach ($kategori as $m) : ?>
                    <option value="<?= $m['id']; ?>"><?= $m['jenis_kategori']; ?></option>
                <?php endforeach; ?>

            </select>
        </div>

    </div>





    <div class="form-group row mt-2">
        <div class="col ">
            <textarea name="isi" id="isi" cols="20" rows="10"><?= $article['isi']; ?></textarea>
        </div>
    </div>




    <button type="submit" name="edit" class="btn btn-primary ">Edit Save</button>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->