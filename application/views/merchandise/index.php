<div class="jumbotron profile jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Selamat Mata Air Bukan Air Mata</h1>

    </div>
</div>

<div class="container">
    <div class="card mt-4">
        <div class="card-header text-center">
            Daftar merchandise
        </div>

        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div class="container">
                    <div class="card-group ">
                        <?php foreach ($merchandise as $mc) : ?>
                            <div class="col-md-6 col-lg-4  ">
                                <div class="card mb-3">
                                    <div class="content-center">

                                        <img src="<?= base_url('assets/img/merchandise/') . $mc['gambar']; ?>" alt="..." class="img-fluid " style=" width:19rem; height: 18rem;">
                                    </div>
                                    <div class="card-body m-0 ">
                                        <h5 class="card-title"> <?= $mc['nama_barang']; ?></h5>


                                        <div>
                                            <p class="text-sm"><small> kategori : <span class="badge badge-warning text-wrap"><?= $mc['kategori']; ?></span></small></p>
                                        </div>
                                        <p class="card-text">
                                            <h6>
                                                <p> IDR : <?= $mc['harga']; ?></p>

                                            </h6>
                                        </p>
                                        <a href="<?php echo base_url(); ?>merchandise/detail/<?= $mc['id'] ?>" class="btn btn-sm btn-info float-center ">Info Selengkapnya</a>

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