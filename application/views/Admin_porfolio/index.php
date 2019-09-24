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


            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#NewSubMenuModel">Add Sub Menu</a>

            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Jabatan </th>
                            <th scope="col">Periode </th>
                            <th scope="col">Foto Profile </th>
                            <th scope="col">Jurusan </th>
                            <th scope="col">Instagram </th>
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
                            <td><?= $sm['periode']; ?></td>
                            <td><?= $sm['poto_profil']; ?></td>
                            <td><?= $sm['jurusan']; ?></td>
                            <td><?= $sm['instagram']; ?></td>
                            <td>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#EditSubMenuModel">Edit</a>
                                <a href="<?= base_url(); ?>menu/delete/<?= $sm['id']; ?>" class="badge badge-danger" onclick="return confirm ('Are You Sure delete the data?') ;" data-toggle="modal" data-target="#DeleteSubMenuModel">Delete</a>



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