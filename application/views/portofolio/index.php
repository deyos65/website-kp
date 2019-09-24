<!-- content -->
<div class="container">
    <div class="card mt-4">
        <div class="card-header text-center">
            Berikut Portofolio yang telah dicapai oleh MAPAK ALAM
        </div>

        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div class="container">
                    <div class="card-group ">
                        <?php foreach ($Portofolio as $at) : ?>
                            <div class="col-md-6 col-lg-4  ">
                                <div class="card mb-3">
                                    <div class="content-center">

                                        <img src="<?= base_url('assets/img/artikel/') . $at['image']; ?>" alt="..." class="img-fluid " style=" width:19rem; height: 13rem;">
                                    </div>
                                    <div class=" card-body ">
                                        <h6 class=" card-title"> <?= $at['judul']; ?></h6>


                                        <div class="mt-2">
                                            <p class=""><small><?= $at['jenis_kategori']; ?></small></p>
                                        </div>
                                        <div class=""><a href="<?php echo base_url(); ?>Artikel/detail/<?= $at['id'] ?>" class="btn btn-sm btn-info float-center ">Info Selengkapnya</a> </div>


                                        <blockquote class="blockquote text-center mt-2">

                                            <footer class="blockquote-footer">last Update <cite title="Source Title"><?= date('d F Y', $at['waktu_pembuatan']); ?></cite></footer>
                                        </blockquote>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </blockquote>
        </div>


    </div>
</div>

</div>