<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php echo form_open("Admin_article/add", array('enctype' => 'multipart/form-data')); ?>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="form-group col-lg-4">
            <label for="judul">judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="judul lengkap">
        </div>
        <div class="form-group col-lg-4">
            <label for="periode">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="form-control">
                <option value="">Pilih Kategori</option>

                <?php foreach ($kategori as $m) : ?>
                    <option value="<?= $m['id']; ?>"><?= $m['jenis_kategori']; ?></option>
                <?php endforeach; ?>

            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2">Image</div> <br>

        <div class="row">
            <div class="">

                <div class=" custom-file">
                    <input type="file" class="custom-file-input" name="input_gambar" id="poto_profil">
                    <label class="custom-file-label" for="poto_profil">Choose file</label>
                    <p class=""><small class="text-muted">max image 2,5 MB</small></p>
                </div>


            </div>


        </div>

    </div>
    <div class="form-group ">
        <label for="isi">isi</label>
        <textarea name="isi" id="isi" cols="30" rows="10"></textarea>

    </div>

    <input type="submit" name="submit" value="Simpan">



    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->