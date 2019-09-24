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


            <a href="<?= base_url(); ?>Admin_article/add" class="btn btn-primary">Add New Article</a>

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul </th>
                            <th scope="col">kategori </th>
                            <th scope="col">image </th>
                            <th scope="col">update pos </th>
                            <th scope="col">isi </th>

                            <th scope="col">Action </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($article as $sm) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $sm['judul']; ?></td>
                                <td><?= $sm['jenis_kategori']; ?></td>


                                <td><img src=" <?= base_url('assets/img/artikel/') . $sm['image']; ?>" class="card-img" style=" width:8rem; height: 8rem;"></td>

                                <td><?= date('d F Y', $sm['waktu_pembuatan']); ?></td>
                                <td><span class="d-inline-block text-truncate" style="max-width: 150px;"><?= $sm['isi']; ?></span></td>

                                <td>
                                    <a href="<?= base_url(); ?>Admin_article/edit/<?= $sm['id']; ?>" class="badge badge-success">Edit</a>
                                    <a href="<?= base_url(); ?>Admin_article/delete/<?= $sm['id']; ?>" class="badge badge-danger" onclick="return confirm ('Are You Sure delete the data?') ;">Delete</a>



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