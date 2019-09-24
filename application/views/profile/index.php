<div class="jumbotron profile jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Mahasiswa Pecinta Kelestarian Alam </h1>
        <p class="lead text-center text-white">Universitas Pasundan</p>
    </div>
</div>

<!-- isi -->
<div class="container">
    <!-- info panel -->


    <!-- About -->
    <section class="bg-light about" id="about">
        <div class="container p-2 mb-3  ">
            <div class="row workingspace">

                <div class="col  ">
                    <h3 class="text-center">MAPAK <span>ALAM</span> UNPAS <span>BANDUNG</span> </h3>

                    <p class="text-justify font-weight-lighter p-3"><span>MAPAK ALAM (Mahasiswa Pecinta Kelestarian Alam) Universitas Pasundan Bandung adalah mahasiswa dari berbagai jurusan Universitas Pasundan yang berani tampil kedepan dengan penuh kesadaran untuk mencintai dan menjaga kelestarian lingkungan agar tetap lestari, dan mencoba menerobos segala kesulitan dengan dilandasi kemahasiswaannya mereka membentuk suatu wadah yang menampung minat mahasiswa di bidang pecinta alam.
                            MAPAK ALAM adalah salah satu organisasi kemahasiswaan yang berada dibawah naungan Universitas Pasundan Bandung yang bergerak dalam bidang kelestarian alam. MAPAK ALAM yang berlandaskan Pancasila didirikan di Linggar Jati pada tanggal 28 Oktober 1979. MAPAK ALAM merupakan organisasi pecinta alam satu-satunya yang di sahkan oleh Rektorat Universitas Pasundan Bandung.
                            <br>Sejak berdirinya MAPAK ALAM Universitas Pasundan Bandung, hingga saat ini telah memiliki banyak angkatan, yaitu :
                        </span></p>
                    <div class="row">
                        <?php foreach ($angkatan as $ak) : ?>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 justify-content-center text-center mb-2">
                                <div class="col">
                                    <p class="text-capitalize"><strong> <?= $ak['nama_angkatan']; ?></strong></p>
                                </div>
                                <div class="col">
                                    <blockquote class="blockquote text-center mt-2">

                                        <footer class="blockquote-footer"> year : <cite title="Source Title"><?= $ak['tahun']; ?></cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>
</div>
<!-- end About -->
<div class="jumbotron hymne jumbotron-fluid">


    <p class="lead text-white text-center font-italic"><strong> "Bara Jiwa Tegar Kunyalakan Untukmu <br>
            Mapak Alam Kutegakan Dan Kubawa<br>
            Bumi Raya Ciptaan Tuhan Yang Kuasa<br>
            Kan Ku Cinta Di Dalam Mapak Alamku"</strong>
    </p>

</div>
<!-- navigasi -->


<section class="bg-light mt-4 p-3">
    <div class="container">
        <div class="row">
            <div class="col ">
                <h3>Orientasi Penerimaan, Pembinaan, dan Pengembangan</h3>
                <p>Acuan yang digunakan MAPAK ALAM dalam proses penerimaan serta proses pembinaan anggota MAPAK ALAM Universitas Pasundan Bandung terbagi menjadi :</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <p class="text-justify"> <strong> 1. Pendidikan Dasar</strong><br>

                    <span class="text-justify"> Pendidikan Dasar merupakan salah satu metode yang digunakan dalam penerimaan anggota, guna mencetak generasi penerus lembaga yang berkualitas. Adapun materi didalam Pendidikan Dasar yaitu:</span> <br>
                    <span>
                        1. Keorganisasian <br>
                        2. Lingkungan Hidup <br>
                        3. Caving<br>
                        4. Rock Climbing<br>
                        5. Gunung Hutan dan SAR<br>
                        6. Bahari<br>
                    </span>
                    Materi tersebut merupakan materi pokok yang diberikan dalam pendidikan dasar yang disertai dengan praktek yang dilakukan di lapangan kemudian dilanjutkan dengan masa bimbingan setelah masa pendidikan dasar berakhir.
                </p>
            </div>
            <div class="col-lg-6 col-md-6">
                <p class="text-justify"> <strong> 2. Masa bimbingan </strong><br>

                    <span class="text-justify"> Masa Bimbingan (MABIM) anggota muda adalah salah satu kegiatan yang wajib diikuti oleh semua anggota muda setelah masa Pendidikan Dasar. Kegiatan ini dimaksudkan untuk lebih mendalami materi-materi yang telah diberikan saat Pendidikan Dasar.</span> <br>
                    <span>

                </p>
                <p class="text-justify"> <strong> 3. Pembinaan</strong><br>

                    <span class="text-justify"> Pembinaan anggota MAPAK ALAM merupakan usaha mengembangkan kemampuan anggota dalam berbagai bidang (Anggaran Dasar BAB IV pasal 5) dan wajib diikuti oleh seluruh Anggota Muda untuk menyusun makalah sidang nomor anggota. </span> <br>
                    <span>

                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <P><strong> Pembinaan anggota MAPAK ALAM meliputi :</strong></P>
                <p>

                    1. Di bidang mental <br>
                    Mendidik jasmani dan rohani agar kuat dan tabah dalam menghadapi segala persoalan.<br>
                    2. Di bidang alam<br>
                    Mengamati, mendayagunakan, dan melestarikan alam untuk dimanfaatkan bagi kehidupan manusia.<br>
                    3. Di bidang organisasi<br>
                    Membina para anggota untuk percaya diri dalam melaksanakan kewajiban dengan penuh rasa tanggung jawab dan disiplin.<br>
                    4. Di bidang umum<br>
                    Mengadakan hubungan kerjasama dengan organisasi sejenis dan organisasi lainnya serta instansi pemerintahan.<br>
                    5. Menyelenggarakan kegiatan-kegiatan lainnya sesuai dengan sifat, fungsi, dan tujuan MAPAK ALAM.

                </p>

            </div>

            <div class="col-lg-6  col-xs-12">
                <figure class="figure">
                    <img src="<?php echo base_url(); ?>assets/img/pp.png" alt="workingspace" class="figure-img img-fluid img-rounded">
                    <figcaption class="figure-caption text-left">Alur Orientasi Penerimaan, Pembinaan dan Pengembangan</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header text-center">
                <strong> Dewan Pengurus Harian </strong>
            </div>
            <div class="container justify-content-center">
                <div class="row p-3 justify-content-center">
                    <?php foreach ($kepengurusan as $mc) : ?>
                        <div class="col-lg-3 ">
                            <figure class="figure">
                                <img src=" <?= base_url('assets/img/kepengurusan/') . $mc['poto_profil']; ?>" class="figure-img img-fluid rounded-circle" style=" width:15rem; height: 13rem;">


                                <p class="mb-0 text-center text-capitalize"><?= $mc['nama']; ?></p>

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



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="col d-flex justify-content-center mt-1">
                <?= $detail_kepengurusan['nama']; ?>
            </div>

        </div>
    </div>
</div>