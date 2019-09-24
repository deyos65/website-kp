<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>


            <a href="<?= base_url(); ?>Admin_kepengurusan/add" class="btn btn-primary">Add New Pengurus</a>

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Jabatan </th>
                            <th scope="col">angkatan </th>
                            <th scope="col">Periode </th>
                            <th scope="col">Foto Profile </th>
                            <th scope="col">Jurusan </th>
                            <th scope="col">Instagram </th>
                            <th scope="col">Deskripsi </th>
                            <th scope="col">Action </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kepengurusan as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sm['nama']; ?></td>
                                <td><?= $sm['Jabatan']; ?></td>
                                <td><?= $sm['nama_angkatan']; ?></td>
                                <td><?= $sm['periode']; ?></td>
                                <td><img src=" <?= base_url('assets/img/kepengurusan/') . $sm['poto_profil']; ?>" class="card-img" style=" width:8rem; height: 8rem;"></td>

                                <td><?= $sm['jurusan']; ?></td>
                                <td><?= $sm['instagram']; ?></td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 150px;"><?= $sm['deskripsi']; ?></td>

                                <td>
                                    <a href="<?= base_url(); ?>Admin_kepengurusan/edit/<?= $sm['id']; ?>" class="badge badge-success">Edit</a>
                                    <a href="<?= base_url(); ?>Admin_kepengurusan/delete/<?= $sm['id']; ?>" class="badge badge-danger" onclick="return confirm ('Are You Sure delete the data?') ;">Delete</a>



                                </td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->

<!-- Modal  Add-->
<div class="modal fade" id="NewKepengurusan" tabindex="-1" role="dialog" aria-labelledby="NewKepengurusanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewKepengurusanLabel">Add New Kepengurusan
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Admin_kepengurusan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">

                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>



                    <div class="form-group">
                        <input type="text" class="form-control" id="Jabatan" name="Jabatan" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="periode" name="periode" placeholder="Periode">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end Modal Add -->