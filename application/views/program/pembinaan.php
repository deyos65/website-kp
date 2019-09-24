<div class="container">
    <div class="card mt-4 p-3">
        <div class="container ">

            <h3 class="text-center "><?= $pembinaan['judul']; ?></h3>
            <blockquote class="blockquote text-center mt-2">

                <footer class="blockquote-footer">last Update <cite title="Source Title"><?= date('d F Y', $pembinaan['waktu_pembuatan']); ?></cite></footer>
            </blockquote>
            <div class="badge badge-warning text-wrap" style="width: 10rem;">
                <?= $pembinaan['jenis_kategori']; ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 justify-content-center"><img src="<?= base_url('assets/img/artikel/') . $pembinaan['image']; ?>" alt="..." class="img-fluid"></div>
            </div>
            <div class="row mt-4 p-3">

                <div class="col-1/"><?= $pembinaan['isi']; ?></div>
            </div>

        </div>
    </div>
</div>