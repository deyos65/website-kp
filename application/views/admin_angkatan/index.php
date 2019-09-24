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


            <a href="<?= base_url(); ?>Admin_angkatan/add" class="btn btn-primary">Add Angkatan</a>

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Angkatan</th>
                            <th scope="col">Tahun Angkatan </th>

                            <th scope="col">Action </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($angkatan as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sm['nama_angkatan']; ?></td>
                                <td><?= $sm['tahun']; ?></td>

                                <td>
                                    <a href="<?= base_url(); ?>Admin_angkatan/edit/<?= $sm['id']; ?>" class="badge badge-success">Edit</a>



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