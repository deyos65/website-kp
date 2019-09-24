<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <?php echo form_open("Admin_merchandise/edit_action", array('enctype' => 'multipart/form-data')); ?>
    <input type="hidden" name="id" value="<?= $merchandise['id']; ?>">
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="nama_barang">
                name of goods</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $merchandise['nama_barang']; ?>">
        </div>
        <div class="form-group col-lg-6">
            <label for="harga">
                price</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $merchandise['harga']; ?>">
        </div>


    </div>





    <div class="row">

        <div class="form-group col-lg-3">
            <label for="kategori">
                kategori awal</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $merchandise['kategori']; ?>" readonly>
        </div>
        <div class="form-group col-lg-3">
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori" class="form-control">
                <option value="">update Kategori</option>
                <option value="Khusus Anggota">Khusus Anggota</option>
                <option value="Umum">Umum</option>


            </select>
        </div>
        <div class="input-group col-lg-6  ">
            <div class="input-group-prepend ">
                <span class="input-group-text">
                    item description</span>
            </div>
            <textarea class="form-control" id="deskripsi" name="deskripsi" aria-label="With textarea" value=""><?= $merchandise['deskripsi']; ?>
                            </textarea>

        </div>
    </div>

    <div class="form-group row">



        <div class="col-sm-5 ">
            <img src=" <?= base_url('assets/img/merchandise/') . $merchandise['gambar']; ?>" class="img-thumbnail img-fluid" style=" width:19rem; height: 15rem;" alt="">
        </div>



    </div>
    <div class=" col-lg-5 custom-file">
        <input type="file" class="custom-file-input" name="gambar" id="gambar">
        <label class="custom-file-label" for="poto_profil">Update Image</label>
        <p class=""><small class="text-muted">max image 2,5 MB</small></p>
    </div>
    <div class="row mt-4">
        <div class="col-lg-5">
            <input type="submit" name="submit" value="Simpan" class="btn btn-info"></div>
    </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->