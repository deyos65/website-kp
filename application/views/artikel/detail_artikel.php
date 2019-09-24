<div class="container justify-content-center">
    <div class="card mt-4 p-3 justify-content-center">
        <div class="container justify-content-center">

            <h3 class="text-center "><?= $article['judul']; ?></h3>
            <blockquote class="blockquote text-center mt-2">

                <footer class="blockquote-footer">last Update <cite title="Source Title"><?= date('d F Y', $article['waktu_pembuatan']); ?></cite></footer>
            </blockquote>
            <div class="badge badge-info text-wrap" style="width: 6rem;">
                <?= $article['jenis_kategori']; ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 justify-content-center"><img src="<?= base_url('assets/img/artikel/') . $article['image']; ?>" alt="..." class="img-fluid" style="  height: 18rem;"></div>
            </div>
            <div class="row mt-4 p-3 justify-content-center">

                <div class="col justify-content-center"><?= $article['isi']; ?></div>
            </div>

        </div>
    </div>
</div>