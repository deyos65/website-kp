<div class="container mt-5">
    <!-- Search -->
    <div class="container">
        <form action="" method="post">
            <div class="row ">
                <div class="form-group col-lg-5 col-xs-5 ml-auto">

                    <select name="kategori_id" id="kategori_id" class="form-control">
                        <option value="">Pilih Kategori Article</option>

                        <?php foreach ($kategori as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['jenis_kategori']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div class="col-lg-4 col-xs-5">
                    <span class="input-group-btn">
                        <button class="btn btn-search btn-info" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
                    </span>
                </div>
        </form>
    </div>
</div>
<!-- end -->

<!-- content -->
<div class="container">
    <div class="card mt-4">
        <div class="card-header text-center">
            Daftar Artikel
        </div>

        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <div class="container">
                    <div class="card-group ">
                        <?php foreach ($article as $at) : ?>
                            <div class="col-md-6 col-lg-4  ">
                                <div class="card mb-3">
                                    <div class="content-center">

                                        <img src="<?= base_url('assets/img/artikel/') . $at['image']; ?>" alt="..." class="img-fluid " style=" width:19rem; height: 13rem;">
                                    </div>
                                    <div class="card-body  ">
                                        <h6 class="card-title"> <?= $at['judul']; ?></h6>


                                        <div class="mt-2">
                                            <p class=""><small><?= $at['jenis_kategori']; ?></small></p>
                                        </div>
                                        <div class=""><a href="<?php echo base_url(); ?>Artikel/detail/<?= $at['id'] ?>" class="btn btn-sm btn-success float-center ">Info Selengkapnya</a> </div>


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