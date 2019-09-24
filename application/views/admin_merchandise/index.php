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


            <a href="<?= base_url(); ?>Admin_merchandise/add" class="btn btn-primary">Add New goods</a>

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Barang </th>
                            <th scope="col">kategori </th>

                            <th scope="col">image </th>


                            <th scope="col">harga </th>

                            <th scope="col">No whatsappDanus </th>
                            <th scope="col">deskripsi </th>

                            <th scope="col">Action </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($merchandise as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sm['nama_barang']; ?></td>
                                <td><?= $sm['kategori']; ?></td>
                                <td><img src=" <?= base_url('assets/img/merchandise/') . $sm['gambar']; ?>" class="card-img" style=" width:8rem; height: 8rem;"></td>

                                <td><?= $sm['harga']; ?></td>

                                <td><?= $sm['whatsapp_danus']; ?></td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 150px;">
                                        <?= $sm['deskripsi']; ?>
                                    </span>


                                </td>

                                <td>
                                    <a href="<?= base_url(); ?>Admin_merchandise/edit/<?= $sm['id']; ?>" class="badge badge-success">Edit</a>
                                    <a href="<?= base_url(); ?>Admin_merchandise/delete/<?= $sm['id']; ?>" class="badge badge-danger" onclick="return confirm ('Are You Sure delete the data?') ;">Delete</a>



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