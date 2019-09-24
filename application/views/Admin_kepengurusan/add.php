<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>
    <?php echo form_open_multipart('admin_kepengurusan/add'); ?>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
        </div>
        <div class="form-group col-lg-6">
            <label for="Jabatan">Jabatan</label>
            <input type="text" class="form-control" id="Jabatan" name="Jabatan" placeholder="Jabatan">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="periode">Periode</label>
            <input type="text" class="form-control" id="periode" name="periode" placeholder="periode">
        </div>
        <div class="form-group col-lg-6">
            <label for="periode">Angkatan</label>
            <select name="nama_angkatan" id="nama_angkatan" class="form-control">
                <option value="">Pilih angkatan</option>

                <?php foreach ($angkatan as $m) : ?>
                    <option value="<?= $m['id']; ?>"><?= $m['nama_angkatan']; ?></option>
                <?php endforeach; ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="jurusan">
        </div>
        <div class="form-group col-lg-6">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram ">
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

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Deskripsi</span>
        </div>
        <textarea class="form-control" aria-label="With textarea" id="deskripsi" name="deskripsi"></textarea>
    </div>
    <div class="row mt-4 ml-4">
        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
    </div>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer --           >       