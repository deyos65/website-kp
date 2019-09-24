<div class="container detailM">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <img src=" <?= base_url('assets/img/merchandise/') . $merchandise['gambar']; ?>" class="figure-img img-fluid rounded" style=" width:20rem; height: 18rem;">

        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">

            <h5 class="text-monospace"><?= $merchandise['kategori']; ?></h5>
            <h2 class="font-weight-bolder"><?= $merchandise['nama_barang']; ?></h2>
            <P><?= $merchandise['deskripsi']; ?></P>


            <h5> <a href="https://api.whatsapp.com/send?phone=<?= $merchandise['whatsapp_danus']; ?>&text=Halo%20Admin%20Saya%20Mau%20Order%20Barang%20yang%20dijual%20diWebsite" class="badge badge-info font-weight-normal ">Order Now </a>
                <p class=""><small class="text-muted">Harga : <?= $merchandise['harga']; ?></small></p>
            </h5>



        </div>
    </div>

</div>