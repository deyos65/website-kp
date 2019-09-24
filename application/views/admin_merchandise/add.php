<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php echo form_open("Admin_merchandise/add", array('enctype' => 'multipart/form-data')); ?>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="nama_barang">
                name of goods</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder=".... ">
        </div>
        <div class="form-group col-lg-6">
            <label for="harga">
                price</label>
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Rp..">
        </div>
        <div class="input-group mb-3 col-lg-6">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">
                    type of category</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="kategori">
                <option selected>Choose...</option>
                <option value="Khusus Anggota">Khusus Anggota</option>
                <option value="Umum">Umum</option>

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





    <div class="input-group col-lg-8  col-sm-12">
        <div class="input-group-prepend m-0 p-0">
            <span class="input-group-text">
                item description</span>
        </div>
        <textarea class="form-control" id="deskripsi" name="deskripsi" aria-label="With textarea">
                            </textarea>

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