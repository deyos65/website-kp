<div class="container">
    <div class="card mt-4 p-3">
        <div class="container ">

            <h3 class="text-center "><?= $isidentil['judul']; ?></h3>
            <blockquote class="blockquote text-center mt-2">

                <footer class="blockquote-footer">last Update <cite title="Source Title"><?= date('d F Y', $isidentil['waktu_pembuatan']); ?></cite></footer>
            </blockquote>
            <div class="badge badge-primary text-wrap" style="width: 6rem;">
                <?= $isidentil['jenis_kategori']; ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 justify-content-center"><img src="<?= base_url('assets/img/artikel/') . $isidentil['image']; ?>" alt="..." class="img-fluid" style="  height: 18rem;"></div>
            </div>
            <div class="row mt-4 p-3">

                <div class="col-1/"><?= $isidentil['isi']; ?></div>
            </div>

        </div>
    </div>
</div>