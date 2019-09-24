<section>
    <div class="container">
        <div class="card mt-4">


            <div class="container detailM">
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <img src=" <?= base_url('assets/img/kepengurusan/') . $kepengurusan_detail['poto_profil']; ?>" class="figure-img img-fluid rounded" style=" width:20rem; height: 18rem;">

                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">

                        <h5 class="text-monospace"><?= $kepengurusan_detail['Jabatan']; ?> (<?= $kepengurusan_detail['periode']; ?>)</h5>
                        <h2 class="font-weight-bolder"><?= $kepengurusan_detail['nama']; ?><small> / <?= $kepengurusan_detail['nama_angkatan']; ?></small></h2>
                        <P><?= $kepengurusan_detail['deskripsi']; ?></P>

                        <h5> <a href="#" class="badge badge-info font-weight-normal "><?= $kepengurusan_detail['jurusan']; ?></a></h5>
                        <!-- <h4><a href="https://api.whatsapp.com/send?phone=&text=Halo%20Admin%20Saya%20Mau%20Order%20Barang%20yang%20dijual%20diWebsite" class="text-monospace font-light-normal text-sm text-reset text-decoration-none badge badge-pill badge-dark">Order Now</a></h4> -->
                        <blockquote class="blockquote text-center mt-2">

                            <footer class="blockquote-footer"> Instagram : <cite title="Source Title"><?= $kepengurusan_detail['instagram']; ?></cite></footer>
                        </blockquote>
                    </div>

                </div>

            </div>

            <hr class="sidebar-divider mt-3">
            <div class="row mb-3">
                <div class="col-sm-12 text-center mt-3">

                    <h5 class="font-weight-light mb-3">Dewan Pengurus Harian MAPAK ALAM</h5>
                </div>
            </div>
            <div class="container justify-content-center">
                <div class="row justify-content-center p-3">
                    <?php foreach ($kepengurusan as $mc) : ?>
                        <div class="col-lg-3 ">
                            <figure class="figure">
                                <img src=" <?= base_url('assets/img/kepengurusan/') . $mc['poto_profil']; ?>" class="figure-img img-fluid rounded-circle" style=" width:17rem; height: 16rem;">


                                <p class="mb-0 text-center"><?= $mc['nama']; ?></p>

                                <figcaption class="figure-caption text-center"><?= $mc['Jabatan']; ?></figcaption>
                                <figcaption class="figure-caption text-center"><?= $mc['periode']; ?></figcaption>
                                <div class="d-flex justify-content-center mt-1">

                                    <a href="<?php echo base_url(); ?>profile/detail/<?= $mc['id'] ?>" class="btn btn-sm btn-success float-center ">detail</a>
                                </div>
                            </figure>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>
    </div>
</section>