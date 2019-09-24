<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php echo form_open("Admin_kepengurusan/edit_action", array('enctype' => 'multipart/form-data')); ?>
    <input type="hidden" name="id" value="<?= $kepengurusan['id']; ?>">
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <div class="row justify-content-center mb-2 ">


        <div class="col-sm-3 ">
            <img src=" <?= base_url('assets/img/kepengurusan/') . $kepengurusan['poto_profil']; ?>" class="rounded-circle img-fluid " style=" width:20rem; height: 18rem;" alt="">
        </div>
        <div class="col-sm-3 custom-file">
            <input type="file" class="custom-file-input" name="poto_profil" id="image">
            <label class="custom-file-label" for="poto_profil">Update Image</label>
            <p class=""><small class="text-muted">max image 2,5 MB</small></p>
        </div>

    </div>

    <div class="row">
        <div class="form-group col-lg-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $kepengurusan['nama']; ?>">
        </div>
        <div class="form-group col-lg-3">
            <label for="Jabatan">Jabatan</label>
            <input type="text" class="form-control" id="Jabatan" name="Jabatan" placeholder="Jabatan" value="<?= $kepengurusan['Jabatan']; ?>">
        </div>
        <div class="form-group col-lg-3">
            <label for="periode">Periode</label>
            <input type="text" class="form-control" id="periode" name="periode" placeholder="periode" value="<?= $kepengurusan['periode']; ?>">
        </div>
        <div class="form-group col-lg-3">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram " value="<?= $kepengurusan['instagram']; ?>">
        </div>

    </div>



    <div class="row">

        <div class="form-group col-lg-3">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="jurusan" value="<?= $kepengurusan['jurusan']; ?>">
        </div>
        <div class="col-5 input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Deskripsi</span>
            </div>
            <textarea class="form-control" aria-label="With textarea" id="deskripsi" name="deskripsi" value=""><?= $kepengurusan['deskripsi']; ?></textarea>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3">
            <button type=" submit" name="edit" class="btn btn-primary ">Edit Save</button>
        </div>
    </div>
    </form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->